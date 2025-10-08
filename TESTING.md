# Testing Guide

This document provides information on how to run and write tests for the PHP Antimalware Scanner project.

## Overview

The test suite consists of:
- **Unit Tests**: Fast, isolated tests for individual classes and methods
- **Integration Tests**: Tests that execute the scanner CLI with various configurations

## Running Tests

### Prerequisites

Install dependencies including PHPUnit:
```bash
composer install
```

### Run All Tests

```bash
composer test
# or
phpunit
```

### Run Specific Test Suites

**Unit tests only:**
```bash
composer test:unit
# or
phpunit --testsuite unit
```

**Integration tests only:**
```bash
composer test:integration
# or
phpunit --testsuite integration
```

### Run Specific Test Files

```bash
phpunit tests/Unit/PathTest.php
phpunit tests/Integration/DefaultScanTest.php
```

### Run Specific Test Methods

```bash
phpunit --filter testScanCleanDirectoryExitsWithZero
```

### Code Coverage

Generate HTML coverage report:
```bash
composer test:coverage
```

Coverage report will be generated in the `coverage/` directory.

## Test Structure

```
tests/
├── Unit/                    # Unit tests for individual classes
│   ├── PathTest.php        # Tests for Path helper
│   ├── CodeMatchTest.php   # Tests for CodeMatch utility
│   └── DeobfuscatorTest.php # Tests for Deobfuscator
├── Integration/             # CLI integration tests
│   ├── CLITestCase.php     # Base class for CLI tests
│   ├── DefaultScanTest.php # Default scanning behavior
│   ├── ReportModeTest.php  # Report generation tests
│   ├── ScanModesTest.php   # Predefined mode tests
│   └── PathControlsTest.php # Path filtering tests
└── Fixtures/                # Test data files
    ├── clean/              # Clean PHP files
    ├── malware/            # Malware samples
    ├── obfuscated/         # Obfuscated code samples
    ├── reports/            # Generated reports (temp)
    └── tmp/                # Temporary test files (temp)
```

## Writing Tests

### Unit Tests

Unit tests should extend `PHPUnit\Framework\TestCase` and test individual methods in isolation:

```php
<?php

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
}
```

**Guidelines:**
- Test one thing per test method
- Use descriptive test names (`testMethodNameBehavior`)
- Keep tests fast and isolated
- Avoid external dependencies (filesystem, network)
- Clean up any resources in `tearDown()`

### Integration Tests

Integration tests should extend `AMWScan\Tests\Integration\CLITestCase` and test the scanner via CLI:

```php
<?php

namespace AMWScan\Tests\Integration;

class MyIntegrationTest extends CLITestCase
{
    public function testScannerDetectsMalware()
    {
        $result = $this->runScanner(
            $this->fixturesPath . '/malware',
            ['--report', '--auto-skip']
        );

        $this->assertEquals(1, $result['exitCode']);
        $this->assertStringContainsString('detected', strtolower($result['output']));
    }
}
```

**Available helper methods:**
- `$this->runScanner($path, $args)` - Execute scanner with arguments
- `$this->fixturesPath` - Path to test fixtures
- `$this->reportsPath` - Path for test reports
- `$this->tmpPath` - Path for temporary files
- `$this->cleanupTestArtifacts()` - Clean up test files

**Guidelines:**
- Use `--report` and `--auto-skip` for non-interactive tests
- Always clean up generated files
- Test exit codes and output messages
- Use explicit report paths when testing report generation
- Keep tests independent (don't rely on execution order)

## Adding Test Fixtures

### Clean Files

Add benign PHP files to `tests/Fixtures/clean/`:
```php
<?php
// Clean PHP file example
function safeFunction($input) {
    return htmlspecialchars($input);
}
```

### Malware Samples

Add malware patterns to `tests/Fixtures/malware/`:
```php
<?php
// Example malware pattern
eval($_POST['cmd']);
```

**Important:** These are test samples only. They should not be executable or contain real malicious payloads.

### Obfuscated Code

Add obfuscated code to `tests/Fixtures/obfuscated/`:
```php
<?php
// Example obfuscation
$x = chr(101).chr(118).chr(97).chr(108);
```

## Continuous Integration

Tests run automatically on:
- Pull requests to main/master branches
- Pushes to main/master branches
- Multiple PHP versions (7.4, 8.0, 8.1, 8.2, 8.3)

See `.github/workflows/php.yml` for CI configuration.

## Debugging Tests

### Verbose Output

```bash
phpunit --verbose
```

### Stop on First Failure

```bash
phpunit --stop-on-failure
```

### Debug Specific Test

```bash
phpunit --filter testName --debug
```

### View Scanner Output

Integration tests capture scanner output. To see it:
```bash
phpunit --verbose
```

Or add debug output in tests:
```php
$result = $this->runScanner(...);
echo $result['output'];
```

## Best Practices

1. **Run tests before committing**: Ensure all tests pass locally
2. **Add tests for new features**: Cover new functionality with tests
3. **Add tests for bug fixes**: Prevent regression with test cases
4. **Keep tests maintainable**: Clear, simple tests are easier to maintain
5. **Test edge cases**: Consider boundary conditions and error cases
6. **Use meaningful assertions**: Choose assertions that clearly express intent
7. **Avoid test interdependencies**: Each test should be runnable in isolation

## Common Issues

### Tests Fail Locally But Pass in CI (or vice versa)

- Check PHP version differences
- Verify dependencies are up to date (`composer update`)
- Check for filesystem path differences (Windows vs Unix)

### Integration Tests Timeout

- Increase timeout in phpunit.xml
- Check if scanner enters interactive mode (use `--report --auto-skip`)
- Verify fixtures are not too large

### Report Files Not Found

- Ensure explicit `--path-report` is provided
- Check cleanup code doesn't remove files prematurely
- Verify report generation is enabled (not `--disable-report`)

## Resources

- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [PHP Testing Best Practices](https://phpunit.de/getting-started/phpunit-9.html)
- [Composer Scripts](https://getcomposer.org/doc/articles/scripts.md)

## Getting Help

If you encounter issues with tests:
1. Check this documentation
2. Review existing tests for examples
3. Open an issue on GitHub with details about the test failure
