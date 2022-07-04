<?php
    $username = $_GET['username'];
    $stripLowUsername = filter_var($username, FILTER_FLAG_STRIP_LOW)
    echo '<div class="header"> Welcome, ' . $stripLowUsername . '</div>';
    $stripHighUsername = filter_var($username, FILTER_FLAG_STRIP_HIGH)
    echo '<div class="header"> Welcome, ' . $stripHighUsername . '</div>';
    $encodedLowUsername = filter_var($username, FILTER_FLAG_ENCODE_LOW)
    echo '<div class="header"> Welcome, ' . $encodedLowUsername . '</div>';
    $encodedHighUsername = filter_var($username, FILTER_FLAG_ENCODE_HIGH)
    echo '<div class="header"> Welcome, ' . $encodedHighUsername . '</div>';
    $encodedAmpUsername = filter_var($username, FILTER_FLAG_ENCODE_AMP);
    echo '<div class="header"> Welcome, ' . $encodedAmpUsername . '</div>';
?>