
<head>
	<title>Pedidos</title>
</head>
<body>

	<div class="container">
		 <h1>Pedidos de productos</h1>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<span class="btn btn-default" id="pedidoProductosBtn">Realizar pedido</span>
		 		<span class="btn btn-default" id="pedidoHechoBtn">Pedidos Hechos</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="pedidoProductos"></div>
		 		<div id="pedidoHecho"></div>
		 	</div>
		 </div>
	</div>
</body>

	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#pedidoProductosBtn').click(function(){
				esconderSeccionPedido();
				$('#pedidoProductos').load('vistas/pedidos/pedidoDeProductos.php');
				$('#pedidoProductos').show();
			});
			$('#pedidoHechoBtn').click(function(){
				esconderSeccionPedido();
				$('#pedidoHecho').load('vistas/pedidos/ReportePedido.php');
				$('#pedidoHecho').show();
			});
		});

		function esconderSeccionPedido(){
			$('#pedidoProductos').hide();
			$('#pedidoHecho').hide();
		}

	</script>
