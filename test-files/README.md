# Test Files for PHP Antimalware Scanner

This directory contains test files used to verify the scanner's detection capabilities.

## Files

### Clean Files
- `clean.php` - A clean PHP file with no malicious code

### Malicious CSS Files (for testing CSS malware detection)
- `.dd8cff6b.css` - PHP malware disguised as CSS file with hex pattern
- `.abc12345.ccss` - PHP malware disguised as CCSS file with hex pattern
- `normal.css` - Normal CSS file (should NOT be detected)

## Pattern Detection

The scanner detects suspicious CSS files matching the pattern:
- Filename starts with a dot (`.`)
- Followed by exactly 8 hexadecimal characters `[0-9a-f]{8}`
- Extension is `.css` or `.ccss`

Examples of detected patterns:
- `.dd8cff6b.css`
- `.abc12345.ccss`
- `.12345678.css`

## Testing

To verify CSS malware detection:
```bash
php verify-css-detection.php
```

## Security Note

These files contain actual malware patterns for testing purposes. They should only be used in controlled testing environments and should never be deployed to production servers.
