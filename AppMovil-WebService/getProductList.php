<?php header("Content-type: application/json");
require_once "../clases/Conexion.php";
	$c= new conectar();
	$data;
	$conexion=$c->conexion();
	//Extraer la categoria del json durante el post
	$catInPost = file_get_contents('php://input');
	$catInPost =  explode('=',$catInPost);
	$categoria = ";";
	if(isset($catInPost[1])){
		$categoria = " AND (art.id_categoria = " .$catInPost[1] .");";
		
	}
	
	$sql="SELECT art.nombre,
					art.descripcion,
					art.cantidad,
					art.precio,
					img.ruta,
					cat.nombreCategoria,
					art.id_producto
		  FROM articulos AS art 
		  INNER JOIN imagenes AS img
		  on art.id_imagen=img.id_imagen
		  INNER JOIN categorias AS cat
		  ON art.id_categoria=cat.id_categoria". $categoria;
	$result=mysqli_query($conexion,$sql);
	$fetchted=mysqli_fetch_all($result);
	
	$i = 0;
	foreach ($fetchted as $row){
		$data[$i]['nameProd'] = $row[0];
		$data[$i]['descriptionProd'] = $row[1];
		$data[$i]['stockProd'] = $row[2];
		$data[$i]['priceProd'] = $row[3];
		//Extraer solo el nombre del archivo.
		$explodeado = explode("/", $row[4]);
		$data[$i]['imgName'] = $explodeado[count($explodeado)-1];
		$data[$i]['nameCategoria'] = $row[5];
		$data[$i]['idProd'] = $row[6];
		$i++;
	}
	echo json_encode($data);