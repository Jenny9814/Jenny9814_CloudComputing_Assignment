<?php
echo "<h3>DANH SÁCH SẢN PHẨM</h3>";
$sql = "SELECT * FROM sanpham,loaisanpham WHERE sanpham.maloai = loaisanpham.maloai";
$result = $conn->query($sql);
echo "<a href=?page=productiondetail>Add new</a>";
echo "<table border=1 style='width:70%'><tr><th style='width:10%'>STT</th><th style='text-align:left'>Tên sản phẩm</th><th style='text-align:left'>Giá</th><th style='text-align:left'>Loại</th><th style='text-align:left'>Action</th></tr>";
$i=1;
while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td style='text-align:center'>$i</td>";
		echo "<td>{$row['tensp']}</td>";
		echo "<td>{$row['gia']} VNĐ</td>";
		echo "<td style='text-align:left'>{$row['tenloai']}</td>";
		echo "<td style='text-align:left'><a href='?page=productiondetail&id={$row['masp']}'>Edit</a> | <a href='?page=productiondelete&id={$row['masp']}'>Delete</a></td>";
		echo "</tr>";
		$i++;
	}
echo "</table>";
?>