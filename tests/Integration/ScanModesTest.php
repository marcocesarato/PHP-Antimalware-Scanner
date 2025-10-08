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
 * Test predefined scanning modes (lite, only-exploits, only-functions, only-signatures).
 */
class ScanModesTest extends CLITestCase
{
    public function testLiteModeExecutes()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--lite', '--report', '--auto-skip']
        );

        $output = strtolower($result['output']);
        $this->assertTrue(
            strpos($output, 'agile') !== false || strpos($output, 'lite') !== false,
            'Lite mode should be indicated in output'
        );
    }

    public function testOnlyExploitsModeExecutes()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--only-exploits', '--report', '--auto-skip']
        );

        $output = strtolower($result['output']);
        $this->assertStringContainsString('exploit', $output, 'Should mention exploit mode');
    }

    public function testOnlyFunctionsModeExecutes()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--only-functions', '--report', '--auto-skip']
        );

        $output = strtolower($result['output']);
        $this->assertStringContainsString('function', $output, 'Should mention function mode');
    }

    public function testOnlySignaturesModeExecutes()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--only-signatures', '--report', '--auto-skip']
        );

        $output = strtolower($result['output']);
        $this->assertStringContainsString('signature', $output, 'Should mention signature mode');
    }

    public function testLiteModeDetectsMalware()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--lite', '--report', '--auto-skip']
        );

        // Lite mode should still detect major threats
        $this->assertEquals(1, $result['exitCode'], 'Lite mode should detect malware');
    }

    public function testOnlyExploitsModeDetectsMalware()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--only-exploits', '--report', '--auto-skip']
        );

        // Should detect exploits in malware files
        $this->assertEquals(1, $result['exitCode'], 'Only-exploits mode should detect malware');
    }

    public function testCannotCombineIncompatibleModes()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/clean',
            ['--only-exploits', '--only-functions', '--only-signatures', '--report', '--auto-skip']
        );

        $output = strtolower($result['output']);
        // Should error about incompatible flags
        $this->assertTrue(
            strpos($output, "can't") !== false || strpos($output, 'cannot') !== false,
            'Should reject incompatible mode combinations'
        );
    }
}
