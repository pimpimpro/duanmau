<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
// function load_ten_dm($iddm){
//         $sql="select * from sanpham where id=".$iddm;
//         $dm=pdo_query_one($sql);
//         return $name;
// }


// 
// function loadone_sanpham($id){
//     $sql = "select * from sanpham where id = $id";
//     $result = pdo_query_one($sql);
//     return $result;
// }
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
// function loadall_sanpham($kyw="",$iddm=0){
//     $sql="select * from sanpham where 1";
//     if($kyw!=""){
//         $sql.="and name like '%".$kyw."%'";
//     }
//     if($iddm>0){
//         $sql.="and iddm ='".$iddm."'";
//     }
//     $sql.="order by id desc";
//     $listsanpham=pdo_query($sql);
//     return  $listsanpham;

// }


function insert_sanpham($tensp,$gia,$img,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$gia','$img','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham2(){
    $sql="select * from sanpham order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$photo){
    if($photo != ''){
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."',
        img='".$photo."' where id=".$id;
    }else{
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."'
        where id=".$id;
    }
    
    pdo_execute($sql);
}

?>