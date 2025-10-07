---
sidebar_position: 3
---

# Build

For compile `/src/` folder to single file `/dist/scanner` you need to do this:

1. Install composer requirements:

   ```shell
   composer install
   ```
2. Run command

    ```shell
   composer build
   ```

## Technical Details

The build process creates a PHAR (PHP Archive) file with a CLI-only stub. This approach avoids using `Phar::webPhar()` which performs strict signature verification. The CLI-only stub uses `Phar::mapPhar()` instead, which is more resilient to file corruption during download or transfer while still maintaining security for CLI usage.