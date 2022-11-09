<?php
include("../header.php");
?>
<style>
    body, html {
        height: 80vh;
        background-color: #303030;
        color: white;
    }
</style>
<div class='container d-flex align-items-center justify-content-center h-100'>
    <div class='my-auto row g-2'>
        <a href='edit_user.php' class='btn btn-primary'>จัดการผู้ใช้</a>
        <a href='#' class='btn btn-warning'>จัดการร้านอาหาร</a>
        <a href='#' class='btn btn-danger'>จัดการประเภทร้านอาหาร</a>
    </div>
</div>
<?php

$subtotal = 500;
$discount_percent = 30;
$discount_cal = ($discount_percent / 100) * $subtotal;
$total = $subtotal - $discount_cal;

echo $total;

?>