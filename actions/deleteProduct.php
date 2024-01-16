<?php
include '../classes/Product.php';
$product = new Product;

// submitされた全てのデータは$_POSTで取れる
$product ->deleteProduct($_POST);


?>