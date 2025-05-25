<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=api;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Simulate CPU temperature between 40 and 70 °C
    $temperatureC = rand(40, 70);

    echo "Simulated CPU temperature $temperatureC °C saved successfully.";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
