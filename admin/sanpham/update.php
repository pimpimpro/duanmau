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
/* Tùy chỉnh giao diện dropdown */
select {
  padding: 5px 22px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  color: #333;
  cursor: pointer;
}

select:hover {
  border-color: #555;
}

select:focus {
  outline: none;
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
}

</style>
<?php
  if(isset($sanpham)){
      if(is_array($sanpham)){
          // extract($sanpham);
      }
  }
  $image="../upload/".$sanpham['img'];
  $hinh=null;
  if(is_file($image)){
      $hinh="<img src='".$image."' height='50px' width='60px' >";
  }
?>
<div class="container" >
         <div class="h1">
          <h1 style="text-align: center;">Cập nhật sản phẩm</h1>
         </div>
         <div class="all" >
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="box">
                Danh mục:
                <select name="iddm">
                  <!-- <option  value="0" selected>Tất cả</option> -->
                  <?php
                    foreach($listdm as $u){
                      var_dump($listdm);
                      extract($u);
                      if($id==$sanpham['iddm']){
                        echo '<option value="'.$id.'" selected>'.$name.'</option>';
                      }else{
                        echo '<option value="'.$id.'">'.$name.'</option>';
                      }
                    }    
                  ?>
                </select>
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="tensp" value="<?=$sanpham['name']?>">
                
            </div>
            <div class="row2 mb10">
                <input class="add-input" type="text" name="giasp" value="<?=$sanpham['price']?>">
            </div>
            <div class="row2 mb10">
                Ảnh: <br><input type="file" name="image"> <br>
                <?=$hinh?>
            </div>
            <div class="row2 mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?=$sanpham['mota'];?></textarea>
            </div>
            

            <div class="">
              <input type="hidden" name="id" value="<?=$sanpham['id']?>">
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
        