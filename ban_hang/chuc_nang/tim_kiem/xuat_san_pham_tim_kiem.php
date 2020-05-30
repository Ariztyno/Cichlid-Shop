<!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Sản phẩm mới</span>
                        </div>
                        <ul style=""> 
                            <?php 
                                include("chuc_nang/san_pham/moi.php"); 
                            ?>  
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                    	<a style="color: black;font-size: 25px;font: bold;">Sản phẩm bạn cần tìm</a>
                    	<br><br>
                        <?php 
							require "ket_noi.php";
							if(trim($_GET['tu_khoa'])!=""){ 
								$m=explode(" ",$_GET['tu_khoa']);    
								$chuoi_tim_sql="";
								for($i=0;$i<count($m);$i++)
								{
									$tu=trim($m[$i]);
									if($tu!="")
									{
										$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
									}
								}

								$m_2=explode(" ",$chuoi_tim_sql);    
								$chuoi_tim_sql_2="";
								for($i=0;$i<count($m_2)-1;$i++)
								{
									$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
								} 

								$so_du_lieu=15;
								$tv="SELECT count(*) FROM san_pham  WHERE $chuoi_tim_sql_2";
								$tv_1=mysqli_query($con,$tv);
								$tv_2=mysqli_fetch_array($tv_1);
								$so_trang=ceil($tv_2[0]/$so_du_lieu);
								
								if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
								
								$tv="SELECT id,ten,gia,hinh_anh,thuoc_menu FROM san_pham WHERE $chuoi_tim_sql_2 ORDER BY id DESC LIMIT $vtbd,$so_du_lieu";

								$tv_1=mysqli_query($con,$tv);
								echo "<table>";
								while($tv_2=mysqli_fetch_array($tv_1))
								{
									echo "<tr>";
										for($i=1;$i<=3;$i++)
										{
											echo "<td align='center' width='215px' valign='top' >";
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
								echo "<tr>";
									echo "<td colspan='3' align='center' >";
										echo "<div class='phan_trang' >";
											for($i=1;$i<=$so_trang;$i++)
											{
												$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
												echo "<a href='$link' >";
													echo $i;echo " ";
												echo "</a>";
											}
										echo "</div>";
									echo "</td>";
								echo "</tr>";
								echo "</table>";
							}
							else
							{
							echo "Bạn chưa nhập từ khóa";
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<br>






<!--<br><br><a style="text-align: center;font-size: 30px;">Sản phẩm bạn cần tìm</a>
<br><br>

<?php 
	/*require "ket_noi.php";
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$so_du_lieu=15;
		$tv="SELECT count(*) FROM san_pham  WHERE $chuoi_tim_sql_2";
		$tv_1=mysqli_query($con,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		
		if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
		
		$tv="SELECT id,ten,gia,hinh_anh,thuoc_menu FROM san_pham WHERE $chuoi_tim_sql_2 ORDER BY id DESC LIMIT $vtbd,$so_du_lieu";

		$tv_1=mysqli_query($con,$tv);
		echo "<table>";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			echo "<tr>";
				for($i=1;$i<=3;$i++)
				{
					echo "<td align='center' width='215px' valign='top' >";
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
		echo "<tr>";
			echo "<td colspan='3' align='center' >";
				echo "<div class='phan_trang' >";
					for($i=1;$i<=$so_trang;$i++)
					{
						$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
						echo "<a href='$link' >";
							echo $i;echo " ";
						echo "</a>";
					}
				echo "</div>";
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}*/
?>-->