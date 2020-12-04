<?php

if(isset($_GET['id']))
{
	if (isset($_POST['hoten']) and isset($_POST['sdt']))
	{
		$id = intval($_GET['id']);
		$hoten = $conn->real_escape_string($_POST['hoten']);
		$sdt = $conn->real_escape_string($_POST['sdt']);
		$sql = "UPDATE khachhang SET hoten='{$hoten}', sdt='{$sdt}' WHERE makh = $id";
		$result = $conn->query($sql);
		header("Location: ?page=customer");
	}
	

}



?>