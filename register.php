<?php
    include "model/pdo.php";
    include 'model/taikhoan.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
<?php
    $username=isset($_POST['username'])?$_POST['username']:'';
    $password=isset($_POST['password'])?$_POST['password']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';

    $cpass=isset($_POST['confirmpassword'])?$_POST['confirmpassword']:'';
    $err=[];
    if(isset($_POST['submit'])){
        if(empty($username)){
            $err['username']='bạn chưa nhập username !';
        }
        if(empty($email)){
            $err['email']='bạn chưa nhập email !';
        }
        if(empty($password)){
            $err['password']='bạn chưa nhập password !';
        }
        if(empty($cpass)){
            $err['cpass']='bạn chưa nhập confirmpassword !';
        }
        if($password != $cpass){
            $err['cpass']='mật khẩu nhập lại ko đúng !';
        }
    }
    if($password==$cpass && $password!='' && $username != ''){
        register($username,$password,$email);
    }
?>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <input type="text" name="username" placeholder="Username" > 
                    </div>
                    <div><span><?php echo isset($err['username'])?$err['username']:''; ?></span></div>

                    <div class="inputbox">
                        <input type="email" name="email" placeholder="email" >
                        <span><?php echo isset($err['email'])?$err['email']:''; ?></span>
                    </div>

                    <div class="inputbox">
                        <input type="password" name="password" placeholder="Password" >
                    </div>
                    
                    <div><span><?php echo isset($err['password'])?$err['password']:''; ?></span></div>
                    <div class="inputbox">
                        <input type="password" name="confirmpassword" placeholder="ConfirmPassword" >
                    </div>
                    <div><span><?php echo isset($err['cpass'])?$err['cpass']:''; ?></span></div>
                    <div class="forget">
                        <input type="checkbox">
                        <label for="">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button name="submit">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
