<?php
session_start();
include("../db_connect.php");
$user_id = $_GET['user_id'];
$status = $_GET['status'];
if ($status == 1)
{
    $sql = "update user set status = 0 where user_id=$user_id";
    $mysqli -> query($sql);
}
if ($status == 0)
{
    $sql = "update user set status = 1 where user_id=$user_id";
    $mysqli -> query($sql);
}
header("location: edit_user.php");
?>