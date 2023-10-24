<?php
session_start();
if(isset($_SESSION['user'])){
    
    include "../global.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/thongke.php";
    include "../model/binhluan.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            // danh mục
            case "adddm":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    if($tenloai==""){
                        $err="Vui lòng không để trống !";
                    }else{
                        insert_danhmuc($tenloai);
                        $thongbao="Thêm thành công danh mục !";
                    }
                }
                include "danhmuc/add.php";
                $listdm=loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case "xoadm":
                if(isset($_GET['id'])){
                    delete_danhmuc($_GET['id']);
                }
                include "danhmuc/add.php";
                $listdm=loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case "suadm":
                if(isset($_GET['id'])){
                $dm=loadone_dm($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    if($tenloai==""){
                        $err="Vui lòng không để trống !";
                        include "danhmuc/update.php";
                    }else{
                        update_danhmuc($id,$tenloai);
                        $thongbao="Cập nhật thành công danh mục !";
                        include "danhmuc/add.php";             
                $listdm=loadall_danhmuc();
                include "danhmuc/listdm.php";
                    }
                }
                break;

            //SẢN PHẨM :

            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $photo=null;
                    if($_FILES['image']['name'] != ""){
                        $photo=time()."_".$_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'],"../upload/$photo");
                    }
                    if($tensp=="" || $giasp==''){
                        $err="Vui lòng không để trống !";
                    }else{
                        insert_sanpham($tensp,$giasp,$photo,$mota,$iddm);
                        $thongbao="Thêm thành công sản phẩm!";
                    }
                }
                $listdm=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case "listsp":
                $listsp=loadall_sanpham();
                include "sanpham/listsp.php";
                break;
            case "xoasp":
                if(isset($_GET['id'])){
                    delete_sanpham($_GET['id']);
                }
                $listsp=loadall_sanpham();
                include "sanpham/listsp.php";
                break;
            case "suasp":
                if(isset($_GET['id'])){
                $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdm=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $photo=null;
                    if($_FILES['image']['name'] != ""){
                        $photo=time()."_".$_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'],"../upload/$photo");
                    }
                    if($tensp==""){
                        $err="Vui lòng không để trống !";
                        include "sanpham/update.php";
                    }else{
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$photo);
                        $thongbao="Cập nhật thành công sản phẩm !";
                        $listdm=loadall_danhmuc();
                        include "sanpham/listsp.php";
                    }                                
                }
                break;
                //bình luận
                case "dsbl":
                    $listbl=loadall_binhluanadmin();
                    include "binhluan/list.php";
                    break;
                case "xoabl":
                    if(isset($_GET['id'])){
                        delete_binhluan($_GET['id']);
                    }
                    include "binhluan/list.php";
                    break;
            
                //Khách hàng
                case "addkh":
                    $listtk=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case "xoatk":
                    if(isset($_GET['id'])){
                        delete_taikhoan($_GET['id']);
                    }
                    include "taikhoan/list.php";
                    break;
                case "suatk":
                    if(isset($_GET['id'])){
                    $tk=loadone_taikhoan($_GET['id']);
                    }
                    // $listtk=loadall_taikhoan();
                    include "taikhoan/update.php";
                    break;
                case "updatetk":
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $user=$_POST['tentk'];
                        $pass=$_POST['passtk'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        $id=$_POST['id'];
                        if($pass=="" || $email==""){
                            $err="Vui lòng không để trống !";
                            include "taikhoan/update.php";
                        }else{
                            update_taikhoan($id,$pass,$email,$address,$tel,$role);
                            include "taikhoan/list.php";             
                        }
                    }
                    break; 
                // thống kê
                case "thongke":
                    $listthongke=loadall_thongke();
                    include "thongke/list.php";
                    break; 
                case "bieudo":
                    $listthongke=loadall_thongke();
                    include "thongke/bieudo.php";
                    break;          
        }
    }else{
        include "home.php";
    }
    include "footer.php";
}else{
    header("location:../login.php");
}
?>
