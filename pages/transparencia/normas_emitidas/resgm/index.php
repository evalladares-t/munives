<html>  
   
    <?php 
        include('../constant/head_add.php')
    ?>
    <body>
        <?php            
            $ano="0";
            $title="RESOLUCIÓN DE GERENCIA MUNICIPAL";
            $origen="resgm";
            $idtipodocmun="4";
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
                                                <a class="nav-link" href="#resgm2020" data-toggle="tab">RESOLUCIONES GM 2020</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgm2019" data-toggle="tab">RESOLUCIONES GM 2019</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgm2018" data-toggle="tab">RESOLUCIONES GM 2018</a>													
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgm2017" data-toggle="tab">RESOLUCIONES GM 2017</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#resgm2016" data-toggle="tab">RESOLUCIONES GM 2016</a>													
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-pane tab-pane-navigation active" id="resgm2020">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2020";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>    
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resgm2019">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2019";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resgm2018">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2018";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>
                                    <div class="tab-pane tab-pane-navigation" id="resgm2017">
                                        <?php
                                            if($ano=="0"){
                                                $ano="2017";
                                                include '../tab_norm_emit_gen.php';
                                                $ano="0";
                                            }
                                        ?>  											
                                    </div>	
                                    <div class="tab-pane tab-pane-navigation" id="resgm2016">
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


        <?php
        include('../constant/scripts_add.php')
        ?> 
    </body>
    
</html>