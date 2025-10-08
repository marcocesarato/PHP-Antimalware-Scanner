# Fix for Scanner Crash Issue

## Problem
The scanner would crash (enter an infinite loop) when encountering certain types of malware that used obfuscated PHP code with arithmetic expressions containing spaces around operators.

## Root Cause
The issue was in the `Deobfuscator::calc()` method in `src/Deobfuscator.php`. This method is used to evaluate simple arithmetic expressions found in obfuscated code, such as `chr(902 - 787)`.

The original regex pattern `~([\d\.]+)([\*\/\-\+])?~` did not properly match operators when there were spaces around them. For example:
- `"902-787"` would match correctly (operator captured)
- `"902 - 787"` would NOT match the operator (operator not captured due to space)

When the operator wasn't captured:
1. The `$exprArr[2]` array contained empty strings
2. None of the `in_array()` checks matched
3. The `else` block returned the expression unchanged
4. The calling code would try again, creating an infinite loop

Additionally, the recursion limit was set too high (100,000 levels), making it impossible to detect and stop the infinite recursion before resource exhaustion.

## Solution
The fix involved three changes to the `calc()` method:

1. **Updated regex pattern** to handle spaces: `~([\d\.]+)\s*([\*\/\-\+])?\s*~`
   - Added `\s*` to match optional whitespace before and after operators

2. **Improved operator detection** by filtering out empty strings from the operators array

3. **Enhanced recursion protection**:
   - Reduced recursion limit from 100,000 to 100 levels
   - Changed the return value from empty string `""` to `$expr` to preserve the input
   - Added checks after each replacement to ensure progress was made:
     ```php
     if ($newExpr === $expr) {
         return $expr; // No change made, stop recursion
     }
     ```

4. **Better replacement logic** using regex patterns that handle spaces:
   ```php
   $pattern = '~' . preg_quote($exprArr[1][$pos], '~') . '\s*-\s*' . preg_quote($exprArr[1][$pos + 1], '~') . '~';
   $newExpr = preg_replace($pattern, $res, $expr, 1);
   ```

## Testing
Two test files were added to prevent regression:

1. `test-files/test_deobfuscator_calc.php` - Tests the `calc()` method with various operator spacing scenarios
2. `test-files/test_malware_deobfuscation.php` - Tests the full deobfuscation process with the problematic malware sample

Both tests verify that:
- The expressions are evaluated correctly
- No infinite loops occur
- Processing completes quickly (< 1 second)

## Results
After the fix:
- The malware sample that previously caused an infinite loop now processes successfully in < 1ms
- All test cases pass
- The Deobfuscator correctly handles arithmetic expressions with any amount of whitespace around operators

## Note
There appears to be a separate issue where the full scanner hangs during initialization (before any deobfuscation occurs). This is a different problem from the Deobfuscator infinite recursion and was not addressed by this fix.
