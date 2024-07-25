<?php
include 'db.php';

$sql = "SELECT * FROM crimes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Case Number: " . $row["case_number"]. " - Date: " . $row["date"]. " - Location: " . $row["location"]. " - Description: " . $row["description"]. " - Status: " . $row["status"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
