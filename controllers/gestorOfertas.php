<?php

class Ofertas{

	public function seleccionarOfertasController(){

		$respuesta = OfertasModels::seleccionarOfertasModel("productos");

		foreach ($respuesta as $row => $item){

			echo '

			<div class="col-md-3 col-xs-6 text-center">
				<div class="product-entry">
					<div>
						<a class="f-product-2" href="producto.php?producto='.$item["id"].'"  style="background-image: url(backend/'.$item["imagen"].');"></a>
					</div>
					<div class="desc">
						<h3><a href="producto.php?producto='.$item["id"].'">'.utf8_encode($item["titulo"]).'</a></h3>
						<p class="price"><span>$'.$item["precio"].'</span></p>
					</div>
				</div>
			</div>
				';

		}

	}
}