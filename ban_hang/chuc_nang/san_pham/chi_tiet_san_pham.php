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
                    	<a style="color: black;font-size: 25px;font: bold;">Chi tiết sản phẩm</a>
                    	<br><br>
                        <?php 
							require "ket_noi.php";
							$_SESSION['trang_chi_tiet_gio_hang']="co";
							$id=$_GET['id'];
							$tv="SELECT * FROM san_pham WHERE id='$id'";
							$tv_1=mysqli_query($con,$tv);
							$tv_2=mysqli_fetch_array($tv_1);
							$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
							echo "<table>";
								echo "<tr>";
									echo "<td width='250px' align='center' >";
										echo "<img src='$link_anh' width='150px' >";
									echo "</td>";
									echo "<td valign='top' >";
										echo "<a href='#'>";
											echo $tv_2['ten'];
										echo "</a>";
										echo "<br>";
										echo "<br>";
										$gia=$tv_2['gia'];
										$gia=number_format($gia,0,",",".");
										echo $gia;
										echo "<br>";
										echo "<br>";
										echo "<form>";
											echo "<input type='hidden' name='thamso' value='gio_hang' > ";
											echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
											echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
											echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
										echo "</form>"; 
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td colspan='2' >";
										echo "<br>";
										echo "<br>";
										echo $tv_2['noi_dung'];
									echo "</td>";
								echo "</tr>";
							echo "</table>";
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<br>

