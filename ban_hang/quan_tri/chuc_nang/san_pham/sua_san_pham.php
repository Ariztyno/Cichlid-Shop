<?php 
	require 'ket_noi.php';
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id' ";
	$tv_1=mysqli_query($con,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	$gia=$tv_2['gia'];
	$trang_chu=$tv_2['trang_chu'];
	$noi_bat=$tv_2['noi_bat'];
	$noi_dung=$tv_2['noi_dung'];
	$ten_anh=$tv_2['hinh_anh'];
	$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
	$link_dong="?thamso=quan_ly_san_pham&id_menu=".$_GET['id_menu']."&trang=".$_GET['trang'];
	$link_sua="?thamso=sua_san_pham&id_menu=".$_GET['id_menu']."&id=".$id."&trang=".$_GET['trang'];
?>
<!--<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa sản phẩm</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php //cho $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td >Tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="<?php //echo $ten; ?>" >
			</td>
		</tr>
		<tr>
			<td valign="top" >Hình ảnh : </td>
			<td >
				<img src='<?php //echo $link_hinh; ?>' style='width:180px' > 
				<br><br>
				<input type="file" name="hinh_anh" >
				<input type="hidden" name="ten_anh" value="<?php //echo $ten_anh; ?>" >
				<br><br>
				<a href="<?php //echo $link_hinh; ?>" class="lk_a1" style="font-size:24px" target="_blank" >Xem ảnh đủ kích cỡ</a>
				<br><br>
			</td>
		</tr>
		<tr>
			<td >Giá : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="gia" value="<?php //echo $gia; ?>" >
			</td>
		</tr>
		<tr>
			<td>Trang chủ : </td>
			<td>
				<?php/*
					$a_1="";
					$a_2="";
					if($trang_chu=="co")
					{
						$a_2="selected";
					}*/
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php// echo $a_1; ?> >Không</option>
					<option value="co" <?php //echo $a_2; ?> >Có</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nổi bật : </td>
			<td>
				<?php
					/*$a_1="";
					$a_2="";
					if($noi_bat=="co")
					{
						$a_2="selected";
					}*/
				?>
				<select name="noi_bat" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php //echo $a_1; ?> >Không</option>
					<option value="co" <?php //echo $a_2; ?> >Có</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nội dung : </td>
			<td>
				<script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 800,
					height: 400,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
				  <textarea id="noi_dung" name="noi_dung" ><?php //echo $noi_dung; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_san_pham" value="Sửa sản phẩm" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>-->
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">Quản trị cửa hàng</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?thamso=menu_doc" class="nav-link">Menu dọc</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?thamso=menu_ngang" class="nav-link">Menu ngang</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?thamso=san_pham" class="nav-link">Sản phẩm</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?thamso=hoa_don" class="nav-link">Hoá đơn</a>
				</li>
			</ul>
			<!-- SEARCH FORM -->
			<!--<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>-->
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<!--<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-comments"></i>
					<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">-->
							<!-- Message Start -->
							<!--<div class="media">
								<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>-->
							<!-- Message End -->
						<!--</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">-->
							<!-- Message Start -->
							<!--<div class="media">
								<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>-->
							<!-- Message End -->
						<!--</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">-->
							<!-- Message Start -->
							<!--<div class="media">
								<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>-->
							<!-- Message End -->
						<!--</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>-->
				<!-- Notifications Dropdown Menu -->
				<!--<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-bell"></i>
					<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
						<i class="fas fa-users mr-2"></i> 8 friend requests
						<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
						<i class="fas fa-file mr-2"></i> 3 new reports
						<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>-->
				<li class="nav-item">
					<a class="nav-link" href="?thamso=thoat" role="button">
					<i class="fas fa-sign-out-alt"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
			<img src="dist/img/AdminLTELogoNew.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
				style="opacity: .8">
			<span class="brand-text font-weight-light">Cichlid Shop</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">
							<?php
								echo $_SESSION['ky_danh'];;
							?>
						</a>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Bảng điều khiển
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Quản lý
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?thamso=quan_ly_menu_ngang" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Quản lý menu ngang</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=quan_ly_menu_doc" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Quản lý menu dọc</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=quan_ly_san_pham" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Quản lý sản phẩm</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=hoa_don" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Quản lý hóa đơn</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Thêm mới
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?thamso=them_menu_ngang" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm menu ngang</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=them_menu_doc" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm menu dọc</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=them_san_pham" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm sản phẩm</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Sản phẩm
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?thamso=san_pham_trang_chu" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sản phẩm trang chủ</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=san_pham_noi_bat" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sản phẩm nổi bật</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="?thamso=slideshow" class="nav-link">
								<i class="nav-icon fas fa-image"></i>
								<p>
									Slideshows
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-edit"></i>
								<p>
									Thay đổi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?thamso=sua_banner" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thay đổi banner</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=sua_footer" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thay đổi footer</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=sua_quang_cao_trai" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thay đổi quảng cáo trái</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=sua_quang_cao_phai" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thay đổi quảng cáo phải</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?thamso=sua_thong_tin_quan_tri" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thay đổi thông tin quản trị</p>
									</a>
								</li>
							</ul>
						</li>
						
						<!--
						<li class="nav-header">EXAMPLES</li>
						<li class="nav-item">
							<a href="pages/calendar.html" class="nav-link">
								<i class="nav-icon far fa-calendar-alt"></i>
								<p>
									Calendar
									<span class="badge badge-info right">2</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/gallery.html" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Gallery
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-envelope"></i>
								<p>
									Mailbox
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/mailbox/mailbox.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Inbox</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/mailbox/compose.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Compose</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/mailbox/read-mail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Read</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Pages
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/invoice.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/profile.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profile</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/e-commerce.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>E-commerce</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/projects.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Projects</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-add.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Add</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-edit.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Edit</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-detail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Detail</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contacts.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contacts</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-plus-square"></i>
								<p>
									Extras
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/login.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Login</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/register.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Register</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Forgot Password</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/recover-password.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Recover Password</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/lockscreen.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Lockscreen</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/legacy-user-menu.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Legacy User Menu</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/language-menu.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Language Menu</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/404.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Error 404</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/500.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Error 500</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/pace.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pace</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/blank.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Blank Page</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="starter.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Starter Page</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">MISCELLANEOUS</li>
						<li class="nav-item">
							<a href="https://adminlte.io/docs/3.0" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>Documentation</p>
							</a>
						</li>
						<li class="nav-header">MULTI LEVEL EXAMPLE</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-circle nav-icon"></i>
								<p>Level 1</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-circle"></i>
								<p>
									Level 1
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Level 2</p>
									</a>
								</li>
								<li class="nav-item has-treeview">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>
											Level 2
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="far fa-dot-circle nav-icon"></i>
												<p>Level 3</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="far fa-dot-circle nav-icon"></i>
												<p>Level 3</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="far fa-dot-circle nav-icon"></i>
												<p>Level 3</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Level 2</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-circle nav-icon"></i>
								<p>Level 1</p>
							</a>
						</li>
						<li class="nav-header">LABELS</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p class="text">Important</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-warning"></i>
								<p>Warning</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-info"></i>
								<p>Informational</p>
							</a>
						</li>-->
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Sửa sản phẩm</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="index.php">Quản trị cửa hàng</a></li>
								<li class="breadcrumb-item active">Quản lý</li>
								<li class="breadcrumb-item active"><a href="index.php?thamso=quan_ly_san_pham">Quản lý sản phẩm</a></li>
								<li class="breadcrumb-item active"><a href="<?php echo $link_sua; ?>">Sửa sản phẩm <?php echo $ten; ?></a></li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Sửa sản phẩm <?php echo $ten; ?></h3>

						<div class="card-tools">
							<a class="btn btn-sm btn-primary" href="<?php echo $link_dong; ?>">Đóng</a>
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body p-0">
								
								<!-- general form elements -->
								<div class="card card-primary" style="padding: 20px; margin: 20px;">
									<div class="card-header">
										<h3 class="card-title">Sửa sản phẩm <?php echo $ten; ?></h3>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									<form action="" method="post" enctype="multipart/form-data">
										<div class="card-body">
											<div class="form-group">
												<label for="exampleInputText">Tên :</label>
												<input  name="ten" value="<?php echo $ten; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
											</div>
											<br><br>
											<div class="form-group">
												<div class="input-group">
													<div class="custom-file">
														<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" ><br><br>
													</div>
												</div>
											</div>
											<br><br><br>
											<div class="form-group">
												<label for="exampleInputText">Hình ảnh:</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" name="hinh_anh" class="custom-file-input" id="exampleInputFile">
														<input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
														<label class="custom-file-label" for="exampleInputFile"></label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="custom-file">
														<a href="<?php echo $link_hinh; ?>" class="btn btn-sm btn-primary" style="font-size:24px" target="_blank" >Xem ảnh đủ kích cỡ</a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputText">Giá :</label>
												<input  name="gia" value="<?php echo $gia; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá">
											</div>
											<div class="form-group">
												<label for="exampleInputText">Trang chủ :</label>
												<?php
													$a_1="";
													$a_2="";
													if(isset($_SESSION['tuy_chon_trang_chu']))
													{
														if($_SESSION['tuy_chon_trang_chu']=="co")
														{
															$a_2="selected";
														}
													}
												?>
												<select class="form-control select2" style="width: 20%;" name="trang_chu">
													<option value="" <?php echo $a_1; ?> >Không</option>
													<option value="co" <?php echo $a_2; ?> >Có</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputText">Nổi bật :</label>
												<?php
													$a_1="";
													$a_2="";
													if(isset($_SESSION['tuy_chon_noi_bat']))
													{
														if($_SESSION['tuy_chon_noi_bat']=="co")
														{
															$a_2="selected";
														}
													}
												?>
												<select class="form-control select2" style="width: 20%;" name="noi_bat">
													<option value="" <?php echo $a_1; ?> >Không</option>
													<option value="co" <?php echo $a_2; ?> >Có</option>
												</select>
											</div>
											
											<div class="form-group">
												<label for="exampleInputText">Nội dung :</label>
												<script type="text/javascript">
												  tinymce.init({
													selector: '#noi_dung',
													theme: 'modern',
													width: 800,
													height: 300,
													plugins: [
													  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
													  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
													  'save table contextmenu directionality emoticons template paste textcolor jbimages'
													],
													toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
													relative_urls: false
												  });
												  
												  </script>
												<textarea id="noi_dung" name="noi_dung" class="form-control" rows="3" placeholder="Nhập thông tin..."><?php echo $noi_dung; ?></textarea>
											</div>
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
											<button class="btn btn-primary" type="submit" name="bieu_mau_sua_san_pham">Sửa sản phẩm</button>
										</div>
									</form>
								</div>
								<!-- /.card -->

							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</section>
					<!-- /.content -->
				</div>
				<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2020 <a href="index.php">Cichlid Shop</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.0.4
			</div>
		</footer>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
</body>