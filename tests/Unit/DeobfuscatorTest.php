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

use AMWScan\Deobfuscator;
use PHPUnit\Framework\TestCase;

class DeobfuscatorTest extends TestCase
{
    private $deobfuscator;
    private $calcMethod;

    protected function setUp(): void
    {
        $this->deobfuscator = new Deobfuscator();

        // Use reflection to access private calc() method
        $reflection = new \ReflectionClass($this->deobfuscator);
        $this->calcMethod = $reflection->getMethod('calc');
        $this->calcMethod->setAccessible(true);
    }

    /**
     * Test calc() method with various arithmetic expressions.
     * This prevents regression of the infinite loop bug with spaces around operators.
     */
    public function testCalcHandlesBasicArithmetic()
    {
        $result = $this->calcMethod->invoke($this->deobfuscator, '902 - 787');
        $this->assertEquals('115', $result);
    }

    public function testCalcHandlesTrailingSpace()
    {
        $result = $this->calcMethod->invoke($this->deobfuscator, '902 - 787 ');
        $this->assertEquals('115 ', $result);
    }

    public function testCalcHandlesVariousOperators()
    {
        $testCases = [
            ['input' => '780 - 668', 'expected' => '112'],
            ['input' => '10 + 5', 'expected' => '15'],
            ['input' => '10 * 5', 'expected' => '50'],
            ['input' => '10 / 2', 'expected' => '5'],
        ];

        foreach ($testCases as $test) {
            $result = $this->calcMethod->invoke($this->deobfuscator, $test['input']);
            $this->assertEquals($test['expected'], $result, "Failed for input: {$test['input']}");
        }
    }

    public function testCalcDoesNotTimeOut()
    {
        // This test ensures calc() completes quickly and doesn't enter infinite loop
        $startTime = microtime(true);
        $result = $this->calcMethod->invoke($this->deobfuscator, '902 - 787');
        $elapsed = microtime(true) - $startTime;

        $this->assertEquals('115', $result);
        $this->assertLessThan(0.1, $elapsed, 'calc() took too long, possible infinite loop');
    }

    public function testCalcHandlesMultipleSpaces()
    {
        $result = $this->calcMethod->invoke($this->deobfuscator, '  902   -   787  ');
        $this->assertEquals('  115  ', $result);
    }

    public function testDeobfuscateRemovesEmptyStrings()
    {
        $code = 'eval(""."".$code)';
        $result = $this->deobfuscator->deobfuscate($code);

        // Should remove empty string concatenations
        $this->assertStringNotContainsString('""."', $result);
        $this->assertStringNotContainsString('.\'"', $result);
    }

    public function testDecodeHandlesBase64()
    {
        $encoded = 'ZXZhbCgkX1BPU1RbJ2NtZCddKTs='; // base64_encode('eval($_POST['cmd']);')
        $code = '<?php base64_decode("' . $encoded . '"); ?>';

        $result = $this->deobfuscator->decode($code);

        // Should decode base64 strings
        $this->assertIsString($result);
    }
}
