		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">



				<?php
				$id = $_GET["producto"];
				$producto = new Producto();
				$producto -> seleccionarProductoController($id);
				?>



				</div>
			</div>
		</div>