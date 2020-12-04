<?php

if(isset($_GET['id']))
{
		$id = intval($_GET['id']);
		$sql = "DELETE FROM sanpham WHERE masp = $id";
		$result = $conn->query($sql);
		header("Location: ?page=production");

}

?>