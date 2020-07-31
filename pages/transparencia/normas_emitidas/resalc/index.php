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
    <link rel="shortcut icon" href="../../../../../img/favicon.png" type="image/x-icon" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../../../../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../../vendor/animate/animate.min.css">
    <link rel="stylesheet" href="../../../../vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="../../../../vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../../vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../../vendor/magnific-popup/magnific-popup.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../../../../css/theme.css">
    <link rel="stylesheet" href="../../../../css/theme-elements.css">
    <link rel="stylesheet" href="../../../../css/theme-blog.css">
    <link rel="stylesheet" href="../../../../css/theme-shop.css">
    <link rel="stylesheet" href="../../../../css/videosvillasalva.css">


    <!-- Current Page CSS -->
    <link rel="stylesheet" href="../../../../vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="../../../../vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="../../../../vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="../../../../../css/skins/skin-corporate-3.css"> 

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../../../../../css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>	
    <!-- Head Libs -->
    <script src="../../vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body>
        <?php            
            $ano="0";
            $title="RESOLUCIÓN DE ALCALDÍA";
            $origen="resalc";
        ?>

        <div class="body">
            <div role="main" class="main">
                <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                    <div class="header-body">
                        <div class="header-container container">
                            <div class="header-row">
                                <div class="header-column">
                                    <div class="header-row">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img alt="Porto" width="250" height="80" data-sticky-width="82" data-sticky-height="40" src="../../../../img/logo-default.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>							
                            </div>
                        </div>
                    </div>
                </header>            
                <div class="container py-2">
                    <div class="row mt-5">
                        <div class="col">
                            <h4 class="mb-4">Contenido</h4> 
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                        <ul class="nav nav-tabs col-sm-3">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#resalc2020" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2020</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2019" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2019</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2018" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2018</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2017" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2017</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2016" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2016</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2015" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2015</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2014" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2014</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2013" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2013</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resalc2012" data-toggle="tab">RESOLUCIONES DE ALCALDIA 2012</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-pane tab-pane-navigation active" id="resalc2020">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2020";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>    
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resalc2019">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2019";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resalc2018">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2018";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resalc2017">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2017";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resalc2016">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2016";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>    
        </div>


    <!-- Vendor -->
		<script src="../../../../vendor/jquery/jquery.min.js"></script>
		<script src="../../../../vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="../../../../vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="../../../../vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="../../../../vendor/popper/umd/popper.min.js"></script>
		<script src="../../../../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../../../../vendor/common/common.min.js"></script>
		<script src="../../../../vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="../../../../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="../../../../vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="../../../../vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="../../../../vendor/isotope/jquery.isotope.min.js"></script>
		<script src="../../../../vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="../../../../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="../../../../vendor/vide/jquery.vide.min.js"></script>
		<script src="../../../../vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../../../../js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="../../../../vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="../../../../vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="../../../../js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="../../../../js/custom.js"></script>

		
		<!-- Theme Initialization Files -->
		<script src="../../../../js/theme.init.js"></script>
		<script src="../../../../js/examples/examples.portfolio.js"></script>
		<script src="../../../../js/examples/examples.carousels.js"></script>
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->      
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
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
                
         <?php
            for($i=2014;$i<2021;$i++){		
        ?>
            <script>
                // Write on keyup event of keyword input element
                ////cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json
                $(document).ready( function () {
                    $('#table<?php print_r($i) ?>').DataTable({
                        "language": {
                            "sOrder": [[ 0, "desc" ]],
                            "sUrl":"https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                            
                        }
                    });
                } );
            </script>
        <?php } ?>  
    </body>
    
</html>