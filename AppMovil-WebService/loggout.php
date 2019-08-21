<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['userID']);

session_destroy();

echo json_encode(1);