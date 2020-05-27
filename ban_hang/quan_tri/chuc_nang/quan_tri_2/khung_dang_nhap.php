<body style="background-image: url(../hinh_anh/back_ground/login_bg.jpeg); background-repeat: no-repeat;">
	<?php 
		if(!isset($bien_bao_mat)){exit();}
	?>
	<div class="row" style="margin-left: 25%; margin-right:25%; margin-top: 10%; margin-bottom: 10%; width: 50%;">
		<!-- left column -->
		<div class="col-md-12">
			<!-- jquery validation -->
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Đăng nhập hệ thống quản trị viên</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" id="quickForm" method="post">
					<div class="card-body">
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
						<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
						<button type="submit" value="Đăng nhập" class="btn btn-primary">Đăng nhập</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>



<!--<form method="post" >
	<table>
		<tr>
			<td>Ký danh :</td>
			<td><input style="width:150px" name="ky_danh" ></td>
		</tr>
		<tr>
			<td>Mật khẩu :</td>
			<td><input type="password" style="width:150px" name="mat_khau" ></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
				<input type="submit" value="Đăng nhập" >
			</td>
		</tr>
	</table>
</form>-->

	

