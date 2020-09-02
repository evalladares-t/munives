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

    <link rel="stylesheet" href="../../../../vendor/simple-line-icons/css/simple-line-icons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../../../../css/theme.css">
    <link rel="stylesheet" href="../../../../css/theme-elements.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>	

    </head>
    <body>
        <?php            
            $ano="0";
            $title="RESOLUCIÓN DE GERENCIA DE DESARROLLO E INCLUSION SOCIAL";
            $origen="resgdis";
            $idtipodocmun="1";
        ?>

        <div class="body">
            <div role="main" class="main">
                <?php 
                    include('../constant/header_add.php')
                ?>          
                <div class="container py-2">
                    <div class="row mt-5">
                        <div class="col">
                            <h4 class="mb-4">Contenido</h4> 
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                        <ul class="nav nav-tabs col-sm-3">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#resgdis2020" data-toggle="tab">RESOLUCIONES GDIS 2020</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2019" data-toggle="tab">RESOLUCIONES GDIS 2019</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2018" data-toggle="tab">RESOLUCIONES GDIS 2018</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2017" data-toggle="tab">RESOLUCIONES GDIS 2017</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2016" data-toggle="tab">RESOLUCIONES GDIS 2016</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2015" data-toggle="tab">RESOLUCIONES GDIS 2015</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgdis2014" data-toggle="tab">RESOLUCIONES GDIS 2014</a>													
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-pane tab-pane-navigation active" id="resgdis2020">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2020";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                    ?>                                 
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resgdis2019">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2019";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resgdis2018">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2018";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resgdis2017">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2017";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resgdis2016">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2016";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resgdis2014">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2014";
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
		<script src="../../../../vendor/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
                
         <?php
            for($i=2013;$i<2021;$i++){		
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