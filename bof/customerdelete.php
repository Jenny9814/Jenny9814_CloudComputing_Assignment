<?php

if(isset($_GET['id']))
{
		$id = intval($_GET['id']);
		$sql = "DELETE FROM khachhang WHERE makh = $id";
		$result = $conn->query($sql);
		header("Location: ?page=customer");

}

?>