<style>
    .band:hover{
        cursor:not-allowed;
    }
    span{
        color:red;
    }

section{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-position: center;
    background-size: cover;
    min-height: 500px;
    color:#fff;
    font-family: 'Poppins', sans-serif;
    

}
.form-box{
    position: relative;
    width: 350px;
    height: 400px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #04d5f0;
}
h2{
    text-align: center;
    font-size: 30px;
    color:orangered;
    margin-bottom: 30px;
}
a{
    text-decoration: none;
    /* color: #fff; */
}
.inputbox{
    margin-bottom: 12px;
}
.inputbox>input{
    display: block;
    border-radius: 5px;
    padding:7px;
    width: 100%;
    line-height: 10px;
    
}
.forget{
    display: flex;
    margin:10px 0;
    font-size: 15px;
}
.forget>a{
    margin-left:20px;
}
.button{
    margin-top: 10px;
    padding:5px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    background-color: #fff;
    outline: none;
    border:none;
    margin-left: 7px;
}
.button:hover{
    background-image: linear-gradient(to right,#b81d59,#1a0432);
    color: #fff;
    border: 1px solid #fff;
}
.register{
    margin-top:25px;
    text-align: center;
}
.register a{
    font-weight: 900;
}
</style>
<section>
        <div class="form-box">
            <div class="form-value">
                <?php
                    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edittk" method="post">
                    <h2>Cập nhật tài khoản</h2>
                    <div class="inputbox">
                        <input class="band" type="text" name="username" value="<?=$user?>" readonly> 
                    </div>


                    <div class="inputbox">
                        <input type="password" name="password" value="<?=$pass?>" >
                    </div>

                    <div class="inputbox">
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    
                    <div><span><?php echo isset($err['password'])?$err['password']:''; ?></span></div>
                    <div class="inputbox">
                        <input type="text" name="address" placeholder="Nhập địa chỉ"  value="<?=$address?>">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="tel" placeholder="Nhập SĐT" value="<?=$tel?>" >
                    </div>
                    
                    <input type="hidden" name="id" value="<?=$id?>">
                    <div><span ><?php echo isset($thongbao)?$thongbao:"" ?></span></div>       
                    <button class="button" name="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </section>