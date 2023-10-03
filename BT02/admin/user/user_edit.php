<?php
//bien sieu toan cuc GET
//ktra id
if(isset($_GET['id']))

//cach 1
$uid = $_GET['id'];
$sql = "SELECT * FORM users WHERE id='$uid' ";

// hien thi
//lay thong tin tu form
$sql_update = "UPDATE users SET a=b, x=y WHERE id='$id'";