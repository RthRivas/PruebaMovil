<?php header("Content-type: application/json");
require_once "../clases/Conexion.php";
session_start();
$val=0;

$user = $_POST['usuario'];
$password=sha1($_POST['password']);
$c=new conectar();
$conexion=$c->conexion();


$sql="SELECT id_usuario FROM usuarios WHERE email='".$user."' AND password='".$password."';";
$result=mysqli_query($conexion,$sql);
$row = mysqli_fetch_all($result);

if(mysqli_num_rows($result) > 0){
    foreach ($row as $campo){
        $_SESSION['userID']=$campo[0];
    }
    
    $_SESSION['usuario']=$user;
    $val = 1;
}
sleep(0.5);
echo json_encode($val);