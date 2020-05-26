<?php
session_start();

if(isset($_SESSION['ky_danh']) && $_SESSION['ky_danh'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['ky_danh']);
    echo 'Bạn đã đăng xuất thành công.';
    header('Location: index.php');
}

?>