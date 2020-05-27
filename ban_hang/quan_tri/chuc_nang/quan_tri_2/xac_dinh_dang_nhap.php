<?php 
	if(!isset($bien_bao_mat)){exit();}
	function thong_bao_abc($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
			  	<title>Thông báo</title>
				<!-- Tell the browser to be responsive to screen width -->
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- Font Awesome -->
				<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
				<!-- Ionicons -->
				<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
				<!-- Theme style -->
				<link rel="stylesheet" href="dist/css/adminlte.min.css">
				<!-- Google Font: Source Sans Pro -->
				<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
			</head>
			<body class="hold-transition lockscreen">
				<!-- Automatic element centering -->
				<div class="lockscreen-wrapper">
					<div class="lockscreen-logo">
						<a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
					</div>
					<script type="text/javascript">
						alert("<?php echo $c; ?>");
					</script>
					<div class="lockscreen-footer text-center">
						Copyright &copy; 2014-2019 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
						All rights reserved
					</div>
				</div>
				<!-- /.center -->

				<!-- jQuery -->
				<script src="plugins/jquery/jquery.min.js"></script>
				<!-- Bootstrap 4 -->
				<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			</body>
			</html>	
		<?php 
		exit();
	}
	function trang_truoc_abc()
	{
		?>

			<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
			  	<title>Đang chuyển về trang trước</title>
				<!-- Tell the browser to be responsive to screen width -->
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- Font Awesome -->
				<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
				<!-- Ionicons -->
				<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
				<!-- Theme style -->
				<link rel="stylesheet" href="dist/css/adminlte.min.css">
				<!-- Google Font: Source Sans Pro -->
				<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
			</head>
			<body class="hold-transition lockscreen">
				<!-- Automatic element centering -->
				<div class="lockscreen-wrapper">
					<script type="text/javascript">
					window.history.back();
				</script>	
				</div>
				<!-- /.center -->

				<!-- jQuery -->
				<script src="plugins/jquery/jquery.min.js"></script>
				<!-- Bootstrap 4 -->
				<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			</body>
			</html>

		<?php 
	}
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		$ky_danh=$_POST['ky_danh'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		
		$tv="select count(*) from thong_tin_quan_tri where ky_danh='$ky_danh' and mat_khau='$mat_khau' and vai_tro!='khach'";
		$tv_1=mysqli_query($con,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$_SESSION['ky_danh']=$ky_danh;
			$_SESSION['mat_khau']=$mat_khau;
		}
		else 
		{
			thong_bao_abc("Thông tin nhập vào không đúng hoặc bạn không có quyền để truy cập trang quản trị");
		}
		trang_truoc_abc();
	}
	
	if(isset($_SESSION['ky_danh']))
	{
		$ky_danh=$_SESSION['ky_danh'];
		$mat_khau=$_SESSION['mat_khau'];
		$tv="select count(*) from thong_tin_quan_tri where ky_danh='$ky_danh' and mat_khau='$mat_khau' and vai_tro!='khach'";
		$tv_1=mysqli_query($con,$tv);
		$tv_2=mysqli_fetch_array($tv_1);;
		if($tv_2[0]==1)
		{
			$xac_dinh_dang_nhap="co";
		}
	}
?>