<?php header("Content-type: application/json");
    session_start();
    $data;
    if(isset($_SESSION['usuario'])){
        $data['usuario'] = $_SESSION['usuario'];
        $data['userType'] = 1;
    }else{
        $data['usuario'] = '';
    }
    sleep(0.5);
    echo json_encode($data); 

?>