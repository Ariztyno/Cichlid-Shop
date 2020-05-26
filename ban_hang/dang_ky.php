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
		
		<script>
			var t = document.getElementById("");
		</script>
	</head>
	<body style="background-image: url('hinh_anh/back_ground/login_bg.jpeg'); background-repeat: no-repeat;">

		<?php
			$thongbao="";
			//Gọi file connection.php ở bài trước
			//require_once("lib/connection.php");
			// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
			if (isset($_POST["btn_submit"])) {
				// lấy thông tin người dùng
				$vai_tro = "khach";
				$ky_danh = $_POST["ky_danh"];
				$mat_khau = $_POST["mat_khau"];
				$mat_khau_1 = $_POST["mat_khau_1"];
				//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
				//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
				//
				$ky_danh = strip_tags($ky_danh);
				$ky_danh = addslashes($ky_danh);
				$mat_khau = strip_tags($mat_khau);
				$mat_khau = addslashes($mat_khau);
				$mat_khau_1 = strip_tags($mat_khau_1);
				$mat_khau_1 = addslashes($mat_khau_1);
				if ($ky_danh == "" || $mat_khau =="" || $mat_khau_1 =="") {
					$thongbao="Tài khoản, mật khẩu hoặc mật khẩu nhập lại bạn không được để trống!";
				}
				else if($mat_khau!=$mat_khau_1){
					$thongbao="Mật khẩu nhập lại phải trùng với mật khẩu!";
				}
				else{
					$sql = "INSERT INTO thong_tin_quan_tri(ky_danh, mat_khau, vai_tro ) VALUES ( '$ky_danh', '$mat_khau', '$vai_tro')";
					$query = mysqli_query($con,$sql);
					$num_rows = mysqli_num_rows($query);
					$_SESSION['ky_danh'] = $ky_danh;
		            header('Location: index.php');
				}
			}
		?>
		<div class="row" style="margin:10% 25% 10% 25%; width: 50%;">
			<!-- left column -->
			<div class="col-md-12">
				<!-- jquery validation -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Đăng ký tài khoản</h3>
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
							<div class="form-group">
								<label for="exampleInputPassword1">Nhập lại mật khẩu</label>
								<input type="password" name="mat_khau_1" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu nhập lại">
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<input type="hidden" name="dang_ky" value="dang_ky" >
							<button type="submit" value="Đăng ký" class="btn btn-primary" name="btn_submit">Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>