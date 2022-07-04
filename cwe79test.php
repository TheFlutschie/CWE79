<?php
    function useless_filter($string){
        return $string;
    }

    $username = $_GET['username'];
    //echo '<div class="header"> Welcome, ' . $username . '</div>';
    $sanitizedUsername = useless_filter($username);
    echo '<div class="header"> Welcome, ' . $sanitizedUsername . '</div>';
?>