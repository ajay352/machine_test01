<?php
include ('db.php');
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    $id=$_GET['id'];
    $sql="DELETE FROM employee WHERE id=$id" ;
    if($conn->query($sql)===true){
        header("location:./employ_authentication/dashboard.php");
    }
}
?>