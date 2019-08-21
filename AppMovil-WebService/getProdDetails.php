<?php header("Content-Type: application/json");

require_once "../clases/Conexion.php";
	$c= new conectar();
	$data;
    $conexion=$c->conexion();
    if (isset($_POST['idProd'])){
        $id = $_POST['idProd'];
    }
    
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
		  on art.id_categoria=cat.id_categoria and art.id_producto = $id";
    $result=mysqli_query($conexion,$sql);
    $data;
    $row=mysqli_fetch_row($result);

    $data['nameProd']= $row[0];
    $data['descriptionProd']= $row[1];
    $data['stockProd']= $row[2];
    $data['priceProd']= $row[3];
    //Extraer solo el nombre del archivo.
    $explodeado = explode("/", $row[4]);
    $data['imgName'] = $explodeado[count($explodeado)-1];
    $data['categoryName']= $row[5];
    $data['idProd']= $row[6];

    echo json_encode($data);
    

