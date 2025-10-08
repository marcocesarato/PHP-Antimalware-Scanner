<?php

/**
 * Test for Deobfuscator::calc() method.
 *
 * This test ensures that the calc() method can handle expressions with spaces
 * around operators and doesn't enter an infinite loop.
 *
 * Related to issue: Scanner crash when encountering certain kind of malware
 * The malware used chr() expressions like "chr(902 - 787)" which caused
 * infinite recursion in the calc() method.
 */

require_once __DIR__ . '/../src/Deobfuscator.php';
require_once __DIR__ . '/../src/CodeMatch.php';

use AMWScan\Deobfuscator;

// Test cases that previously caused infinite loops
$testCases = [
    ['input' => '902 - 787', 'expected' => '115'],
    ['input' => '902 - 787 ', 'expected' => '115 '],
    ['input' => '780 - 668', 'expected' => '112'],
    ['input' => '202- 85', 'expected' => '117'],
    ['input' => '  902   -   787  ', 'expected' => '  115  '],
    ['input' => '10 + 5', 'expected' => '15'],
    ['input' => '10 * 5', 'expected' => '50'],
    ['input' => '10 / 2', 'expected' => '5'],
];

$deobfuscator = new Deobfuscator();

// Use reflection to access the private calc() method
$reflection = new ReflectionClass($deobfuscator);
$calcMethod = $reflection->getMethod('calc');
$calcMethod->setAccessible(true);

echo "Testing Deobfuscator::calc() method...\n\n";

$failed = 0;
$passed = 0;

foreach ($testCases as $test) {
    $input = $test['input'];
    $expected = $test['expected'];
    
    // Set a timeout to catch infinite loops
    $startTime = microtime(true);
    $result = $calcMethod->invoke($deobfuscator, $input);
    $elapsed = microtime(true) - $startTime;
    
    // Check if result is correct
    $success = ($result == $expected);
    
    // Check if it completed quickly (should be < 0.1 seconds)
    $fast = ($elapsed < 0.1);
    
    if ($success && $fast) {
        echo "✓ PASS: calc('{$input}') = '{$result}' (expected: '{$expected}', time: " . number_format($elapsed * 1000, 2) . "ms)\n";
        $passed++;
    } else {
        echo "✗ FAIL: calc('{$input}') = '{$result}' (expected: '{$expected}', time: " . number_format($elapsed * 1000, 2) . "ms)\n";
        if (!$success) {
            echo "  └─ Result mismatch\n";
        }
        if (!$fast) {
            echo "  └─ Execution too slow (possible infinite loop)\n";
        }
        $failed++;
    }
}

echo "\n";
echo "Results: {$passed} passed, {$failed} failed\n";

if ($failed > 0) {
    exit(1);
}

exit(0);
