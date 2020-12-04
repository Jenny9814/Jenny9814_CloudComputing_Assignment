<?php

if (isset($_POST['hoten']) and isset($_POST['sdt']))
{
	$hoten = $conn->real_escape_string($_POST['hoten']);
	$sdt = $conn->real_escape_string($_POST['sdt']);
	$sql = "INSERT INTO khachhang (hoten,sdt) VALUES('{$hoten}', '{$sdt}')";
	$result = $conn->query($sql);
	header("Location: ?page=customer");
	
}



?>