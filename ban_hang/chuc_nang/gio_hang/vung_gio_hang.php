<br><a style="text-align: center;"><form>Giỏ hàng</form></a>

<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>
<a style="text-align: center;"><form>
Số sản phẩm : <?php echo $so_luong; ?></form></a>
<a href="?thamso=gio_hang" style="text-align: center;"><form>Giỏ hàng</form></a>
