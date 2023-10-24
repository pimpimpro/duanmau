<?php
   
    function checkUser($user,$pass){
        // $conn=connectDB();
        $sql="SELECT * FROM taikhoan WHERE user='$user' AND pass='$pass'";
        $result =pdo_query_one($sql);
        return $result;
    } 
    function register($user,$pass,$email){
        $sql="insert into taikhoan(user,pass,email) values ('$user','$pass','$email')";
        pdo_execute($sql);
        header('location: login.php');
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtk=pdo_query($sql);
        return  $listtk;
    }
    function delete_taikhoan($id){
        // $sql="DELETE FROM binhluan WHERE id =".$id;
        $sql="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }

    function loadone_taikhoan($id){
        $sql="select * from taikhoan where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
}

    function update_taikhoan($id,$pass,$email,$address,$tel,$role){
        $sql="update taikhoan set pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."',
        role='".$role."'
        where id=".$id;
        pdo_execute($sql);
    }
    function update_taikhoan_user($id,$pass,$email,$address,$tel){
        $sql="update taikhoan set pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."'
        where id=".$id;
        pdo_execute($sql);
    }
    
    
?>