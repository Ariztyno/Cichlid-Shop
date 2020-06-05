<?php
	require 'ket_noi.php';
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
	$new_tinh_trang=$_POST['new_tinh_trang'];
	$id=$_POST['id_hoa_don'];
	if($new_tinh_trang!=""){
		$tv_m="update hoa_don set trang_thai='$new_tinh_trang' where id='$id'";
		$tv_m_1=mysqli_query($con,$tv_m);

		if($tv_m_1){
			//update trang thai thanh cong
			thong_bao_html("Cập nhật trạng thái đơn hàng $id thành công");
		}else{
			//update trang thai that bai
			thong_bao_html("Đã có lỗi xảy ra vui lòng thử lại sau");	
		}
	}else{
		//trang thai moi = "" nen ko update
		thong_bao_html("Bạn chưa chọn trạng thái mới hoặc do đơn hàng (đã hoàn thành, đã huỷ) không thể cập nhật được nữa");
	}
?>