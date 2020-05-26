
	<?php 
		require "ket_noi.php";
		$tv="SELECT id,ten,hinh_anh FROM san_pham ORDER BY id DESC LIMIT 0,3";
		$tv_1=mysqli_query($con,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<li><a href='$link_chi_tiet' >";
			echo $tv_2['ten'];
				//echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "</li>";
		}
	?>