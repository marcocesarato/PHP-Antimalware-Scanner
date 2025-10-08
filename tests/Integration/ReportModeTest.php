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
 * Test report mode functionality with different formats.
 */
class ReportModeTest extends CLITestCase
{
    public function testReportModeCreatesHtmlReport()
    {
        $reportPath = $this->reportsPath . '/test-html-report.html';

        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip', '--path-report=' . $this->reportsPath . '/test-html-report']
        );

        $this->assertFileExists($reportPath, 'HTML report should be created');

        $reportContent = file_get_contents($reportPath);
        $this->assertStringContainsString('<html', strtolower($reportContent));
        $this->assertStringContainsString('report', strtolower($reportContent));

        // Cleanup
        unlink($reportPath);
    }

    public function testReportModeCreatesTextReport()
    {
        $reportPath = $this->reportsPath . '/test-text-report.log';

        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--report-format=txt', '--auto-skip', '--path-report=' . $this->reportsPath . '/test-text-report']
        );

        $this->assertFileExists($reportPath, 'Text report should be created');

        $reportContent = file_get_contents($reportPath);
        $this->assertIsString($reportContent);
        $this->assertNotEmpty($reportContent);

        // Cleanup
        unlink($reportPath);
    }

    public function testReportContainsDetectedFiles()
    {
        $reportPath = $this->reportsPath . '/test-detected-files.html';

        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip', '--path-report=' . $this->reportsPath . '/test-detected-files']
        );

        $this->assertFileExists($reportPath);

        $reportContent = file_get_contents($reportPath);

        // Report should reference at least one malware file
        $this->assertTrue(
            strpos($reportContent, 'eval_exploit.php') !== false
            || strpos($reportContent, 'backdoor.php') !== false
            || strpos($reportContent, 'system_exploit.php') !== false,
            'Report should contain detected malware filenames'
        );

        // Cleanup
        unlink($reportPath);
    }

    public function testReportIncludesStatistics()
    {
        $reportPath = $this->reportsPath . '/test-statistics.html';

        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip', '--path-report=' . $this->reportsPath . '/test-statistics']
        );

        $this->assertFileExists($reportPath);

        $reportContent = strtolower(file_get_contents($reportPath));

        // Report should contain statistics
        $this->assertTrue(
            strpos($reportContent, 'scanned') !== false
            || strpos($reportContent, 'detected') !== false
            || strpos($reportContent, 'infected') !== false,
            'Report should contain scan statistics'
        );

        // Cleanup
        unlink($reportPath);
    }
}
