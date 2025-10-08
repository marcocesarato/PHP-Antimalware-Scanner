# GitHub Actions Example

This example shows how to use the PHP Antimalware Scanner in a GitHub Actions workflow.

## Basic Usage

```yaml
name: Security Scan

on:
  push:
    branches: [ main, develop ]
  pull_request:
    branches: [ main ]

jobs:
  malware-scan:
    runs-on: ubuntu-latest
    
    steps:
      - name: Checkout code
        uses: actions/checkout@v3
      
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.1'
      
      - name: Download Scanner
        run: |
          wget https://raw.githubusercontent.com/marcocesarato/PHP-Antimalware-Scanner/master/dist/scanner
          chmod +x scanner
      
      - name: Run Malware Scan
        run: |
          php scanner . --report --auto-skip
          
      # The scanner will exit with code 1 if malware is detected
      # This will cause the workflow to fail automatically
```

## Advanced Usage with Report Artifact

```yaml
name: Security Scan with Report

on:
  push:
    branches: [ main, develop ]
  pull_request:
    branches: [ main ]
  schedule:
    - cron: '0 0 * * 0'  # Weekly scan on Sunday at midnight

jobs:
  malware-scan:
    runs-on: ubuntu-latest
    
    steps:
      - name: Checkout code
        uses: actions/checkout@v3
      
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.1'
      
      - name: Download Scanner
        run: |
          wget https://raw.githubusercontent.com/marcocesarato/PHP-Antimalware-Scanner/master/dist/scanner
          chmod +x scanner
      
      - name: Run Malware Scan
        run: |
          php scanner . --report --auto-skip --path-report=./scan-report
          
      - name: Upload Scan Report
        if: always()  # Upload report even if scan fails
        uses: actions/upload-artifact@v3
        with:
          name: malware-scan-report
          path: scan-report.html
          retention-days: 30
```

## Exit Codes

The scanner now returns the following exit codes:

- **Exit Code 0**: No malware detected - the scan completed successfully
- **Exit Code 1**: Malware detected - the workflow will fail

This makes it perfect for use in CI/CD pipelines where you want to prevent deployments if malware is detected.
