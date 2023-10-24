<style>
  .add-input{
    margin-top:20px;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 15px;
  }
  .button{
    border-radius: 8px;
    background-color:aqua;
    padding:5px 10px;
    border: none;
    font-weight: 600;
  }
  .add-input{
    margin-top:20px;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 15px;
  }
  .button{
    border-radius: 8px;
    background-color:aqua;
    padding:10px 15px;
    border: none;
    font-weight: 600;
  }
  .button:hover{
    cursor: pointer;
    background-color: aquamarine;
    color:red;
  }
  .button a{
    color:black;
    font-weight: 600;
  }
  .button:hover a{
    color:red;
  }
  .box{
    font-size: 20px;
  }
  .h1{
    padding: 20px 0;
  }
  .all{
    border-radius: 10px;
    padding:10px 0;
    border: 1px solid;
    width: 400px;
    margin: 0 auto;
  }
  .container{
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-simple-gradient-beautiful-gradient-poster-image_30641.jpg');
    height: 650px;
  }
  .band:hover{
    cursor: not-allowed;
  }


</style>
<?php
if(isset($tk)){
    if(is_array($tk)){
        extract($tk);
    }
}
?>
<div class="container" >
         <div class="h1">
          <h1 style="text-align: center;">Cập nhật tài khoản</h1>
         </div>
         <div class="all" >
         <form action="index.php?act=updatetk" method="POST">
            <div class="row2 mb10">
                <input class="add-input band" type="text" name="tentk" value="<?=$user?>" readonly>  
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="passtk" value="<?=$pass?>">
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="email" value="<?=$email?>">
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="address" value="<?=$address?>" placeholder="Nhập địa chỉ">
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="tel" value="<?=$tel?>" placeholder="nhập số điện thoại">
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="role" value="<?=$role?>">
            </div>
            
            <div class="">
              <input type="hidden" name="id" value="<?=$id?>">
                <input class="button" type="submit" name="capnhat" value="Cập nhật">
                <input  class="button" type="reset" value="Nhập Lại">
            </div>
            <span style="display:block;color:red;font-size:20px;margin-top:10px;">
              <?php
                  echo isset($thongbao)?$thongbao:'';
                  echo isset($err)?$err:'';
              ?>
            </span>  
          </form>
         </div>
        </div>
        