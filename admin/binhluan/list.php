
<style>
        .fixed_headers {
            display: block;
            width: 100%;
            margin: 0 auto;
            /* table-layout: fixed; */
            border-collapse: collapse;
            border: 1px solid;
            margin-top:10px;
        }
        .fixed_headers tr th{
            background-color:aqua;   
        }
        
        .fixed_headers th,
        .fixed_headers td {
            padding: 5px;
            text-align: center;
            
        }
        .fixed_headers td:nth-child(1),
        .fixed_headers th:nth-child(1) {
            width: 10%;
        }
        .fixed_headers td:nth-child(2),
        .fixed_headers th:nth-child(2) {
            width: 30%;
        }
        .fixed_headers td:nth-child(3),
        .fixed_headers th:nth-child(3) {
            width: 20%;
        }
        .fixed_headers td:nth-child(4),
        .fixed_headers th:nth-child(4) {
            width: 20%;
        }
        .fixed_headers td:nth-child(5),
        .fixed_headers th:nth-child(5) {
            width: 10%;
        }
        .fixed_headers td:nth-child(6),
        .fixed_headers th:nth-child(6) {
            width: 200px;
        }
        .fixed_headers thead {
            background-color: #333;
            color: #fdfdfd;
        }

        .fixed_headers tbody {
            display: block;
            /* overflow: auto; */
            width: 100%;
            /* height: 300px; */
        }
        .fixed_headers tbody tr:nth-child(even) {
            background-color: #ddd;
        }
        button{
            font-size: 20px;
            background-color: aqua;
            width: 300px;
            border-radius: 10px;
            padding: 10px 0;
            margin-top: 20px;
            border:none;
        }
        button:hover{
            cursor: pointer;
            background-color: aquamarine;
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
  
    </style>
    <?php
                $listbl=loadall_binhluanadmin();
    ?>
    <div class="boxcenter">
        <div class="row2">
            <div style="text-align: center; margin-top:20px;">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <div >
                <form action="" method="POST">
                    <div>
                        <table class="fixed_headers" >
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>user</th>
                                <th>Sản phẩm</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                            <?php
                                foreach($listbl as $u){
                                    extract($u);
                                    $xoabl="index.php?act=xoabl&id=".$id;                                    
                                        echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$ngaybinhluan.'</td>

                                        <td><a  href="'.$xoabl.'"><input class="a1" type="button" value="Xóa"></a></td>
                                      </tr>';
                                }
                            ?>
                        </table>
                    </div>        
                </form>
            </div>
        </div>    
    </div>
  </div> 
</div>