<?php header("Content-type: application/json");
require_once "../clases/Conexion.php";
$datos[0] = 'mcruz01'; //$_POST['usuario'];
$datos[1] = 123;//$_POST['password'];
$c=new conectar();
$conexion=$c->conexion();
$password=sha1($datos[1]);

$sql="SELECT * FROM usuarios WHERE email='".$datos[0]."' AND password='".$password."'";
$result=mysqli_query($conexion,$sql);
$row = mysqli_fetch_all($result);
$val=0;
if(mysqli_num_rows($result) > 0){
    $_SESSION['usuario']=$datos[0];
    $_SESSION['userID']=$row[0];
    $val = 1;
}
echo json_encode($val);