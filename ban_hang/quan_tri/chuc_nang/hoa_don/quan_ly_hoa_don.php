<?php 
	require 'ket_noi.php';
	if(!isset($bien_bao_mat)){exit();}
?>>
<?php
	if(!isset($_GET['id_trang_thai']))
	{
		$id_trang_thai="toan_bo_hoa_don";
	}
	else 
	{
		if($_GET['id_trang_thai']!="" and $_GET['id_trang_thai']!="toan_bo_hoa_don")
		{
			$id_trang_thai=$_GET['id_trang_thai'];

			/*if($id_trang_thai=="1"){
				$id_trang_thai_t="Đã hoàn thành";
			}else if($id_trang_thai=="2"){
				$id_trang_thai_t="Đã huỷ";
			}else if($id_trang_thai=="3"){
				$id_trang_thai_t="Đã duyệt";
			}else if($id_trang_thai=="4"){
				$id_trang_thai_t="Chưa duyệt";
			}*/
		}
		else 
		{
			$id_trang_thai="toan_bo_hoa_don";
		}
	}
?>

<script>
function change(){
    document.getElementById("myform").submit();
}
</script>
<!--
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="370px" ><b>Tên</b></td>
		<td width="300px" ><b>Email</b></td>
		<td width="120px" ><b>Điện thoại</b></td>
		<td align="center" width="100px" ><b>Sửa</b></td>
		<td align="center" width="100px" ><b>Xóa</b></td>
	</tr>
	<?php /*
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten_nguoi_mua'];
			$email=$tv_2['email'];
			$dien_thoai=$tv_2['dien_thoai'];
			$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_hoa_don=co&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td>
						<?php echo $email; ?>
					</td>
					<td>
						<?php echo $dien_thoai; ?>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xem; ?>" class="lk_a1" >Xem</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}*/
	?>
	<tr>
		<td colspan="5" align="center" >
			<br>
			<?php /*
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=hoa_don&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}*/
			?>
			<br><br>
		</td>
	</tr>
</table>-->

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
							<h1>Quản lý hoá đơn</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="index.php">Quản trị cửa hàng</a></li>
								<li class="breadcrumb-item active">Quản lý</li>
								<li class="breadcrumb-item active"><a href="index.php?thamso=quan_ly_hoa_don">Quản lý hoá đơn</a></li>
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
						<h3 class="card-title">Quản lý hoá đơn</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="row" style="margin-left: 1%; margin-top: 1%;">
									<div class="col-md-6">
										<div class="form-group">
											<label>Chọn</label>
											<select class="form-control select2" style="width: 100%;" onchange="window.location='?thamso=hoa_don&id_trang_thai='+this.value">
												<option value="" >Toàn bộ hoá đơn</option>

												<?php
													if($id_trang_thai=="hoan_thanh"){
														echo "<option value='hoan_thanh' selected >Hoá đơn đã hoàn thành</option>";
														echo "<option value='da_huy' >Hoá đơn đã huỷ</option>";
														echo "<option value='da_duyet'>Hoá đơn đã duyệt</option>";
														echo "<option value='cho_duyet'>Hoá đơn chờ duyệt</option>";
													}else if($id_trang_thai=="da_huy"){
														echo "<option value='hoan_thanh'>Hoá đơn đã hoàn thành</option>";
														echo "<option value='da_huy' selected >Hoá đơn đã huỷ</option>";
														echo "<option value='da_duyet'>Hoá đơn đã duyệt</option>";
														echo "<option value='cho_duyet'>Hoá đơn chờ duyệt</option>";
													}else if($id_trang_thai=="da_duyet"){
														echo "<option value='hoan_thanh'>Hoá đơn đã hoàn thành</option>";
														echo "<option value='da_huy'>Hoá đơn đã huỷ</option>";
														echo "<option value='da_duyet' selected>Hoá đơn đã duyệt</option>";
														echo "<option value='cho_duyet'>Hoá đơn chờ duyệt</option>";
													}else if($id_trang_thai=="cho_duyet"){
														echo "<option value='hoan_thanh'>Hoá đơn đã hoàn thành</option>";
														echo "<option value='da_huy'>Hoá đơn đã huỷ</option>";
														echo "<option value='da_duyet'>Hoá đơn đã duyệt</option>";
														echo "<option value='cho_duyet' selected>Hoá đơn chờ duyệt</option>";
													}else{
														echo "<option value='hoan_thanh'>Hoá đơn đã hoàn thành</option>";
														echo "<option value='da_huy'>Hoá đơn đã huỷ</option>";
														echo "<option value='da_duyet'>Hoá đơn đã duyệt</option>";
														echo "<option value='cho_duyet'>Hoá đơn chờ duyệt</option>";
													}
												?>

												<!--
												<option value="2">Hoá đơn đã huỷ</option>
												<option value="3">Hoá đơn đã duyệt</option>
												<option value="4">Hoá đơn chưa duyệt</option>-->
											</select>
										</div>
									</div>
								</div>
								<?php 
									$so_dong_tren_mot_trang=20;
									if(!isset($_GET['trang'])){$_GET['trang']=1;}
									
									if($id_trang_thai=="toan_bo_hoa_don")
									{
										$tv="select count(*) from hoa_don";
									}
									else 
									{

										$tv="select count(*) from hoa_don where trang_thai='$id_trang_thai' ";
									}
									$tv_1=mysqli_query($con,$tv);
									$tv_2=mysqli_fetch_array($tv_1);
									$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
									
									$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
									if($id_trang_thai=="toan_bo_hoa_don")
									{
										$tv="select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang";
									}
									else 
									{

										$tv="select * from hoa_don where trang_thai='$id_trang_thai' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
									}
									
									$tv_1=mysqli_query($con,$tv);
								?>
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 20%">
												Tên
											</th>
											<th style="width: 20%">
												Email
											</th>
											<th style="width: 20%">
												Điện thoại
											</th>
											<th style="width: 20%">
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
											while($tv_2=mysqli_fetch_array($tv_1))
											{
												$id=$tv_2['id'];
												$ten=$tv_2['ten_nguoi_mua'];
												$email=$tv_2['email'];
												$dien_thoai=$tv_2['dien_thoai'];
												$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
												$link_xoa="?xoa_hoa_don=co&id=".$id;
												?>
													<tr>
														<td>
															<a href="<?php echo $link_xem; ?>"><?php echo $ten; ?></a>
														</td>
														<td>
															<?php echo $email; ?>
														</td>
														<td>
															<?php echo $dien_thoai; ?>
														</td>
														<td class="project-actions text-right">
															<a class="btn btn-info btn-sm" href="<?php echo $link_xem; ?>">
																<i class="fas fa-pencil-alt">
																</i>
																Xem & Cập nhật
															</a>
															<a class="btn btn-danger btn-sm" href="<?php echo $link_xoa; ?>">
																<i class="fas fa-trash">
																</i>
																Xoá
															</a>
														</td>
													</tr>
												<?php 
											}
										?>

										<tr>
											<td>
												<a class="btn btn-primary btn-sm" href="#">
													<i class="fas fa-arrow-right">
													</i>
													Danh sách trang
												</a>
											</td>
											<td colspan="3" align="center">
												<br>
												<?php 
													for($i=1;$i<=$so_trang;$i++)
													{
														$link_phan_trang="?thamso=hoa_don&id_trang_thai=".$id_trang_thai."&trang=".$i;
														echo "<a class='btn btn-primary btn-sm phan_trang' href='$link_phan_trang'>";
															echo $i;
														echo "</a> ";
													}
												?>
												<br><br>
											</td>
										</tr>
									</tbody>
								</table>
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