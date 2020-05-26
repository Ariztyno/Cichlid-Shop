<center>
	
</center>
	<?php 
		require "ket_noi.php";
		$tv="SELECT id,ten,hinh_anh,gia FROM san_pham WHERE noi_bat='co' ORDER BY id DESC LIMIT 0,4";
		$tv_1=mysqli_query($con,$tv);
		echo "<table>";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			echo "<tr>";
				for($i=1;$i<=3;$i++)
				{
					echo "<td align='center' width='500px' valign='top' >";
						if($tv_2!=false)
						{
							$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
							$gia=$tv_2['gia'];
							$gia=number_format($gia,0,",",".");
							echo "<a href='$link_chi_tiet' >";
								echo "<img src='$link_anh' width='150px' >";
							echo "</a>";
							echo "<br>";
							echo "<br>";
							echo "<a href='$link_chi_tiet' >";
								echo $tv_2['ten'];
							echo "</a>";
							echo "<div style='margin-top:5px' >";						
							echo $gia;
							echo "</div>";
							echo "<br>";
						}
						else 
						{
							echo "&nbsp;";
						}
					echo "</td>";
					if($i!=3)
					{
						$tv_2=mysqli_fetch_array($tv_1);
					}
				}
			echo "</tr>";
		}
		echo "</table>";
	?>

