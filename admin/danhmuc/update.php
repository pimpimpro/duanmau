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
  .a1{
      padding:5px 10px;
      background-color: aqua;
      border:1px solid red;
      border-radius: 8px;
  }
  .a1:hover{
      cursor: pointer;
      background-color: aquamarine;
      transition: all 2 linear;
  }
  .add-input:focus{
    background-color: antiquewhite;
  }
  
</style>
<?php
if(isset($dm)){
    if(is_array($dm)){
        extract($dm);
    }
}
?>
<div class="row2" style="text-align: center;">
         <div class="row2 font_title">
          <h1>Cập nhật lại danh mục</h1>
         </div>
         <div >
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10">
            <input type="hidden" name="id" value="<?=$id?>">
              <input class="add-input" type="text" name="tenloai" value="<?php echo isset($name)?$name:'';?>" >
           </div>
           <div class="">
              <input class="button a1" type="submit" name="capnhat" value="Cập Nhật">
              <input  class="button a1" type="reset" value="Nhập Lại">
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
        