<!DOCTYPE html>
<html>

    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

        <title>Municipalidad de Distrital de Villa el Salvador</title>	

        <meta name="keywords" content="MUNICIPALIDAD, VILLA EL SALVADOR" />
        <meta name="description" content="Municipalidad Distrital de Villa el Salvador">
        <meta name="author" content="munives.gob.pe">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="vendor/animate/animate.min.css">
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">
        <link rel="stylesheet" href="css/videosvillasalva.css">


        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

        <!-- Demo CSS -->


        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/skin-corporate-3.css"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>

        <style>
            .videoIframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height:  300px !important;
                    
                    overflow: hidden;
                }
        </style>

	</head>
		
	<body>
	<?php
		//$src_modal=array("img/modal/popup_ofer_laboral.png","img/modal/popup_licencias.jpg","img/modal/popup_amnistia07_20.jpg");
		$src_modal=array(
			array(
				"img"=>"img/modal/auditoresjuveniles.png",
				"url"=>"https://apps1.contraloria.gob.pe/auditoresjuveniles/index.html"
			),
			array(
				"img"=>"img/modal/popup_ofer_laboral.png",
				"url"=>"resources/trabaja_peru/FichaInscripcionPostulante.pdf"
			),
			array(
				"img"=>"img/modal/popup_licencias.jpg",
				"url"=>null
			),
			array(
				"img"=>"img/modal/popup_amnistia07_20.jpg",
				"url"=>null
			)
		);
		include 'pages/constant/modal-web.php';
	?>
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">
					<div class="header-top header-top-default border-bottom-0 border-top-0">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">	
										<strong>"Año de la Universalización de la Salud"</strong>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="#" onClick="window.open('pages/transparencia/normas_emitidas/acucon','popup', 'width=1200px,height=700px')"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="#" onClick="window.open('pages/transparencia/normas_emitidas/resgm','popup', 'width=1200px,height=700px')"  title="Facebook"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container z-index-2">
						<div class="header-row py-2">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo header-logo-sticky-change">
										<a href="index.php">
											<img class="header-logo-sticky opacity-0" alt="Porto" width="250" height="80" data-sticky-width="100" data-sticky-height="50" data-sticky-top="100" src="img/logo-dark.png">
											<img class="header-logo-non-sticky opacity-0" alt="Porto" width="250" height="80" src="img/logo-default.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li class="d-none d-sm-inline-flex">
											<div class="header-extra-info-text">
												<label>CORREO ELECTRONICO</label>
												<strong><a href="mailto:info@munives.gob.pe">mesadepartesvirtual@munives.gob.pe</a></strong>
											</div>
										</li>
										<li>
											<div class="header-extra-info-text">
												<label>NÚMERO TELEFONO</label>
												<strong><a href="tel:013192530">(01)319-2530</a></strong>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="header-column justify-content-end " style="width:20px;">
								<div class="header-row" >
											<a href="pages/transparencia" class="text-decoration-none ">
												<img src="img/blog/portaltransparencia.png" class="img-fluid hover-effect-2 mb-3" alt="" />
											</a>
								</div>		
							</div>							
						</div>
					</div>
					<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
						<div class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-force-light-text justify-content-center py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '135px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
											<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle " href="#">
																Inicio
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
															<a class="dropdown-item dropdown-toggle" href="pages/municipalidad/">
																La Municipalidad
															</a>

														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="pages/ciudad/">
																La Ciudad
															</a>

														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="pages/servicios/">
																Servicios
															</a>

														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="pages/participacion/">
																Participación
															</a>

														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="pages/gestion/">
																Gestión
															</a>

														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="#">
																Contacto
															</a>

														</li>
													</ul>
												</nav>
											</div>
											<button class="btn header-btn-collapse-nav my-2" data-toggle="collapse" data-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">

			<!--Header-->
			<div class="slider-container light rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 3000, 'gridwidth': 1170, 'gridheight': 445, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1 bullets-color-primary', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade">
								<img src="img/slides/slide-corporate-3-2.jpg"  
									alt=""
									data-bgposition="right center"
									data-bgpositionend="center center"
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on"
									data-duration="4000"
									data-ease="Linear.easeNone"
									data-scalestart="100"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="0"
									class="rev-slidebg">
							</li>
							<li data-transition="fade">
				
								<img src="img/slides/slide-corporate-3-3.jpg"  
									alt=""
									data-bgposition="right center"
									data-bgpositionend="center center"
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on"
									data-duration="3000"
									data-ease="Linear.easeNone"
									data-scalestart="100"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="0"
									class="rev-slidebg">
							</li>
							<li data-transition="fade">
				
								<img src="img/slides/slide-corporate-3-4.jpg"  
									alt=""
									data-bgposition="right center"
									data-bgpositionend="center center"
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on"
									data-duration="3000"
									data-ease="Linear.easeNone"
									data-scalestart="100"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="0"
									class="rev-slidebg">
							</li>	
							<li data-transition="fade">
				
								<img src="img/slides/slide-corporate-3-5.jpg"  
									alt=""
									data-bgposition="right center"
									data-bgpositionend="center center"
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on"
									data-duration="3000"
									data-ease="Linear.easeNone"
									data-scalestart="100"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="0"
									class="rev-slidebg">
							</li>																						
						</ul>
					</div>
				</div>

			<!--Accesos Directos -->
				<section id="IDacceos" class="section section-height-2 bg-color-grey-scale-1  border-0 m-0">
					<?php
						include('pages/accesos_directos/index.php')
					?>
				</section>
			<!--Numeros utiles -->
				<section id="IDnumerostelefonos" class="section section-height-1 border-0 mt-0 mb-0 pt-4">
				<?php
						include 'pages/constant/numero_utilidad-web.php';
					?>
				</section>
			<!--Videos youtube -->
				<section id="IDvideos" class="section section-height-2 bg-color-grey-scale-1 m-0 border-0">
					<?php
						include 'pages/constant/actualidad-web.php';
					?>
				</section>
			<!-- Historia -->	
				<div class="container">
					<?php
						include 'pages/constant/history-web.php';
					?>
				</div>
			<!--Lineas Estratégicas -->
				<section id="IDlineasestrategicas" class="section section-height-2 border-0 m-0 pb-3  bg-primary">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h5 class="text-color-light text-color-lighttext-uppercase mb-4">LÍNEAS ESTRATÉGICAS DE GESTIÓN</h5>
							</div>
						</div>

						<div class="row pb-1">				
							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="./pages/servicios/are_verd.php">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villaverde.png" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA VERDE</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA VERDE</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>
				
							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="blog-post.html">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villaemprende.png" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA EMPRENDE</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA EMPRENDE</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>
				
							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="pages/servicios/seg_ciud.php">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villasegura.png" class="img-fluid"
													alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA SEGURA</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA SEGURA</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>

							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="pages/servicios/obras.php">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villaconstruye.png" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA CONSTRUYE</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA CONSTRUYE</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>

							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="pages/servicios/esc_dep.php">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villasaludable.png" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA SALUDABLE</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA SALUDABLE</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>

							<div class="col-sm-5 col-lg-4 mb-4 pb-1">
								<a href="blog-post.html">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="img/cardlinea/villasostenible.png" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
												<div class="thumb-info-title bg-transparent p-4">
													<!--div class="thumb-info-type bg-color-primary px-2 mb-1">VILLA SOSTENIBLE</div-->
													<div class="thumb-info-inner mt-1">
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">VILLA SOSTENIBLE</h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>
						</div>
					</div>
				</section>

			<!--Noticias -->
				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container">
						<div class="row py-5 my-5">
							<div class="col-md-6 order-2 order-md-1 text-center text-md-left appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
								<div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
										<p class="text-2 mb-0">CEO</p>
									</div>
									<div>
										<img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
										<p class="text-2 mb-0">CEO</p>
									</div>
									<div>
										<img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
										<p class="text-2 mb-0">DEVELOPER</p>
									</div>
									<div>
										<img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
										<p class="text-2 mb-0">SEO ANALYST</p>
									</div>
									<div>
										<img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
										<h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
										<p class="text-2 mb-0">DESIGNER</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
								<a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LEARN MORE</a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Dirección</h5>
							<p class="text-4 mb-0">Sector 2, Grupo 15</p>
							<p class="text-4 mb-0">Av. Revolucion S/N cruce con Av. Cesar Vallejo</p>
							<p class="text-4 mb-0">New York</p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Horario de Atención</h5>
							<p class="text-4 mb-0">Lunes-Viernes: <span class="text-color-light">8:00 am to 5:00 pm</span></p>
							<p class="text-4 mb-0">Sabado: <span class="text-color-light">9:00 am to 1:00 pm</span></p>
							<p class="text-4 mb-0">Domingo: <span class="text-color-light">Cerrado</span></p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Número de Contacto</h5>
							<p class="text-7 text-color-light font-weight-bold mb-2">(01)319-2530</p>
							
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Social Media</h5>
							<ul class="footer-social-icons social-icons m-0">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="footer-copyright footer-copyright-style-2 pb-4">
						<div class="py-2">
							<div class="row py-4">
								<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
									<p>© Copyright Municipalidad Distrital de Villa El Salvador 2020</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<script src="js/examples/examples.portfolio.js"></script>
		<script src="js/examples/examples.carousels.js"></script>

		<script>
		$(document).ready(function() {
    		$('#defaultModal').modal('toggle')
		});
		</script>
				 
		<script>
			$(document).ready(function () {

				function show_popup() {
					//$("#myid").click();
					$("#combinationFilters #accesosdirectos #todos  ").removeClass("active")
					$("#combinationFilters #accesosdirectos #todos  a").removeClass("active")

					$("#combinationFilters #accesosdirectos #menos ").addClass("active")
					$("#combinationFilters #accesosdirectos #menos a").addClass("active")					
					$("#combinationFilters #accesosdirectos #menos a").click();
				};
				setTimeout(function () { show_popup(); }, 4000);

				$(".arrow-right").bind("click", function (event) {
					event.preventDefault();
					$(".vid-list-container").stop().animate({
						scrollLeft: "+=336"
					}, 750);
				});
				$(".arrow-left").bind("click", function (event) {
					event.preventDefault();
					$(".vid-list-container").stop().animate({
						scrollLeft: "-=336"
					}, 750);
				});
			});

		</script>

	</body>
</html>
