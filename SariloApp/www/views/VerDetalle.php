<?php
    require_once "clases/Conexion.php"; 

    $id="";
    $id=$_GET['id_producto'];
   $c= new conectar();
	 $conexion=$c->conexion();
     
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

 ?>
 <head><title>Detalles de Producto</title></head>
     <?php //include 'link.php'; ?>
     
        <section id="infoproduct">
            
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <h1>Libreria SARILO</small></h1>
                        </div>
                        <?php $num=0; while($ver=mysqli_fetch_row($result)): ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <h3 class="text-center">Información de producto</h3>
                                        <br><br>
                                        <h4><strong>Nombre: </strong> <?php echo $ver[0]; ?></h4><br>
                                        <h4><strong>Disponibles: </strong><?php echo $ver[2]; ?></h4><br>
                                        <h4><strong>Descripcion: </strong><?php echo $ver[1]; ?></h4><br>
                                        <h4><strong>Precio: </strong><?php echo $ver[3]; ?></h4>

                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <br><br><br>
                                         <a href=""><img  src=" <?php $imgVer=explode("/", $ver[4]) ;
                                    $imgruta=$imgVer[2]."/".$imgVer[3];?>">
                                    <img width="80" height="80" src="<?php echo $imgruta ?>"></a>
                                    </div>
                                    <br><br><br>
                                    <div class="col-xs-12 text-center">
                                        <a href="index.php?pg=inicio" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>Regresar a la tienda</a> 
                                        <button value="'.$fila['id_producto'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                                    </div>
                                    <?php endwhile; ?>
                    </div>
                </div>
            </section>