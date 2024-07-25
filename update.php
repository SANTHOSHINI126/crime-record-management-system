<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $case_number = $_POST['case_number'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $sql = "UPDATE crimes SET case_number='$case_number', date='$date', location='$location', description='$description', status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="update.php">
    ID: <input type="text" name="id"><br>
    Case Number: <input type="text" name="case_number"><br>
    Date: <input type="date" name="date"><br>
    Location: <input type="text" name="location"><br>
    Description: <textarea name="description"></textarea><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" value="Update Record">
</form>
