<?php
// get_data.php

header('Content-Type: application/json');

try {
    $db = new PDO("mysql:host=localhost;dbname=api;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Example: fetch last 10 records sorted by timestamp descending
    $stmt = $db->query("SELECT temperature, pressure, timestamp FROM data ORDER BY timestamp DESC LIMIT 10");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>