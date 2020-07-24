		<nav class="colorlib-nav" style="border-bottom: 3px solid #e20000;" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
							<div id="colorlib-logo"><a href="./">Mi tienda online</a></div>
						</div>
						<div  class="col-xs-4 col-sm-7 col-md-7 col-lg-7 text-right menu-1">						
							<ul class="colorlib-nav">
								<li><a href="">NOSOTROS</a></li>
								<li><a href="">CATÁLOGO</a></li>
								<li><a href="">CATEGORÍA</a>
									<ul>
											<?php
											$categoria = new Categoria();
											$categoria -> seleccionarCategoriaController();
											?>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 menu-1">
							<div class="social-icon large-icon icon-color-footer">				
									<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
									<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
									<a href="https://youtube.com/" title="Youtube" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
									<a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
									<a href="https://api.whatsapp.com/send?phone=51914969387&text=Quiero%20afiliarme%20a%20Sokso%20y%20empezar%20a%20ganar" title="Whatsapp" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		