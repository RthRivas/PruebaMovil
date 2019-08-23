<?php header("Content-Type: application/json");

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['userID']);

session_destroy();

sleep(0.5);

echo json_encode(1);