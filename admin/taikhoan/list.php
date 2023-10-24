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
            width: 10%;
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
            width: 20%;
        }
        .fixed_headers td:nth-child(6),
        .fixed_headers th:nth-child(6) {
            width: 150px;
        }
        .fixed_headers td:nth-child(8),
        .fixed_headers th:nth-child(8) {
            width: 150px;
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
                $listtk=loadall_taikhoan();
    ?>
    <div class="boxcenter">
        <div class="row2">
            <div style="text-align: center; margin-top:20px;">
                <h1>Danh sách khách hàng</h1>
            </div>
            <div >
                <form action="" method="POST">
                    <div>
                        <table class="fixed_headers" >
                            <tr>
                                <th>Mã tài khoản</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Active</th>
                            </tr>
                            <?php
                                foreach($listtk as $u){
                                    extract($u);
                                    $suatk="index.php?act=suatk&id=".$id;
                                    $xoatk="index.php?act=xoatk&id=".$id;
                                        echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td><a  href="'.$suatk.'"><input class="a1" type="button" value="Sửa"> </a>   <a  href="'.$xoatk.'"><input class="a1" type="button" value="Xóa"></a></td>
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