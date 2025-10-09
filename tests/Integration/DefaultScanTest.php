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

/**
 * Test default scanning behavior and exit codes.
 */
class DefaultScanTest extends CLITestCase
{
    public function testScanCleanDirectoryExitsWithZero()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/clean',
            ['--report', '--auto-skip']
        );

        $this->assertEquals(0, $result['exitCode'], 'Clean directory should exit with code 0');
        $this->assertStringContainsString('scanned', strtolower($result['output']));
    }

    public function testScanMalwareDirectoryExitsWithOne()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip']
        );

        $this->assertEquals(1, $result['exitCode'], 'Malware directory should exit with code 1');
        $this->assertStringContainsString('detected', strtolower($result['output']));
    }

    public function testScanDisplaysVersionInformation()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/clean',
            ['--report', '--auto-skip']
        );

        $this->assertStringContainsString('PHP Antimalware Scanner', $result['output']);
    }

    public function testScanCountsFilesScanned()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/clean',
            ['--report', '--auto-skip']
        );

        // Should report the number of files scanned
        $this->assertMatchesRegularExpression('/Files scanned:\s*\d+/i', $result['output']);
    }

    public function testScanDetectsMalwarePatterns()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip']
        );

        $output = strtolower($result['output']);

        // Should detect dangerous patterns
        $this->assertTrue(
            strpos($output, 'eval') !== false
            || strpos($output, 'execution') !== false
            || strpos($output, 'exploit') !== false,
            'Should detect eval or execution patterns'
        );
    }
}
