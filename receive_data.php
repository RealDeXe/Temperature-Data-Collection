<?php
// receive_data.php

try {
    $db = new PDO("mysql:host=localhost;dbname=api;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $temperature = $_POST['temperature'] ?? null;
    $pressure = $_POST['pressure'] ?? null;

    if ($temperature !== null && $pressure !== null) {
        try {
            $stmt = $db->prepare("INSERT INTO data (temperature, pressure, timestamp) VALUES (?, ?, NOW())");
            $stmt->execute([$temperature, $pressure]);
            echo "Data saved successfully!";
        } catch (PDOException $e) {
            echo "Error saving data: " . $e->getMessage();
        }
    } else {
        echo "Missing data";
    }
} else {
    echo "Invalid request method";
}
?>
