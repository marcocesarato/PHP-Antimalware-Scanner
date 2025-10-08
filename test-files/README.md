# Test Files for PHP Antimalware Scanner

This directory contains test files used to verify the scanner's detection capabilities.

## Files

### Clean Files
- `clean.php` - A clean PHP file with no malicious code

### Malicious CSS Files (for testing CSS file scanning)
- `.dd8cff6b.css` - PHP malware disguised as CSS file (contains `eval(base64_decode(...))`)
- `.abc12345.ccss` - PHP malware disguised as CCSS file (contains `system($_GET['cmd'])`)
- `normal.css` - Normal CSS file (should NOT be detected as malware)

## CSS File Scanning

CSS and CCSS files are now included in the scanner's list of scannable file extensions. This means:
- All CSS/CCSS files are scanned for malware patterns
- Detection is based on actual malicious code content (exploits, functions, signatures)
- Files are only flagged if they contain actual malware patterns, not just based on filename

## Testing

The malicious test files contain actual PHP malware code:
- `.dd8cff6b.css` contains `eval(base64_decode(...))` which will be detected by the scanner
- `.abc12345.ccss` contains `system($_GET['cmd'])` which will be detected by the scanner
- `normal.css` contains only legitimate CSS and will not be flagged

## Security Note

These files contain actual malware patterns for testing purposes. They should only be used in controlled testing environments and should never be deployed to production servers.

