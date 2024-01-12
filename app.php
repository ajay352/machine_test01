<?php
session_start();
include 'db.php';
use MyConnection\database;
$conn = database::getconnection();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $directory = './uploads/';
    class operation
    {
        function upload_data($name, $email, $password, $date, $file_name, $tmp_name, $directory, $conn)
        {
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $destination = $directory . $file_name;
            move_uploaded_file($tmp_name, $destination);
            $sql = "INSERT INTO employee(name,email,password,date,file)VALUES('$name','$email','$password','$date','$file_name')";
            if ($conn->query($sql) === TRUE) {
                header("Location:./employ_authentication/login.php");
                exit();
            }
        }
    }
    $ops = new operation();
    $ops->upload_data($name, $email, $password, $date, $file_name, $tmp_name, $directory, $conn);
}
class remove
{
    function remove_prob($id, $conn)
    {
        $sql = "DELETE FROM employee WHERE id=$id";
        if ($conn->query($sql) === true) {
            header("location:./employ_authentication/dashboard.php");
        }
    }
}
$id = $_GET['id'];
$row_remove = new remove();
$row_remove->remove_prob($id, $conn);
