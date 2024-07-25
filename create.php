<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $case_number = $_POST['case_number'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $sql = "INSERT INTO crimes (case_number, date, location, description, status)
            VALUES ('$case_number', '$date', '$location', '$description', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="create.php">
    Case Number: <input type="text" name="case_number"><br>
    Date: <input type="date" name="date"><br>
    Location: <input type="text" name="location"><br>
    Description: <textarea name="description"></textarea><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" value="Create Record">
</form>
