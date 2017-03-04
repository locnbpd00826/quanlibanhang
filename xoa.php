<?php
include'baitap.php';
mysql_query("delete from `khach_hang`  where `ID_KH` = '{$_GET['ID_KH']}'; ");
echo 'Đã xóa thành công';
mysql_close();
?>
