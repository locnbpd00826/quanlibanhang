<?php
include'baitap.php'; 

if(@$_POST['submit']){
mysql_query("insert into `khach_hang` set   
                                        `Ho_Ten` = '".$_POST['Ho_Ten']."',
                                        `Email` = '".$_POST['Email']."',
                                        `SDT` = '".$_POST['SDT']."',
                                        `Dia_Chi` = '".$_POST['Dia_Chi']."',                                        
                                        `Ngay_Sinh` = '".$_POST['Ngay_Sinh']."',
                                        `Gioi_Tinh` = '".$_POST['Gioi_Tinh']."',
                                        `CMND` = '".$_POST['CMND']."' ") or die('Có lỗi khi chèn thông tin vào cơ sở dữ liệu');  
                                        
                                        echo'Đã thêm thành công.';
}else{
    ?>
   
    <form method="POST">
    <b>Ho_Ten</b>: <br/>
    <input type="text" name="Ho_Ten"/><br />
    
    <b>Email</b>: <br/>
    <input type="text" name="Email"/><br />
    
    <b>SDT</b>: <br/>
    <input type="text" name="SDT"/><br />
    
    <b>Dia_Chi</b>: <br/>
    <input type="text" name="Dia_Chi"/><br />
    
    <b>Ngay_Sinh (1994-03-19)</b>: <br/>
    <input type="text" name="Ngay_Sinh"/><br />
    
    <b>Gioi_Tinh (Nam hoặc Nữ)</b>: <br/>
    <input type="text" name="Gioi_Tinh"/><br />
    
    <b>CMND</b>: <br/>
    <input type="text" name="CMND"/><br />
    
    <input type="submit" name="submit" value="Thêm" />
    
    </form>
    <?php
}

?>
