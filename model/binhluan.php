<?php 
    function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp ";
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idpro, $iduser, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','$iduser','$idpro','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function loadall_binhluanadmin(){
        $sql="select*from binhluan ";
        $sql2= "SELECT binhluan.id, binhluan.noidung, taikhoan.user, sanpham.name ,binhluan.ngaybinhluan
        FROM binhluan
        JOIN taikhoan ON binhluan.iduser = taikhoan.id
        JOIN sanpham ON binhluan.idpro = sanpham.id";
        $listbl=pdo_query($sql2);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }

?>