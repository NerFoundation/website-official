<?php
$email = $_REQUEST['email'];
if ($email != "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    @file_put_contents('email.txt', $email.PHP_EOL, FILE_APPEND | LOCK_EX);
}
header("Location: /?subscriber=done");