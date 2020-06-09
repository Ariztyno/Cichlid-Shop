<?php
	session_start();
    include("ket_noi.php");	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Đăng nhập tài khoản</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="quan_tri/plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="quan_tri/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="quan_tri/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- JQVMap -->
		<link rel="stylesheet" href="quan_tri/plugins/jqvmap/jqvmap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="quan_tri/dist/css/adminlte.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="quan_tri/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="quan_tri/plugins/daterangepicker/daterangepicker.css">
		<!-- summernote -->
		<link rel="stylesheet" href="quan_tri/plugins/summernote/summernote-bs4.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body style="background-image: url('hinh_anh/back_ground/login_bg.jpeg'); background-repeat: no-repeat;">

		<?php
			$thongbao="";
			//Gọi file connection.php ở bài trước
			//require_once("lib/connection.php");
			// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
			//
			if (isset($_POST["btn_submit"])) {
				// lấy thông tin người dùng
				$ky_danh = $_POST["ky_danh"];
				$mat_khau = $_POST["mat_khau"];
				$mat_khau= md5($mat_khau);
				//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
				//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
				$ky_danh = strip_tags($ky_danh);
				$ky_danh = addslashes($ky_danh);
				$mat_khau = strip_tags($mat_khau);
				$mat_khau = addslashes($mat_khau);
				if ($ky_danh == "" || $mat_khau =="") {
					echo "Tài khoản hoặc mật khẩu bạn không được để trống!";
				}else{
					$sql = "SELECT * FROM thong_tin_quan_tri WHERE ky_danh='$ky_danh' AND mat_khau='$mat_khau' AND vai_tro='khach'";
					$query = mysqli_query($con,$sql);
					$num_rows = mysqli_num_rows($query);
					if ($num_rows==0) {
						$thongbao= "Tên đăng nhập hoặc mật khẩu không đúng !";
					}else{
						//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
						$_SESSION['ky_danh'] = $ky_danh;
						$_SESSION['mat_khau'] = $mat_khau;
		                // Thực thi hành động sau khi lưu thông tin vào session
		                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
		                header('Location: index.php');
					}
				}
			}
		?>

		<div class="row" style="margin-left: 25%; margin-right:25%; margin-top: 10%; margin-bottom: 10%; width: 50%;">
			<!-- left column -->
			<div class="col-md-12">
				<!-- jquery validation -->
				<div class="card card-primary">
					<div class="card-header" style="text-align:center">
						<h3 class="card-title" >Đăng nhập tài khoản</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" id="quickForm" method="post">
						<div class="card-body">
						
							<div class="form-group" style="color:red; text-align:center">
								<p id="ThongBao">
									<?php 
										if($thongbao){
											echo $thongbao;
										}
									?>
								</p>
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Tên đăng nhập</label>
								<input type="text" name="ky_danh" class="form-control" id="exampleInputEmail1" placeholder="Tên đăng nhập">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Mật khẩu</label>
								<input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<input type="hidden" name="dang_nhap" value="dang_nhap" >
							<button type="submit" value="Đăng nhập" class="btn btn-primary" name="btn_submit">Đăng nhập</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>