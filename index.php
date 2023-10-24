<?php
    session_start();
    
        include "model/pdo.php";
        include "model/sanpham.php";
        include "model/danhmuc.php";
        include "model/binhluan.php";
        include "model/taikhoan.php";
        include "view/header.php";
        include "global.php";
        $spnew = loadall_sanpham_home();
        $dsdm = loadall_danhmuc();
        $dstop10 = loadall_sanpham_top10();
        // $user= loadone_taikhoan();
        if(isset($_GET['act'])&&($_GET['act']!="")){
            $act=$_GET['act'];
            switch($act){
                case "sanpham":
                    if(isset($_POST['keyword']) &&  $_POST['keyword'] != "" ){
                        $kyw = $_POST['keyword'];
                    }else{
                        $kyw = "";
                    }
                    if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                        $iddm=$_GET['iddm'];
                    }else{
                        $iddm=0;
                    }
                    $dssp=loadall_sanpham($kyw,$iddm);
                    
                    include "view/sanpham.php";
                    break;
                case "sanphamct":
                    if(isset($_POST['guibinhluan'])){
                        insert_binhluan($_POST['idpro'],$_SESSION['user']['id'], $_POST['noidung']);
                    }
                    if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                        $sanpham = loadone_sanpham($_GET['idsp']);
                        $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                        $binhluan = loadall_binhluan($_GET['idsp']);
                        include "view/chitietsanpham.php";
                    }else{
                        include "view/home.php";            
                    }
                    break;
                case "edittk":
                    if(isset($_POST['submit'])){
                        $user=$_POST['username'];
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $id=$_POST['id'];
                        update_taikhoan_user($id,$pass,$email,$address,$tel);
                        $_SESSION['user']=checkUser($user,$pass);
                        $thongbao="Cập nhật thành công !";
                        // header("location: index.php?act=edittk");
                    }
                    include "view/edittk.php";
                    break;
                
                
            }
        }else{
            include "view/home.php";
        }
        
        include "view/footer.php";
    
?>