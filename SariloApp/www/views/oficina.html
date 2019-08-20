
<?php 
require_once "clases/Conexion.php";
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
		  on art.id_categoria=cat.id_categoria and (art.id_categoria = 1)";
	$result=mysqli_query($conexion,$sql);

 ?>
 <body id="container-page-product">

<section id="store">
<div class="container">
  <div class="row">
      <div class="col-xs-12">
          <div id="myTabContent" class="tab-content"> 
          <!--inicio de los contenedores-->
              <div role="tabpanel" class="tab-pane fade active in" id="" aria-labelledby="-tab"><br>
                  <?php $num=0; while($ver=mysqli_fetch_row($result)): ?>
                      
                      <div class="col-xs-12 col-sm-6 col-md-3">
                              <div class="thumbnail">
                                   <a href=""><img  src=" <?php $imgVer=explode("/", $ver[4]) ;
                                    $imgruta=$imgVer[2]."/".$imgVer[3];?>">
                                    <img width="80" height="80" src="<?php echo $imgruta ?>"></a>
                                          <div class="caption">
                                              <h3><?php echo $ver[0]; ?></h3> <!--nombre-->
                                              <p><?php echo $ver[1]; ?></p> <!--Descripcion-->
                                              <p>$<?php echo $ver[3]; ?></p><!--precio-->
                                             
                                              <p class="text-center">
                                                  <a href="index.php?pg=VerDetalle&id_producto=<?php echo $ver[6]; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                                  <button value="'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                              </p>

                              </div>
                          </div>
                      </div>     
                                          
                  <?php
                   $num++;
                      if($num % 4 == 0){
                          
                         ?> <div class="clearfix"></div>
                    <?php   }
                  ?>
                  <?php endwhile; ?>
              </div>
              <!--final-->
          </div>
       </div>
      </div>
  </div>
</section>
</body>