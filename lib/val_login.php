<?php

/** Function strlen()
 * 
 * Get string length
 * Returns the length of the given `string`.
 *
 * @param string $string The `string` being measured for length.
 * @return int The length of the `string` on success, and `0` if the `string` is empty.
 */

/*-----------------------------------------------------------------------------*/



/** Function reg_match() 
 * Perform a regular expression match
 * Searches `subject` for a match to the regular expression given in `pattern`.
 *
 * @param string $pattern The pattern to search for, as a string.
 * @param string $subject The input string.
 * @param array|null $matches If `matches` is provided, then it is filled with the results of search. $matches[0] will contain the text that matched the full pattern, $matches[1] will have the text that matched the first captured parenthesized subpattern, and so on.
 * @param int|null $flags `flags` can be a combination of the following flags: `PREG_OFFSET_CAPTURE` If this flag is passed, for every occurring match the appendant string offset (in bytes) will also be returned. Note that this changes the value of `matches` into an array where every element is an array consisting of the matched string at offset `0` and its string offset into `subject` at offset `1`.
 *                        ```
 *                        <?php
 *                        preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
 *                        print_r($matches);
 *                        ?>
 *                        ``` The above example will output:
 *                        ```
 *                        Array
 *                        (
 *                          [0] => Array
 *                            (
 *                              [0] => foobarbaz
 *                              [1] => 0
 *                            )
 *                       
 *                          [1] => Array
 *                            (
 *                              [0] => foo
 *                              [1] => 0
 *                            )
 *                       
 *                          [2] => Array
 *                            (
 *                              [0] => bar
 *                              [1] => 3
 *                            )
 *                       
 *                          [3] => Array
 *                            (
 *                              [0] => baz
 *                              [1] => 6
 *                            )
 *                       
 *                        )
 *                        ``` `PREG_UNMATCHED_AS_NULL` If this flag is passed, unmatched subpatterns are reported as `null` ; otherwise they are reported as an empty `string`.
 *                        ```
 *                        <?php
 *                        preg_match('/(a)(b)*(c)/', 'ac', $matches);
 *                        var_dump($matches);
 *                        preg_match('/(a)(b)*(c)/', 'ac', $matches, PREG_UNMATCHED_AS_NULL);
 *                        var_dump($matches);
 *                        ?>
 *                        ``` The above example will output:
 *                        ```
 *                        array(4) {
 *                         [0]=>
 *                         string(2) "ac"
 *                         [1]=>
 *                         string(1) "a"
 *                         [2]=>
 *                         string(0) ""
 *                         [3]=>
 *                         string(1) "c"
 *                        }
 *                        array(4) {
 *                         [0]=>
 *                         string(2) "ac"
 *                         [1]=>
 *                         string(1) "a"
 *                         [2]=>
 *                         NULL
 *                         [3]=>
 *                         string(1) "c"
 *                        }
 *                        ```
 * @param int|null $offset Normally, the search starts from the beginning of the subject string. The optional parameter `offset` can be used to specify the alternate place from which to start the search (in bytes). Note : Using `offset` is not equivalent to passing `substr($subject, $offset)` to preg_match() in place of the subject string, because `pattern` can contain assertions such as ^ , $ or (?<=x) . Compare:
 *                         ```
 *                         <?php
 *                         $subject = "abcdef";
 *                         $pattern = '/^def/';
 *                         preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
 *                         print_r($matches);
 *                         ?>
 *                         ``` The above example will output:
 *                         ```
 *                         Array
 *                         (
 *                         )
 *                         ``` while this example
 *                         ```
 *                         <?php
 *                         $subject = "abcdef";
 *                         $pattern = '/^def/';
 *                         preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
 *                         print_r($matches);
 *                         ?>
 *                         ``` will produce
 *                         ```
 *                         Array
 *                         (
 *                           [0] => Array
 *                             (
 *                               [0] => def
 *                               [1] => 0
 *                             )
 *                        
 *                         )
 *                         ``` Alternatively, to avoid using substr(), use the `\G` assertion rather than the `^` anchor, or the `A` modifier instead, both of which work with the `offset` parameter.
 * @return bool|int preg_match() returns 1 if the `pattern` matches given `subject`, 0 if it does not, or `false` on failure.
 */

/*-----------------------------------------------------------------------------*/



 /** Function filter_var()
 * Filters a variable with a specified filter
 *
 * @param mixed $value Value to filter. Note that scalar values are converted to string internally before they are filtered.
 * @param int|null $filter The ID of the filter to apply. The Types of filters manual page lists the available filters. If omitted, `FILTER_DEFAULT` will be used, which is equivalent to `FILTER_UNSAFE_RAW` . This will result in no filtering taking place by default.
 * @param array|int|null $options Associative array of options or bitwise disjunction of flags. If filter accepts options, flags can be provided in "flags" field of array. For the "callback" filter, `callable` type should be passed. The callback must accept one argument, the value to be filtered, and return the value after filtering/sanitizing it.
 *                                ```
 *                                <?php
 *                                // for filters that accept options, use this format
 *                                $options = array(
 *                                    'options' => array(
 *                                        'default' => 3, // value to return if the filter fails
 *                                        // other options here
 *                                        'min_range' => 0
 *                                    ),
 *                                    'flags' => FILTER_FLAG_ALLOW_OCTAL,
 *                                );
 *                                $var = filter_var('0755', FILTER_VALIDATE_INT, $options);
 *                               
 *                                // for filters that only accept flags, you can pass them directly
 *                                $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
 *                               
 *                                // for filters that only accept flags, you can also pass as an array
 *                                $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,
 *                                                  array('flags' => FILTER_NULL_ON_FAILURE));
 *                               
 *                                // callback validate filter
 *                                function foo($value)
 *                                {
 *                                    // Expected format: Surname, GivenNames
 *                                    if (strpos($value, ", ") === false) return false;
 *                                    list($surname, $givennames) = explode(", ", $value, 2);
 *                                    $empty = (empty($surname) || empty($givennames));
 *                                    $notstrings = (!is_string($surname) || !is_string($givennames));
 *                                    if ($empty || $notstrings) {
 *                                        return false;
 *                                    } else {
 *                                        return $value;
 *                                    }
 *                                }
 *                                $var = filter_var('Doe, Jane Sue', FILTER_CALLBACK, array('options' => 'foo'));
 *                                ?>
 *                                ```
 * @return mixed Returns the filtered data, or `false` if the filter fails.
 */


// Check Login 


    /** 
     * 
     * Get string length.
     *
     * Returns Boolean True if the length matches our requirement.
     *  
     * 
     * @param string $login The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginMin ($login) {
        return strlen($login) >= 4;
    }


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $login The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginMax ($login) {
        return strlen($login) <= 20;
    }
    

    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $login The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginPattern($login) {
        return preg_match("/^[a-z0-9]*$/", $login);
    }



// Check Password


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $pass The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success. 
     * 
     */
    function valPasswordMin ($pass) {
        return strlen($pass) >= 6;
    }

    
    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $pass The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success. 
     * 
     */
    function valPasswordMax ($pass) {
        return strlen($pass) <= 60;
    }

?>