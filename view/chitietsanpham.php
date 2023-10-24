
<style>
    td {
        padding: 0 20px;
    }
    .band:hover{
        cursor:not-allowed;
    }
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php 
                    $img = $img_path . $img;
                    echo "<img src='$img' width='300'>";
                    echo "<p>$mota</p>";              
                ?>

            </div>
        </div>

        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo $value['user']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            

            <div class="box_cmt">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <?php             
                        if(isset($_SESSION['user'])){
                            echo '
                                <input type="hidden" name="idpro" value="'.$id.'">
                                <input type="text" name="noidung">
                                <input type="submit" name="guibinhluan" value="Gửi bình luận">
                            ';
                        }else{
                            echo '
                                <input class="band" type="text" value="Đăng nhập để bình luận" readonly>
                            ';
                        }
                    ?>                 
                </form>
            </div>
            

        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach($sanphamcl as $value): ?>
                <li>
                    <a href="index.php?act=sanphamct&idsp=<?=$value['id']?>">
                        <?=$value['name']?>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>