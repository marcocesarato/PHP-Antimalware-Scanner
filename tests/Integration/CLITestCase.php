<?php

/**
 * PHP Antimalware Scanner.
 *
 * @author Marco Cesarato <cesarato.developer@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 *
 * @see https://github.com/marcocesarato/PHP-Antimalware-Scanner
 */

namespace AMWScan\Tests\Integration;

use PHPUnit\Framework\TestCase;

/**
 * Base class for CLI integration tests.
 */
abstract class CLITestCase extends TestCase
{
    protected $scannerPath;
    protected $fixturesPath;
    protected $reportsPath;
    protected $tmpPath;

    protected function setUp(): void
    {
        $this->scannerPath = realpath(__DIR__ . '/../../src/index.php');
        $this->fixturesPath = realpath(__DIR__ . '/../Fixtures');
        $this->reportsPath = $this->fixturesPath . '/reports';
        $this->tmpPath = $this->fixturesPath . '/tmp';

        // Ensure directories exist
        if (!is_dir($this->reportsPath)) {
            mkdir($this->reportsPath, 0777, true);
        }
        if (!is_dir($this->tmpPath)) {
            mkdir($this->tmpPath, 0777, true);
        }

        // Clean up previous test artifacts
        $this->cleanupTestArtifacts();
    }

    protected function tearDown(): void
    {
        $this->cleanupTestArtifacts();
    }

    /**
     * Execute scanner with given arguments.
     *
     * @param string $targetPath Path to scan
     * @param array $args Additional arguments
     *
     * @return array ['output' => string, 'exitCode' => int]
     */
    protected function runScanner($targetPath, array $args = [])
    {
        $command = sprintf(
            'php %s %s %s 2>&1',
            escapeshellarg($this->scannerPath),
            escapeshellarg($targetPath),
            implode(' ', array_map('escapeshellarg', $args))
        );

        exec($command, $output, $exitCode);

        return [
            'output' => implode("\n", $output),
            'exitCode' => $exitCode,
        ];
    }

    /**
     * Clean up test artifacts like reports and temporary files.
     */
    protected function cleanupTestArtifacts()
    {
        // Clean reports directory
        if (is_dir($this->reportsPath)) {
            $files = glob($this->reportsPath . '/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }

        // Clean tmp directory
        if (is_dir($this->tmpPath)) {
            $files = glob($this->tmpPath . '/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                } elseif (is_dir($file)) {
                    // Recursively remove directory
                    $subFiles = glob($file . '/*');
                    foreach ($subFiles as $subFile) {
                        if (is_file($subFile)) {
                            unlink($subFile);
                        }
                    }
                    @rmdir($file);
                }
            }
        }

        // Clean scanner artifacts in fixtures paths (with dynamic names)
        $fixturesDirs = [
            $this->fixturesPath . '/clean',
            $this->fixturesPath . '/malware',
            $this->fixturesPath . '/obfuscated',
        ];

        foreach ($fixturesDirs as $dir) {
            if (is_dir($dir)) {
                // Clean dynamic report files
                $reports = array_merge(
                    glob($dir . '/scanner-report*.html'),
                    glob($dir . '/scanner-report*.txt'),
                    glob($dir . '/scanner-whitelist.json')
                );

                foreach ($reports as $report) {
                    if (file_exists($report)) {
                        unlink($report);
                    }
                }
            }
        }
    }
}
