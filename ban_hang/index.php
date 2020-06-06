<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
	    <meta name="description" content="Ogani Template">
	    <meta name="keywords" content="Ogani, unica, creative, html">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Web bán hàng</title>

	    <!-- Google Font -->
	    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

	    <!-- Css Styles -->
	    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
	    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
	    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
	    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
	    <link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <header class="header" style="background: #F3F6FA">
        <div class="header__top">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo";
                        <a href="index.php"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--<nav class="header__menu">
                        <?php
                            //include("chuc_nang/menu_ngang/menu_ngang.php");
                        ?> 
                    </nav>-->
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href='index.php'>Trang chủ</a></li>
                            <li>
                            <?php
                                $link_menu="?thamso=xuat_mot_tin";
                                echo "<a href='$link_menu'>";
                                    echo "Giới thiệu";
                                echo "</a>";
                            ?>
                            </li>
                            <li>
                                <?php
                                    $link_menu="?thamso=xuat_san_pham_2";
                                    echo "<a href='$link_menu'>";
                                        echo "Sản phẩm";
                                    echo "</a>";
                                ?>
                            </li>
                            <li>
                                <?php
                                    $link_menu="?thamso=xuat_lien_he";
                                    echo "<a href='$link_menu'>";
                                        echo "Liên hệ";
                                    echo "</a>";
                                ?>
                            </li>
                            <!---->
                            <!--<li><a href='chuc_nang/san_pham/xuat_toan_bo_san_pham.php'>Shop</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>-->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <?php
                            if (!isset($_SESSION['ky_danh'])) {
                                 //echo "<a href="dangnhap1.php">Đăng nhập</a>";
                                $dang_nhap="dangnhap1.php";
                                echo "<a href='$dang_nhap' >Đăng nhập";
                                echo "</a>";
                                echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;</a>";
                                $dang_ky="dang_ky.php";
                                echo "<a href='$dang_ky'>Đăng ký";
                                echo "</a>";
                            }
                            else{
                                echo "Chào bạn ";
                                echo $_SESSION['ky_danh'];
                                echo "<br>";
                                $dang_xuat="dang_xuat.php";
                                echo "<a href='$dang_xuat' >Đăng xuất";
								echo "</a>";
                            }
                        ?>
                    	

                        <!--<?php
	                        /*if(isset($xac_dinh_dang_nhap))
							{
								if($xac_dinh_dang_nhap=="co")
								{
									include("xu_ly_post_get1.php");
								}   
							}*/
                        ?>-->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Lay from index qua trang khac-->
    <br>
    <div>
        <center>
           	<?php 
                include("chuc_nang/dieu_huong.php");
            ?>
        </center>
    </div>
        

        <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo1.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: 173/5 Điện Biên Phủ, Phường 21, Q.Bình Thạnh, TP.Hồ Chí Minh</li>
                            <li>Điện thoại: +84 00.10.9999</li>
                            <li>Email: nguyenminh@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <!--<h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        
                    </div>
                </div>
            </div>
            <div class="row">
            
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    <br>
    
	</body>
</html>