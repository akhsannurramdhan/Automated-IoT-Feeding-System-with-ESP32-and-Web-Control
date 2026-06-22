<?php
require 'database.php';

if (!empty($_POST)) {
    $id = $_POST['id'];
    $servo_status = $_POST['servo_status']; 
    $current_weight = $_POST['current_weight'];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT weight FROM table_update WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute([$id]);
    $result = $q->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $previous_weight = $result['weight'];

        if ($previous_weight - $current_weight >= 3000) {
            $servo_status = "off";
        }
    } else {
        $previous_weight = 0; 
    }

    $sql = "UPDATE table_update SET servo_status = ?, weight = ?, time = ?, date = ? WHERE id = ?";
    $time = date("H:i:s");
    $date = date("Y-m-d");
    $q = $pdo->prepare($sql);
    $q->execute([$servo_status, $current_weight, $time, $date, $id]);

    $sql = "INSERT INTO table_record (id, board, weight, servo_status, remaining_feed, connection_status, time, date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $board = $id;
    $remaining_feed = $current_weight / 1000; 
    $connection_status = "OK";
    $q = $pdo->prepare($sql);
    $q->execute([$id, $board, $current_weight, $servo_status, $remaining_feed, $connection_status, $time, $date]);

    Database::disconnect();
}
?>
