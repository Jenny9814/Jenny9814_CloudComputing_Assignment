<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="bof";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
$conn->query("set names 'utf8'");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE</title>
</head>
<body><br/>
<center><h1>Quản lý</h1></center>
<table>
	<tr>
		<th><a href="?page=customer">Khách hàng</a></th>
		<th><a href="?page=production">Sản phẩm</a></th> 
		<th><a href="?page=type">Loại sản phẩm</a></th>
		<th><a href="?page=invoice">Hóa Đơn</a></th>
  </tr>
</table>