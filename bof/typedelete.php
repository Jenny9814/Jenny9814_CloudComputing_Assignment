<?php

if(isset($_GET['id']))
{
		$id = intval($_GET['id']);
		$sql = "DELETE FROM loaisanpham WHERE maloai = $id";
		$result = $conn->query($sql);
		header("Location: ?page=type");

}

?>