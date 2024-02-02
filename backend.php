<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $car_name = $_POST['car_name'];
    $model = $_POST['model'];
    $type = $_POST['type'];

    $sql = "INSERT INTO cars (car_name, model, type) VALUES ('$car_name', '$model', '$type')";

    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>