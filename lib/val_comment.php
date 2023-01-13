<?php

// Check Review


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $message The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valReviewMin ($message) {
        return strlen($message) >= 5;
    }


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $message The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valReviewMax ($message) {
        return strlen($message) <= 200;
    }


    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $message The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valReviewPattern ($message) {
        return preg_match("/^[a-zA-Z0-9_ - , . :;)(!?☺☻♥♦♣♠]*$/", $message);
    }


?>