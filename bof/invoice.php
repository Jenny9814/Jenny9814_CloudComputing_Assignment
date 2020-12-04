<?php
echo "<h3>DANH SÁCH SẢN PHẨM</h3>";
$sql = "SELECT * FROM hoadon, khachhang where hoadon.makh = khachhang.makh order by hoadon.sohd asc ";
$result = $conn->query($sql);
echo "<table border=1 style='width:70%'><tr><th style='width:10%'>STT</th><th style='text-align:left'>Số hóa đơn</th><th style='text-align:left'>Ngày</th><th style='text-align:left'>Tên khách hàng</th><th style='text-align:left'>Action</th></tr>";
$i=1;
while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td style='text-align:center'>$i</td>";
		echo "<td style='text-align:left'>#{$row['sohd']}</td>";
		echo "<td style='text-align:left'>{$row['ngayhd']}</td>";
		echo "<td style='text-align:left'>{$row['hoten']}</td>";
		echo "<td style='text-align:left'><a href='?page=invoicedetail&id={$row['sohd']}'>Chi tiết</a></td>";
		echo "</tr>";
		$i++;
	}
echo "</table>";
?>