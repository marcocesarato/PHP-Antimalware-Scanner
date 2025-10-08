#!/usr/bin/env php
<?php

/**
 * Test script to verify exit codes for CI/CD integration.
 *
 * This script demonstrates that the scanner properly exits with:
 * - Exit code 0 when no malware is detected
 * - Exit code 1 when malware is detected
 */
echo "PHP Antimalware Scanner - Exit Code Test\n";
echo "=========================================\n\n";

// Create test directories
$cleanDir = '/tmp/scanner_test_clean';
$malwareDir = '/tmp/scanner_test_malware';

@mkdir($cleanDir, 0777, true);
@mkdir($malwareDir, 0777, true);

// Create clean file
file_put_contents("$cleanDir/clean.php", '<?php
// Clean PHP file
echo "Hello World";
?>');

// Create malware file
file_put_contents("$malwareDir/malware.php", '<?php
// Malicious code
eval($_POST["cmd"]);
?>');

$scannerPath = __DIR__ . '/src/index.php';

// Test 1: Clean directory
echo "Test 1: Scanning clean directory...\n";
exec("php $scannerPath $cleanDir --report --auto-skip 2>&1", $output1, $exitCode1);
echo "Exit code: $exitCode1\n";
echo $exitCode1 === 0 ? "✓ PASSED: Clean directory returns exit code 0\n" : "✗ FAILED: Expected 0, got $exitCode1\n";
echo "\n";

// Test 2: Directory with malware
echo "Test 2: Scanning directory with malware...\n";
exec("php $scannerPath $malwareDir --report --auto-skip 2>&1", $output2, $exitCode2);
echo "Exit code: $exitCode2\n";
echo $exitCode2 === 1 ? "✓ PASSED: Malware directory returns exit code 1\n" : "✗ FAILED: Expected 1, got $exitCode2\n";
echo "\n";

// Cleanup
@unlink("$cleanDir/clean.php");
@unlink("$malwareDir/malware.php");
@rmdir($cleanDir);
@rmdir($malwareDir);

// Summary
echo "=========================================\n";
if ($exitCode1 === 0 && $exitCode2 === 1) {
    echo "✓ ALL TESTS PASSED\n";
    echo "The scanner is ready for CI/CD integration!\n";
    exit(0);
} else {
    echo "✗ SOME TESTS FAILED\n";
    exit(1);
}
