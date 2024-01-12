<?php
session_start();
include 'db.php';

use MyConnection\database;

$conn = database::getconnection();
$update_id = $_SESSION['up_id'];
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $directory = './uploads/';
    class update
    {
        function update_data($name, $email, $password, $date, $file_name, $tmp_name, $directory, $conn, $update_id)
        {
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $destination = $directory . $file_name;
            move_uploaded_file($tmp_name, $destination);
            $sql = "UPDATE employee SET name='$name',email='$email',password='$password',date='$date',file='$file_name' WHERE id='$update_id'";
            if ($conn->query($sql) === TRUE) {
                header("Location:./employ_authentication/dashboard.php");
                exit();
            } else {
                echo "Error:" . $conn->error;
            }
        }
    }
    $update_form = new update();
    $update_form->update_data($name, $email, $password, $date, $file_name, $tmp_name, $directory, $conn, $update_id);
}
