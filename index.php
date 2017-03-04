<?php
include'baitap.php';
echo '<hr>';
echo '<a href="them.php">Thêm</a>';
echo '<hr>';
 
 
$get = @mysql_query("select * from `khach_hang` where `ID_KH` != '0'  order by ID_KH asc limit 0,1000;");
while ($showget = @mysql_fetch_array($get)) {
    echo ' ID_KH: '.$showget['ID_KH'].'<br/>';
    echo ' Email: '.$showget['Email'].'<br/>';
    echo ' SDT: '.$showget['SDT'].'<br/>';
    echo ' Dia_Chi: '.$showget['Dia_Chi'].'<br/>';
    echo ' Ngay_Sinh: '.$showget['Ngay_Sinh'].'<br/>';
    echo ' Gioi_Tinh: '.$showget['Gioi_Tinh'].'<br/>';
    echo ' CMND: '.$showget['CMND'].'<br/>';
    echo '<a href="xoa.php?ID_KH='.$showget['ID_KH'].'">Xóa</a>';
    echo '<hr>';
    }

?>
