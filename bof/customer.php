<?php
echo "<h3>DANH SÁCH KHÁCH HÀNG</h3>";
$sql = "SELECT * FROM khachhang";
$result = $conn->query($sql);
echo "<a href=?page=customerdetail>Add new</a>";
echo "<table border=1 style='width:70%'><tr><th style='width:10%'>STT</th><th>Tên</th><th>Sđt</th><th>Action</th></tr>";
$i=1;
while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td style='text-align:center'>$i</td>";
		echo "<td>{$row['hoten']}</td>";
		echo "<td style='text-align:center'>{$row['sdt']}</td>";
		echo "<td style='text-align:center'><a href='?page=customerdetail&id={$row['makh']}'>Edit</a> | <a href='?page=customerdelete&id={$row['makh']}'>Delete</a></td>";
		echo "</tr>";
		$i++;
	}
echo "</table>";
?>