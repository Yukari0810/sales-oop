<?php
include '../classes/User.php';
$user = new User;

// submitされた全てのデータは$_POSTで取れる
$user ->login($_POST);


?>