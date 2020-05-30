
<?php 
	require "ket_noi.php";
	$tv="SELECT html FROM quang_cao WHERE vi_tri='trai' ";
	$tv_1=mysqli_query($con,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	echo $tv_2['html'];
?>