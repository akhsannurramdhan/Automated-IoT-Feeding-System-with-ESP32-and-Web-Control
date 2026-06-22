<?php
require 'database.php';

if (!empty($_POST)) {
    $id = $_POST['id'];
    $weight = $_POST['weight'];
    $servo_status = $_POST['servo_status'];
    $remaining_feed = $_POST['remaining_feed'];
    $connection_status = $_POST['connection_status'];

    date_default_timezone_set("Asia/Jakarta"); 
    $tm = date("H:i:s");
    $dt = date("Y-m-d");

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE table_update SET weight = ?, servo_status = ?, remaining_feed = ?, connection_status = ?, time = ?, date = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($weight, $servo_status, $remaining_feed, $connection_status, $tm, $dt, $id));

    $id_key;
    $board = $_POST['id'];
    $found_empty = false;

    while ($found_empty == false) {
        $id_key = generate_string_id(10);
        $sql = 'SELECT * FROM table_record WHERE id = ?';
        $q = $pdo->prepare($sql);
        $q->execute(array($id_key));

        if (!$q->fetch()) {
            $found_empty = true;
        }
    }

    $sql = "INSERT INTO table_record (id, board, weight, servo_status, remaining_feed, connection_status, time, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($id_key, $board, $weight, $servo_status, $remaining_feed, $connection_status, $tm, $dt));

    Database::disconnect();
}

function generate_string_id($strength = 16) {
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($permitted_chars);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
?>
