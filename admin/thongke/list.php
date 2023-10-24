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
            display: block;
            font-size: 20px;
            background-color: aqua;
            width: 300px;
            border-radius: 10px;
            padding: 10px 0;
            border:none;
            margin-top:20px;
            margin: 20px auto;
        }
        button:hover{
            cursor: pointer;
            background-color: aquamarine;
        }
        
        .h1{
            text-align: center;
            margin: 20px 0;
        }
        th{
            color:black;
        }
        </style>
<h1 class="h1">Thống kê sản phẩm</h1>
<table class="fixed_headers">
    <thead>
        <tr>
            <th>Mã danh mục </th>
            <th>Tên danh mục </th>
            <th>Số lượng</th>
            <th>Giá thấp nhất</th>
            <th>Giá cao nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($listthongke as $u){
                extract($u);
                echo '<tr>
                        <td>'.$iddm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$avgprice.'</td>
                      </tr>';
                
            }
        ?>
    </tbody>
        </table>

    <button><a href="index.php?act=bieudo">Xem biểu đồ</a></button>