# PHP Antimalware Scanner - AI Coding Agent Guide

<overview>
Quick onboarding for AI contributors to understand architecture, workflows, and safe coding patterns.
</overview>

---

## Architecture Overview

<architecture>

### Entry Point

<entrypoint>
- **`src/index.php`** — Bootstrap: sets PHP ini options, registers PSR-4 autoloader, runs `AMWScan\Scanner` in CLI mode
</entrypoint>

### Core Components

<core_components>
<component name="Scanner">
**`src/Scanner.php`** — Central orchestrator

- Argument parsing via `Argv`
- File mapping and filtering
- Scanning loops with pattern matching
- Report generation (HTML/text)
- Interactive CLI prompt flow
  </component>

<component name="Helpers">
**Helper Classes**
- `src/Actions.php` — File operations (delete, quarantine, backup, whitelist)
- `src/Deobfuscator.php` — Code deobfuscation/decoding
- `src/CodeMatch.php` — Pattern matching utilities
- `src/Path.php` — Path normalization
</component>
</core_components>

### Detection Definitions

<detection_definitions>

- **`src/Signatures.php`** — Malware signatures as arrays (`$raw`, `$regex`)
- **`src/Functions.php`** — Dangerous/encoded PHP functions
- **`src/Exploits.php`** — Known exploit patterns
  </detection_definitions>

</architecture>

---

## Key Constraints & Guidelines

<constraints>

### PHP Version Compatibility

<php_compatibility target="5.5+">

- **Target: PHP 5.5+**
- Avoid modern features: typed properties, return types, null coalescing assignment (`??=`)
- Use array() syntax instead of []
- Maintain backwards compatibility unless explicitly upgrading minimum version
  </php_compatibility>

### Detection Logic Safety

<detection_safety level="critical">

- **Regex changes have broad impact** — can introduce false positives/negatives
- Always add test fixtures when modifying detection patterns
- Small regex tweaks can affect thousands of files in production scans
  </detection_safety>

### Global State Management

<global_state>

- `Scanner` uses many `public static` settings for runtime behavior
- Tests must reset `Scanner::$settings`, `Scanner::$pathScan`, etc. between runs
- Path configurations are set during `__construct()` and `init()`
  </global_state>

</constraints>

---

## Developer Workflows

<workflows>

### Running & Testing

<commands>
```bash
# Run from source
php ./src/index.php <path-to-scan> [options]
composer start  # alias

# Build single-file distribution

composer run build # outputs to dist/scanner

# Code style

composer run fix-cs # auto-fix
composer run check-cs # check only
composer run lint # lint check

````
</commands>

### Development Setup
<setup>
```bash
composer install  # installs php-cs-fixer, git hooks
````

Post-install hooks configure pre-commit checks (defined in `composer.json` `extra.hooks`)
</setup>

</workflows>

---

## Project Conventions

<conventions>

### Namespace & Autoloading

<namespace>
- **PSR-4:** `AMWScan\` → `src/`
- Declared in `composer.json` autoload section
- Follow existing pattern when adding classes
</namespace>

### Adding CLI Flags

<cli_flags>

1. Register in `Scanner::arguments()` using `self::$argv->addFlag()`
2. Parse and apply in `arguments()` method
3. Set `Scanner::$settings` or call setter (e.g., `Scanner::setPathReport()`)
4. Honor in `modes()` or `run()` logic

<example>
```php
// In Scanner::arguments()
self::$argv->addFlag('my-flag', ['default' => false, 'help' => 'Description']);

// Parse and apply
if (isset(self::$argv['my-flag']) && self::$argv['my-flag']) {
self::setMyFlagMode();
}

````
</example>
</cli_flags>

### Detection Pattern Storage
<detection_storage>
- **String fragments** → `Signatures::$raw` array
- **Regex patterns** → `Signatures::$regex` array
- **Functions** → `Functions::getDefault()` or `Functions::getDangerous()`
- **Exploits** → `Exploits::getAll()` or `Exploits::getLite()`
</detection_storage>

### Whitelist Format
<whitelist_format>
- Stored in `scanner-whitelist.json` (configurable via `--path-whitelist`)
- Written via `Actions::addToWhitelist()`
- Loaded in `Scanner::init()`
- **Must preserve JSON structure:** `{md5_key: {file, exploit, line, match}}`
</whitelist_format>

### File Operations
<file_operations>
- **Always use `Actions::putContents()`** instead of `file_put_contents()` — respects backup flag
- Path normalization via `Path::get()` or `realpath()`
- Quarantine/backup paths are created recursively with proper permissions
</file_operations>

</conventions>

---

## Integration Points

<integration>

### External Dependencies
<external_dependencies>
- **Update mechanism:** `Scanner::update()` fetches from `raw.githubusercontent.com`
  - Don't change URLs without coordination
- **Interactive editors:** `vim`, `nano` via `proc_open()` (Unix-like terminals expected)
- **No external calls during normal scans** — fully offline capable
</external_dependencies>

### Modules & Verification
<modules>
- `src/Modules/` contains platform-specific verifiers (e.g., `Wordpress.php`)
- Checksum verification can be disabled with `--disable-checksum`
</modules>

</integration>

---

## Safety Rules for AI Edits

<safety_rules>

### Detection Changes
<detection_changes severity="critical">
- ⚠️ **Never auto-commit signature/regex changes without test fixtures**
- Create minimal malware sample demonstrating the pattern
- Add functional test showing detection works
- Document expected behavior
</detection_changes>

### File I/O Changes
<file_io_changes>
- Use `Path::get()` for normalization
- Ensure tests clean up created files/directories
- Respect `Scanner::isBackupEnabled()` in file operations
</file_io_changes>

### Testing Changes
<testing_changes>
- Reset global state in `Scanner` between test runs
- Verify changes don't break existing detection patterns
- Test with `--lite` mode to check false positive reduction
</testing_changes>

</safety_rules>

---

## Common Edit Patterns

<edit_patterns>

### Add a Signature
<pattern type="signature">
```php
// In src/Signatures.php
public static $raw = [
    // ... existing ...
    'your-malware-pattern-here',
];

// OR for regex
public static $regex = [
    // ... existing ...
    '<\\?php\\s*eval\\(your_pattern_here\\)',
];
````

</pattern>

### Add a CLI Flag

<pattern type="cli_flag">
```php
// In Scanner::arguments()
self::$argv->addFlag('your-flag', [
    'alias' => '-y',
    'default' => false,
    'has_value' => true,  // if flag takes value
    'value_name' => 'path',
    'help' => 'Your help text'
]);

// Handle the flag
if (isset(self::$argv['your-flag']) && self::$argv['your-flag']) {
self::setYourFlagMode();
}

````
</pattern>

### Modify File Operation
<pattern type="file_operation">
```php
// WRONG
file_put_contents($path, $content);

// CORRECT - respects backup settings
Actions::putContents($path, $content);
````

</pattern>

</edit_patterns>

---

## Essential Files Reference

<essential_files>
**Read these first:**

- `src/Scanner.php` — Core scanning logic and flow
- `src/Signatures.php` — Detection patterns
- `src/Functions.php`, `src/Exploits.php` — Function/exploit definitions
- `src/Actions.php` — File operation helpers
- `composer.json` — Scripts, dependencies, autoload config
- `README.md` — Usage examples and modes
  </essential_files>

---

## Questions to Ask Before Major Changes

<questions>
- What's the target PHP version for this change?
- Should signature additions be normalized or escaped?
- Will this affect false positive rates on WordPress/Joomla?
- Do we need to update the built `dist/scanner` after this change?
</questions>
