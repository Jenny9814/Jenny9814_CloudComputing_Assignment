<?php

if( isset($_GET['page']) && $_GET['page']=="invoicedetail")
{
	if(isset($_GET['id']))
	{
		$sql = "SELECT * FROM chitiethd,sanpham WHERE chitiethd.masp = sanpham.masp and sohd = ".intval($_GET['id']);

		$result = $conn->query($sql);

		
		echo "<h3>CHI TIẾT HÓA ĐƠN #{$_GET['id']}</h3>";
		echo "<a href=?page=invoice>Back</a>";
		echo "<table border=1 style='width:70%'><tr><th style='width:10%'>STT</th><th style='text-align:left'>Tên sản phẩm</th><th style='text-align:left'>Số lượng</th><th style='text-align:left'>Đơn giá</th><th style='text-align:left'>Thành tiền</th></tr>";
		$i=1;
		$sum = 0;
		while($row = $result->fetch_assoc())
		{
			?>
				<tr>
					<td style="text-align:center"><?= $i ?></td>
					<td style='text-align:left'><?= $row['tensp'] ?></td>
					<td style='text-align:left'><?= $row['soluong'] ?></td>
					<td style='text-align:left'><?= $row['gia'] ?> VNĐ</td>
					<td style='text-align:left'><?php $sum+=$row['gia']*$row['soluong'];echo $row['gia']*$row['soluong'] ?> VNĐ</td>
				</tr>
			
			<?php
			$i++;
			
		}
		echo "<tr><th>Tổng</th><th colspan='4'>{$sum} VNĐ</th></tr>";
		
	}	
	
}



?>