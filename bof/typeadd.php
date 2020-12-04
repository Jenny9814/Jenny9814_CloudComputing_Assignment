<?php
if (isset($_POST['tenloai']))
{
		$tenloai = $conn->real_escape_string($_POST['tenloai']);
		$sql = "INSERT INTO loaisanpham (tenloai)  VALUES ('{$tenloai}')";
		$result = $conn->query($sql);
		header("Location: ?page=type");
}
	



?>