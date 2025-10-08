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
 * Test path filtering and ignore functionality.
 */
class PathControlsTest extends CLITestCase
{
    public function testIgnorePathsExcludesFiles()
    {
        // Create a temporary ignored file
        $ignoredDir = $this->tmpPath . '/ignored';
        if (!is_dir($ignoredDir)) {
            mkdir($ignoredDir, 0777, true);
        }

        $ignoredFile = $ignoredDir . '/should_be_ignored.php';
        file_put_contents($ignoredFile, '<?php eval($_POST["cmd"]); ?>');

        $result = $this->runScanner(
            $this->tmpPath,
            ['--ignore-paths=' . $ignoredDir . '/*', '--report', '--auto-skip']
        );

        // Should not detect the ignored file
        $output = $result['output'];
        $this->assertStringNotContainsString('should_be_ignored.php', $output);

        // Cleanup
        unlink($ignoredFile);
        rmdir($ignoredDir);
    }

    public function testFilterPathsIncludesOnlySpecified()
    {
        // This test validates that filter-paths works with existing files
        $result = $this->runScanner(
            $this->fixturesPath,
            ['--filter-paths=*/clean/*', '--report', '--auto-skip']
        );

        // Should scan clean directory
        $this->assertEquals(0, $result['exitCode'], 'Filtered clean path should be clean');
    }

    public function testIgnorePathsWithWildcard()
    {
        $result = $this->runScanner(
            $this->fixturesPath,
            ['--ignore-paths=*/malware/*,*/obfuscated/*', '--report', '--auto-skip']
        );

        // Should ignore malware and obfuscated directories
        $this->assertEquals(0, $result['exitCode'], 'Should be clean when ignoring malware dirs');
    }
}
