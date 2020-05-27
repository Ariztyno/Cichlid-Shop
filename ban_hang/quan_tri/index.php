<?php
	session_start();
	$bien_bao_mat="co";
    include("../ket_noi.php");	
	include("chuc_nang/quan_tri_2/xac_dinh_dang_nhap.php");
	include("chuc_nang/quan_tri_2/ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("chuc_nang/quan_tri_2/xu_ly_post_get.php");
		}   
	}
?>
<?php
	$query_noibat="select * from san_pham where noi_bat='co'";
	$query_trangchu="select * from san_pham where trang_chu='co'";

	$exec_noibat=mysqli_query($con,$query_noibat);
	$exec_trangchu=mysqli_query($con,$query_trangchu);

	$count_noibat=mysqli_num_rows($exec_noibat);
	$count_trangchu=mysqli_num_rows($exec_trangchu);

	$list_count=$count_noibat.",".$count_trangchu;

	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Quản trị</title>
		<script src='phan_bo_tro/tinymce/js/tinymce/tinymce.min.js'></script>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- JQVMap -->
		<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/adminlte.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
		<!-- summernote -->
		<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<?php 
		if(!isset($xac_dinh_dang_nhap))
		{
			include("chuc_nang/quan_tri_2/khung_dang_nhap.php");
		}
		else 
		{
			if($xac_dinh_dang_nhap=="co")
			{
				//echo "<center>";
					include("chuc_nang/quan_tri_2/trang_chu.php");
				//echo "</center>";
			}
		}
	?>
</html>