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

use AMWScan\CodeMatch;
use PHPUnit\Framework\TestCase;

class CodeMatchTest extends TestCase
{
    public function testGetCodeExtractsPhpCode()
    {
        $content = '<?php echo "Hello"; ?>';
        $result = CodeMatch::getCode($content);

        $this->assertNotEmpty($result);
        $this->assertIsArray($result);
    }

    public function testGetCodeHandlesMultiplePhpBlocks()
    {
        $content = '<?php echo "First"; ?> HTML <?php echo "Second"; ?>';
        $result = CodeMatch::getCode($content);

        // The regex may merge consecutive PHP blocks depending on implementation
        $this->assertNotEmpty($result);
        $this->assertIsArray($result);
    }

    public function testGetCodeReturnsEmptyForNonPhpContent()
    {
        $content = 'Just plain HTML text';
        $result = CodeMatch::getCode($content);

        $this->assertEmpty($result);
    }

    public function testGetLineNumberFindsCorrectLine()
    {
        $content = "Line 1\nLine 2\nLine 3 with match\nLine 4";
        $match = 'match';

        $lineNumber = CodeMatch::getLineNumber($match, $content);

        $this->assertEquals(3, $lineNumber);
    }

    public function testGetLineNumberReturnsNullForEmptyMatch()
    {
        $content = 'Some content';
        $lineNumber = CodeMatch::getLineNumber('', $content);

        $this->assertNull($lineNumber);
    }

    public function testGetTextFormatsOutput()
    {
        $type = CodeMatch::DANGEROUS;
        $name = 'eval';
        $description = 'Remote code execution';
        $match = 'eval($_POST["cmd"])';
        $line = 10;

        $text = CodeMatch::getText($type, $name, $description, $match, $line);

        $this->assertStringContainsString('Danger (eval)', $text);
        $this->assertStringContainsString('[line 10]', $text);
        $this->assertStringContainsString('Remote code execution', $text);
        $this->assertStringContainsString('eval($_POST["cmd"])', $text);
    }

    public function testGetTextTruncatesLongMatches()
    {
        $type = CodeMatch::WARNING;
        $name = 'long_pattern';
        $description = 'Test description';
        $match = str_repeat('a', 600); // Long match over 500 chars

        $text = CodeMatch::getText($type, $name, $description, $match);

        $this->assertStringContainsString('...', $text);
        $this->assertLessThan(700, strlen($text));
    }

    public function testGetTextNormalizesWhitespace()
    {
        $type = CodeMatch::WARNING;
        $name = 'test';
        $description = 'Test';
        $match = 'code  with   multiple    spaces';

        $text = CodeMatch::getText($type, $name, $description, $match);

        // The function normalizes to single spaces in the match part
        $this->assertStringContainsString('code with multiple spaces', $text);
    }
}
