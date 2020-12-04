<?php

if( isset($_GET['page']) && $_GET['page']=="productiondetail")
{
	if(isset($_GET['id']))
	{
		$sql = "SELECT * FROM sanpham,loaisanpham WHERE sanpham.maloai = loaisanpham.maloai and masp = ".intval($_GET['id']);

		$result = $conn->query($sql);

		$sql_loai = "SELECT * FROM loaisanpham";
		$res_loai = $conn->query($sql_loai);

		$row = $result->fetch_assoc();
		echo "<h3>CHỈNH SỬA SẢN PHẨM</h3>";
		?>
		<form action="?page=productionedit&id=<?=$_GET['id']?>" method="POST">
			<table>
				<tr>
					<td>Tên sản phẩm</td>
					<td><input type="text" name="tensp" value="<?= $row['tensp']?>"></td>
				</tr>
				<tr>
					<td>Giá</td>
					<td><input type="text" name="gia" value="<?= $row['gia']?>"></td>
				</tr>
				<tr>
					<td>Loại</td>
					<td>
						<select name="maloai">
							<?php
								while($row_loai = $res_loai->fetch_assoc())
								{
									if ($row_loai['maloai'] == $row['maloai'])
									{
										echo "<option selected value='{$row_loai['maloai']}'>{$row_loai['tenloai']}</option>";
									}
									else{
										echo "<option value='{$row_loai['maloai']}'>{$row_loai['tenloai']}</option>";
									}
								}
							?>
						</select>
					</td>
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
		$sql_loai = "SELECT * FROM loaisanpham";
		$res_loai = $conn->query($sql_loai);
		?>
		<form action="?page=productionadd" method="POST">
			<table>
				<tr>
					<td>Tên sản phẩm</td>
					<td><input type="text" name="tensp" value=""></td>
				</tr>
				<tr>
					<td>Giá</td>
					<td><input type="text" name="gia" value=""></td>
				</tr>
				<tr>
					<td>Loại</td>
					<td>
						<select name="maloai">
							<?php
								while($row_loai = $res_loai->fetch_assoc())
								{
									echo "<option value='{$row_loai['maloai']}'>{$row_loai['tenloai']}</option>";
								}
							?>
						</select>
					</td>
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