<?php
session_start();
include '../db.php';
use MyConnection\database;
$conn = database::getconnection();
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
if ($_SESSION['logedin'] !== true) {
    header("location:error.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container w-8/12">
        <div class="flex">
            <div class="text-center">Welcome <?php echo $_SESSION['name']; ?></div>
            <div>
                <a href="../logout.php">logout</a>
            </div>
        </div>
        <div class="font-bold text-center">
            USERS
        </div>
        <table class="mx-auto">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Action</th>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a href="../app.php?id=<?php echo $row['id']; ?>">delete</a></td>
                    <td><a href="update.php?update_id=<?php echo $row['id']; ?>">update</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>