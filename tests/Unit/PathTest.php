<?php

/**
 * PHP Antimalware Scanner.
 *
 * @author Marco Cesarato <cesarato.developer@gmail.com>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 *
 * @see https://github.com/marcocesarato/PHP-Antimalware-Scanner
 */

namespace AMWScan\Tests\Unit;

use AMWScan\Path;
use PHPUnit\Framework\TestCase;

class PathTest extends TestCase
{
    public function testGetNormalizesPath()
    {
        $path = Path::get('/path/to//file.php');
        $this->assertEquals('/path/to/file.php', $path);
    }

    public function testGetConvertsSlashes()
    {
        $path = Path::get('path\\to\\file.php');
        $expected = 'path' . DIRECTORY_SEPARATOR . 'to' . DIRECTORY_SEPARATOR . 'file.php';
        $this->assertEquals($expected, $path);
    }

    public function testGetTrimsWhitespace()
    {
        $path = Path::get('  /path/to/file.php  ');
        $this->assertEquals('/path/to/file.php', $path);
    }

    public function testSizeToBytesWithKilobytes()
    {
        $bytes = Path::sizeToBytes('5KB');
        $this->assertEquals(5 * 1024, $bytes);
    }

    public function testSizeToBytesWithMegabytes()
    {
        $bytes = Path::sizeToBytes('10MB');
        $this->assertEquals(10 * 1024 * 1024, $bytes);
    }

    public function testSizeToBytesWithGigabytes()
    {
        $bytes = Path::sizeToBytes('2GB');
        $this->assertEquals(2 * 1024 * 1024 * 1024, $bytes);
    }

    public function testSizeToBytesWithBytes()
    {
        $bytes = Path::sizeToBytes('1024');
        $this->assertEquals(1024, $bytes);
    }

    public function testSizeToBytesWithInvalidUnit()
    {
        // Suppress warnings for undefined array key
        $bytes = @Path::sizeToBytes('10XX');
        // With invalid unit, should return null or numeric value
        $this->assertTrue($bytes === null || is_numeric($bytes));
    }

    public function testGetFilesizeFormatsBytes()
    {
        $tempFile = tempnam(sys_get_temp_dir(), 'test_');
        file_put_contents($tempFile, str_repeat('a', 1024)); // 1KB

        $size = Path::getFilesize($tempFile);
        $this->assertStringContainsString('1.00', $size);
        $this->assertStringContainsString('kB', $size);

        unlink($tempFile);
    }
}
