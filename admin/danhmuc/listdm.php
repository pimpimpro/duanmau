<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body> -->
    <style>
        .fixed_headers {
            display: block;
            width: 960px;
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
            min-width: 300px;
        }
        .fixed_headers td:nth-child(2),
        .fixed_headers th:nth-child(2) {
            min-width: 400px;
        }
        .fixed_headers td:nth-child(3),
        .fixed_headers th:nth-child(3) {
            width: 260px;
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
        /* .old_ie_wrapper {
            height: 300px;
            width: 750px;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .old_ie_wrapper tbody {
            height: auto;
        } */
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
    <div class="boxcenter">
        <div class="row2">
            <div style="text-align: center; margin-top:20px;">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div >
                <form action="#" method="POST">
                    <div>
                        <table class="fixed_headers" >
                            <tr>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th>Hành Động</th>
                            </tr>
                            <?php
                                foreach($listdm as $u){
                                    extract($u);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;
                                        echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td><a href="'.$suadm.'"><input class="a1" type="button" value="Sửa"> </a>   <a href="'.$xoadm.'"><input  class="a1" type="button" value="Xóa"></a></td>
                                      </tr>';
                                }
                            ?>
                        </table>
                    </div>
                    
                </form>
            </div>
        </div>



       
    </div>
    
<!-- </body>
</html> -->


    
  </div>
  
</div>