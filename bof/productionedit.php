<?php

if(isset($_GET['id']))
{
	if (isset($_POST['tensp']) and isset($_POST['gia']) and isset($_POST['maloai']))
	{
		$id = intval($_GET['id']);
		$tensp = $conn->real_escape_string($_POST['tensp']);
		$gia = intval($_POST['gia']);
		$maloai = intval($_POST['maloai']);
		$sql = "UPDATE sanpham SET tensp='{$tensp}',gia='{$gia}',maloai='{$maloai}'  WHERE masp = $id";
		$result = $conn->query($sql);
		header("Location: ?page=production");
	}
	

}



?>