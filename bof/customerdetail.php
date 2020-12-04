<?php

if( isset($_GET['page']) && $_GET['page']=="customerdetail")
{
	if(isset($_GET['id']))
	{
		$sql = "SELECT * FROM khachhang WHERE makh = ".intval($_GET['id']);
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo "<h3>CHỈNH SỬA KHÁCH HÀNG</h3>";
		?>
		<form action="?page=customeredit&id=<?=$_GET['id']?>" method="POST">
			<table>
				<tr>
					<td>Tên</td>
					<td><input type="text" name="hoten" value="<?= $row['hoten']?>"></td>
				</tr>
				<tr>
					<td>Sđt</td>
					<td><input type="text" name="sdt" value="<?= $row['sdt']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>
			
			</table>
		</form>
		<?php
	}else{
		echo "<h3>THÊM KHÁCH HÀNG</h3>";
		?>
		<form action="?page=customeradd" method="POST">
			<table>
				<tr>
					<td>Tên</td>
					<td><input type="text" name="hoten" value=""></td>
				</tr>
				<tr>
					<td>Sđt</td>
					<td><input type="text" name="sdt" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Add"></td>
				</tr>
			
			</table>
		</form>
<?php
	}	
	

	

}



?>