<?php


// Check Country

    /**
     * 
     * Get string length.
     *
     * Returns Boolean True if the length matches our requirement.
     *  
     * 
     * @param string $search_country The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valSearchMin ($search_country) {
        return strlen($search_country) > 0;
    }

    /**
     * 
     * Get string length.
     *
     * Returns Boolean True if the length matches our requirement.
     *  
     * 
     * @param string $search_country The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valSearchMax ($search_country) {
        return strlen($search_country) <= 10;
    }


    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $search_country The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valSearchPattern ($search_country) {
        return preg_match("/^[a-zA-Z]*$/", $search_country);
    }

?>    