<?php

if(isset($_GET['id']))
{
	if (isset($_POST['tenloai']))
	{
		$id = intval($_GET['id']);
		$tenloai = $conn->real_escape_string($_POST['tenloai']);
		$sql = "UPDATE loaisanpham SET tenloai='{$tenloai}' WHERE maloai = $id";
		$result = $conn->query($sql);
		header("Location: ?page=type");
	}
	

}



?>