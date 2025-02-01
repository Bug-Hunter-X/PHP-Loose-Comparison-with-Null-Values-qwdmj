# PHP Loose Comparison with Null Values

This example demonstrates a common error in PHP related to loose comparison and null values. The function `foo` is intended to check if an array contains any null values. However, due to PHP's loose comparison, it might produce incorrect results.

## Bug
The `bug.php` file contains the buggy code which uses loose comparison (`===`) and can fail when the array contains empty strings, 0, or '0'.

## Solution
The `bugSolution.php` file provides a corrected version of the function that uses strict comparison (`===`) to reliably detect null values and handles empty strings, 0, and '0' correctly.  This ensures accurate detection of null values irrespective of type juggling.