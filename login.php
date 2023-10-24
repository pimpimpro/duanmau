<?php
    session_start();
    include "model/pdo.php";
    include 'model/taikhoan.php';
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $pass=$_POST['password'];
        if($username =='' || $pass ==''){
            $errlogin='tài khoản hoặc mật khẩu sai !';
        }else{
            
            $checkUser=checkUser($username,$pass);
            if(is_array($checkUser)){
                $_SESSION['user']=$checkUser;
                header("location:index.php");
            }

            
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="text" name="username" placeholder="Username"> 
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" placeholder="Password" >
                    </div>
                    <div>
                        <span style="color:red"><?php echo isset($errlogin)?$errlogin:''; ?></span>
                    </div>
                    <div class="forget">
                        <input type="checkbox">
                        <label for="">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button name="submit">Login</button>
                    <div class="register">
                        <p>Don't have account ? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>