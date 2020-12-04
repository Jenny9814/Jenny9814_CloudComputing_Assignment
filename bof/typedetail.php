<?php

if( isset($_GET['page']) && $_GET['page']=="typedetail")
{
	if(isset($_GET['id']))
	{
		$sql = "SELECT * FROM loaisanpham WHERE maloai = ".intval($_GET['id']);

		$result = $conn->query($sql);

		$row = $result->fetch_assoc();
		echo "<h3>CHỈNH SỬA LOẠI SẢN PHẨM</h3>";
		?>
		<form action="?page=typeedit&id=<?=$_GET['id']?>" method="POST">
			<table>
				<tr>
					<td>Loại</td>
					<td><input type="text" name="tenloai" value="<?= $row['tenloai']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>
			
			</table>
		</form>
		<?php
	}else{
		echo "<h3>THÊM LOẠI SẢN PHẨM</h3>";
		?>
		<form action="?page=typeadd" method="POST">
			<table>
				<tr>
					<td>Tên sản phẩm</td>
					<td><input type="text" name="tenloai" value=""></td>
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