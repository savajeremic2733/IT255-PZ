<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, Token, token, TOKEN');

require 'functions.php';

if (isset($_SERVER['HTTP_TOKEN']) && isset($_POST['avatar']) && isset($_POST['birth_date']) && isset($_POST['country'])) {
    $token = $_SERVER['HTTP_TOKEN'];
    $avatar = $_POST['avatar'];
    $birth_date = $_POST['birth_date'];
    $country = $_POST['country'];
    echo updateProfile($token, $avatar, $birth_date, $country);
}
