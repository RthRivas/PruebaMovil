<?php header("Content-Type: application/json");

require_once "../clases/Conexion.php";
	$c= new conectar();
	$data;
    $conexion=$c->conexion();

    $prodID = file_get_contents('php://input');
    $prodID =  explode('=',$prodID);
    $data['recibido']= $prodID[1];
    
    $sql="SELECT art.nombre,
					art.descripcion,
					art.cantidad,
					art.precio,
					img.ruta,
					cat.nombreCategoria,
					art.id_producto
		  from articulos as art 
		  inner join imagenes as img
		  on art.id_imagen=img.id_imagen
		  inner join categorias as cat
		  on art.id_categoria=cat.id_categoria and art.id_producto = 3";
    $result=mysqli_query($conexion,$sql);
    $data;
    $row=mysqli_fetch_row($result);

    $data['nombre']= $row[0];
    $data['descripcion']= $row[1];
    $data['cantidad']= $row[2];
    $data['precio']= $row[3];
    //Extraer solo el nombre del archivo.
    $explodeado = explode("/", $row[4]);
    $data['imgName'] = $explodeado[count($explodeado)-1];
    $data['nombreCategoria']= $row[5];
    $data['id_producto']= $row[6];

    echo json_encode($data);
    

