		<nav class="colorlib-nav" style="box-shadow: 0 2px 5px rgba(0,0,0,.3);" role="navigation">
            <div style="background: black;
                        font-size: 15px;
                        font-weight: 400;
                        padding-top: 5px;
                        padding-bottom: 5px;
                        color: white;"
                 class="text-center">

                "CALIDAD Y EXCLUSIVIDAD QUE VA CONTIGO"

            </div>
            <div class="top-menu">
				<div class="">
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<div class="row  text-center">
						    <div class="col-md-4 " style="padding-right:0px !important;">
                               <a> <img src='./views/images/styles.png' href="./"
                               style="width:50%; height:50%; margin-top:10px; border-radius:150px;"/></a>
                            </div>
						    <div class="col-md-8"
						         style="font-weight: 800;
                                        padding-top: 20px;
                                        font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
                                        font-size: 18px;">
						        <a style="color: black !important;" href="./">
                                Importaciones Styles
                                </a>
						    </div>

						</div>
						</div>

						<div  class="col-xs-4 col-sm-7 col-md-7 col-lg-7 text-right menu-1" style="padding-left:100px;">
							<ul class="colorlib-nav">
								<li><a href="./">INICIO</a></li>
								<li><a  href="./#catalogo" class="js-top">CATÁLOGO</a></li>
								<li><a href="">CATEGORÍA</a>
									<ul>
											<?php
											$categoria = new Categoria();
											$categoria -> seleccionarCategoriaController();
											?>
									</ul>
								</li>
								<li><a href="./#ubicanos">CONTÁCTO</a>
							</ul>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 menu-1" style="padding-top: 25px;">
							<div class="social-icon large-icon icon-color-footer">				
								<a href="https://web.facebook.com/bycinthiapezeros" title="Facebook" target="_blank"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></a>
								<!--<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>-->
								<a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a>
								<a href="https://api.whatsapp.com/send?phone=51962561466&text=Quiero%20información" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp-square fa-2x"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</nav>
		