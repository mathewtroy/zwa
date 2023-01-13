<?php

    @require 'config.php';

    // Get the q parameter from URL
    $q = $_REQUEST["q"];

    $hint = "";

    $login_sql = "SELECT login FROM user_form";
    $result = $conn->query($login_sql);
    
    if ($result->num_rows > 0) {
    while ($login_row = $result->fetch_assoc()) {

        // Lookup all hints from array if $q is different from ""
        if ($q !== "") {
            $q = strtolower($q);
            $len = strlen($q);

            foreach ($login_row as $login_suggest) {
                if (stristr($q, substr($login_suggest, 0, $len))) {
                    if ($hint === "") {
                        $hint = $login_suggest;
                    } else {
                        $hint .= ", $login_suggest";
                    }
                }
            }
        }
    }
    }

    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;
?>