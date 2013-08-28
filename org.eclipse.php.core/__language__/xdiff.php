<?php

// Start of xdiff v.1.4.1

/**
 * Makes an unified diff containing differences between old_file and new_file and stores it in 
 * dest file. The resulting file is human-readable. An optional context parameter specifies 
 * how many lines of context should be added around each change. Setting minimal parameter 
 * to true will result in outputting the shortest patch file possible (can take a long time).
 * @link http://www.php.net/manual/en/function.xdiff-file-diff.php
 * @param $old_file string <p>
 * Path to the first file. This file acts as "old" file.
 * </p>
 * @param $new_file string <p>
 * Path to the second file. This file acts as "new" file. 
 * </p>
 * @param $dest string <p>
 * Path of the resulting patch file.
 * </p>
 * @param $context int[optional] <p>
 * Indicates how many lines of context you want to include in diff result.
 * </p>
 * @param $minimal bool[optional] <p>
 * Set this parameter to TRUE if you want to minimalize size of the result (can take a long time).
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function xdiff_file_diff (string $old_file , string $new_file , string $dest , int $context = 3 , bool $minimal = false ) {}

/**
 * Makes a binary diff of two files and stores the result in a patch file. This function 
 * works with both text and binary files. Resulting patch file can be later applied using 
 * xdiff_file_bpatch()/ xdiff_string_bpatch(). 
 * @link http://www.php.net/manual/en/function.xdiff-file-diff_binary.php
 * @param old_file string <p>
 * Path to the first file. This file acts as "old" file.
 * </p>
 * @param new_file string <p>
 * Path to the second file. This file acts as "new" file.
 * </p>
 * @param dest string <p>
 * Path of the resulting patch file. Resulting file contains differences between "old" and 
 * "new" files. It is in binary format and is human-unreadable.
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function xdiff_file_diff_binary (string $old_file , string $new_file , string $dest) {}

/**
 * Patches a file with a patch and stores the result in a file. patch has to be an 
 * unified diff created by xdiff_file_diff()/ xdiff_string_diff() function. An 
 * optional flags parameter specifies mode of operation.
 * @link http://www.php.net/manual/en/function.xdiff-file-patch.php
 * @param $file string <p>
 * The original file.
* </p>
 * @param $patch string <p>
 * The unified patch file. It has to be created using xdiff_string_diff(), 
 * xdiff_file_diff() functions or compatible tools.
 * </p>
 * @param $dest string <p>
 * Path of the resulting file.
 * </p>
 * @param $flags int[optional] <p>
 * Can be either XDIFF_PATCH_NORMAL (default mode, normal patch) or XDIFF_PATCH_REVERSE 
 * (reversed patch).
 * </p>
 * @return bool  Returns FALSE if an internal error happened, string with rejected 
 * chunks if patch couldn't be applied or TRUE if patch has been successfully applied. 
 */
function xdiff_file_patch (string $file , string $patch , string $dest , int $flags = DIFF_PATCH_NORMAL ) {}

/**
 * Patches a file with a binary patch and stores the result in a file dest. This 
 * function accepts patches created both via xdiff_file_bdiff() or xdiff_file_rabdiff() 
 * functions or their string counterparts.
 * @link http://www.php.net/manual/en/function.xdiff-file-patch-binary.php
 * @param $file string <p>
 * The original file.
 * </p>
 * @param $patch string <p>
 * The binary patch file.
 * </p>
 * @param $dest string <p>
 * Path of the resulting file.
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure. 
 */
function xdiff_file_patch_binary (string $file , string $patch , string $dest) {}

/**
 * Merges three files into one and stores the result in a file dest. The 
 * old_file is an original version while new_file1 and new_file2 are modified 
 * versions of an original.
 * @link http://www.php.net/manual/en/function.xdiff-file-merge3.php
 * @param $old_file string <p>
 * Path to the first file. It acts as "old" file. 
 * </p>
 * @param $new_file1 string <p>
 * Path to the second file. It acts as modified version of old_file. 
 * </p>
 * @param $new_file2 string <p>
 * Path to the third file. It acts as modified version of old_file.
 * </p>
 * @param $dest string <p>
 * Path of the resulting file, containing merged changed from both new_file1 
 * and new_file2. 
 * </p>
 * @return bool Returns TRUE if merge was successful, string with rejected chunks 
 * if it was not or FALSE if an internal error happened. 
 */
function xdiff_file_merge3 (string $old_file , string $new_file1 , string $new_file2 , string $dest) {}

/**
 * Makes an unified diff containing differences between old_data string and new_data 
 * string and returns it. The resulting diff is human-readable. An optional context 
 * parameter specifies how many lines of context should be added around each change. 
 * Setting minimal parameter to true will result in outputting the shortest patch file 
 * possible (can take a long time).
 * @link http://www.php.net/manual/en/function.xdiff-string-diff.php 
 * @param $old_data string <p>
 * First string with data. It acts as "old" data. 
 * </p>
 * @param $new_data string <p>
 * Second string with data. It acts as "new" data. 
 * </p>
 * @param $context int[optional] <p>
 * Indicates how many lines of context you want to include in the diff result. 
 * </p>
 * @param $minimal bool[optional] <p>
 * Set this parameter to TRUE if you want to minimalize the size of the result (can take a long time). 
 * </p>
 * @return string Returns string with resulting diff or FALSE if an internal error happened. 
 */
function xdiff_string_diff (string $old_data , string $new_data , int $context = 3 , bool $minimal = false) {}

/**
 * Makes a binary diff of two strings and returns the result. This function works 
 * with both text and binary data. Resulting patch can be later applied using 
 * xdiff_string_bpatch()/ xdiff_file_bpatch(). 
 * @link 
 * @param $old_data string <p>
 * First string with binary data. It acts as "old" data. 
 * </p>
 * @param $new_data string <p>
 * Second string with binary data. It acts as "new" data. 
 * </p>
 * @return string Returns string with result or FALSE if an internal error happened. 
 */
function xdiff_string_diff_binary (string $old_data , string $new_data) {}

/**
 * Patches a str string with an unified patch in patch parameter and returns the 
 * result. patch has to be an unified diff created by xdiff_file_diff()/ 
 * xdiff_string_diff() function. An optional flags parameter specifies mode of 
 * operation. Any rejected parts of the patch will be stored inside error variable 
 * if it is provided. 
 * @link http://www.php.net/manual/en/function.xdiff-string-patch.php
 * @param $str string </p>
 * The original string. 
 * </p>
 * @param $patch string </p>
 * The unified patch string. It has to be created using xdiff_string_diff(), 
 * xdiff_file_diff() functions or compatible tools. 
 * </p>
 * @param $flags int[optional] </p>
 * flags can be either XDIFF_PATCH_NORMAL (default mode, normal patch) or 
 * XDIFF_PATCH_REVERSE (reversed patch). 
 * </p>
 * @param $error string[optional] </p>
 * If provided then rejected parts are stored inside this variable. 
 * </p>
 * @return string Returns the patched string, or FALSE on error. 
 */
function xdiff_string_patch (string $str , string $patch , int $flags , string &$error) {}

/**
 * Patches a string str with a binary patch. This function accepts patches created both via 
 * xdiff_string_bdiff() and xdiff_string_rabdiff() functions or their file counterparts. 
 * @link http://www.php.net/manual/en/function.xdiff-string-patch-binary.php
 * @param $str string <p>
 * The original binary string. 
 * </p>
 * @param $patch string <p>
 * The binary patch string.
 * </p>
 * @return string  Returns the patched string, or FALSE on error. 
 */
function xdiff_string_patch_binary (string $str , string $patch) {}

/**
 * Merges three strings into one and returns the result. The old_data is an original 
 * version of data while new_file1 and new_file2 are modified versions of an original. 
 * An optional error is used to pass any rejected parts during merging process. 
 * @link http://www.php.net/manual/en/function.xdiff-string-merge3.php
 * @param $old_data string <p>
 * First string with data. It acts as "old" data.
 * </p>
 * @param $new_data1 string <p>
 * Second string with data. It acts as modified version of old_data. 
 * </p>
 * @param $new_data2 string <p>
 * Third string with data. It acts as modified version of old_data. 
 * </p>
 * @param $error string[optional] <p>
 * If provided then rejected parts are stored inside this variable. 
 * </p>
 * @return mixed  Returns the merged string, FALSE if an internal error happened, or 
 * TRUE if merged string is empty. 
 */
function xdiff_string_merge3 (string $old_data , string $new_data1 , string $new_data2 , string &$error) {}

define ('XDIFF_PATCH_NORMAL', 45);
define ('XDIFF_PATCH_REVERSE', 43);

// End of xdiff v.1.4.1
?>
