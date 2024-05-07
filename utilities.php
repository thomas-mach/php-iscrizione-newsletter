<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && preg_match('/@.*\./', $_POST["email"])) {
        $message = 'Welcome to our newsletter!';
    } else {
        $message = 'email is not valid';
    }
}
