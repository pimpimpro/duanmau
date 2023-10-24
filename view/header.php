
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <div class="header">
         <div class="header-logo">
               <h1><span>X</span>shop</h1>    
                 
         </div>

         <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                <button name="timkiem" ><i class="fas fa-search"></i></button>
            </form>
         </div>

         <div class="nav">
            <ul>
               <li><a href="">Trang chủ</a></li>
               <li><a href="">Danh mục</a></li>
               <li class="nav2 margin">
                  <a href="">Sản Phẩm</a>
               </li>
               
               <!-- <li class='margin'><a href="">Giỏ hàng</a></li>  -->
               <li class="menu2">
                     <?php
                        if(isset($_SESSION['user'])){
                           extract($_SESSION['user']);  
                           if($role==0){
                              echo "<a>Xin chào: <b>$user</b> !</a>
                                 <ul class='menu2-1'>
                                    <li><a href='index.php?act=edittk'>Thông tin tài khoản</a></li>
                                    <li><a href='logout.php'>Đăng xuất</a></li>
                                 </ul>
                           ";
                           }else{
                              echo "<a>Xin chào: <b>$user</b> !</a>
                                    <ul class='menu2-1'>
                                       <li><a href='index.php?act=edittk'>Thông tin tài khoản</a></li>
                                       <li><a href='admin/index.php'>Quản lý web</a></li>
                                       <li><a href='logout.php'>Đăng xuất</a></li>
                                       
                                    </ul>
                              ";
                           }                    
                                 
                        }else{
                           echo '<a class="button-login" href="login.php">Đăng nhập</a>' ;
                        } 
                        ?>
                  </li>    
               </ul>
         </div>
      </div>
      

      
                         
   
            <!-- END HEADER -->