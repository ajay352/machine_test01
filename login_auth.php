<?php
session_start();
include 'db.php';
use Myconnection\database;
$conn=database::getconnection();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_POST['log_email'];
    $password=$_POST['log_password'];
    $sql="SELECT * FROM employee WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
class login_auth
{
    function auth($result, $row)
    {
        if ($result->num_rows > 0) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['logedin'] = true;
            header("Location:./employ_authentication/dashboard.php");
        }
    }
}
$authentication = new login_auth;
$authentication->auth($result, $row);
?>