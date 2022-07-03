<?php
// CWE 79
    $username = $_GET['username'];
    $encodedUsername = filter_var($username, FILTER_FLAG_ENCODE_HIGH)
    echo '<div class="header"> Welcome, ' . $encodedUsername . '</div>';
?>
