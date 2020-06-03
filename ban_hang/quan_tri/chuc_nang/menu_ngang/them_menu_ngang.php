<?php
	require 'ket_noi.php';
	if(!isset($bien_bao_mat)){exit();}
?>
<!--
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" >Thêm menu ngang</b><br><br> </td>
			
		</tr>
		<tr>
			<td width="150px" >Tên : </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" >
			</td>
		</tr>
		<tr>
			<td>Loại menu : </td>
			<td>
				<?php/*
					$a_1="";
					$a_2="";
					if(isset($_SESSION['loai_menu_wr8']))
					{
						if($_SESSION['loai_menu_wr8']=="san_pham")
						{
							$a_2="selected";
						}
					}*/
				?>
				<select name="loai_menu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php //echo $a_1; ?> >Bình thường</option>
					<option value="san_pham" <?php //echo $a_2; ?> >Sản phẩm</option>
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
				  <textarea id="noi_dung" name="noi_dung" ></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_menu_ngang" value="Thêm menu" style="width:200px;height:50px;font-size:24px" >
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
							<h1>Thêm menu ngang</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="index.php">Quản trị cửa hàng</a></li>
								<li class="breadcrumb-item active">Thêm mới</li>
								<li class="breadcrumb-item active"><a href="index.php?thamso=them_menu_ngang">Thêm menu ngang</a></li>
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
						<h3 class="card-title">Thêm menu ngang</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body p-0">
								<!--
								<div class="row" style="margin-left: 1%; margin-top: 1%;">
									<div class="col-md-6">
										<div class="form-group">
											<label>Chọn</label>
											<select class="form-control select2" style="width: 100%;" onchange="window.location='?thamso=quan_ly_san_pham&id_menu='+this.value">
												<option value="" >Toàn bộ sản phẩm</option>
												<?php /*
													$tv="select * from menu_doc order by id ";
													$tv_1=mysqli_query($con,$tv);
													$a="";
													while($tv_2=mysqli_fetch_array($tv_1))
													{
														$ten=$tv_2['ten'];
														$id=$tv_2['id'];
														if($id_menu==$id)
														{
															$a="selected";
														}
														echo "<option value='$id' $a >";
															echo $ten;
														echo "</option>";
														$a="";
													}*/
												?>
											</select>
										</div>
									</div>
								</div>-->
								
								<!-- general form elements -->
								<div class="card card-primary" style="padding: 20px; margin: 20px;">
									<div class="card-header">
										<h3 class="card-title">Thêm menu ngang</h3>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									<form action="" method="post">
										<div class="card-body">
											<div class="form-group">
												<label for="exampleInputText">Tên :</label>
												<input  name="ten" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
											</div>
											<div class="form-group">
												<label for="exampleInputText">Loại menu :</label>
												<?php
													$a_1="";
													$a_2="";
													if(isset($_SESSION['loai_menu_wr8']))
													{
														if($_SESSION['loai_menu_wr8']=="san_pham")
														{
															$a_2="selected";
														}
													}
												?>
												<select class="form-control select2" style="width: 20%;"  name="loai_menu">
													<option value="" <?php echo $a_1; ?> >Bình thường</option>
													<option value="san_pham" <?php echo $a_2; ?> >Sản phẩm</option>
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
												<textarea id="noi_dung" name="noi_dung" class="form-control" rows="3" placeholder="Nhập thông tin..."></textarea>
											</div>
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
											<button class="btn btn-primary" type="submit" name="bieu_mau_them_menu_ngang"> Thêm menu </button>
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