<html>  

    <?php 
        include('../constant/head_add.php')
    ?>
    <body>
        <?php            
            $ano="0";
            $title="RESOLUCIÓN DE GERENCIA DE DESARROLLO E INCLUSION SOCIAL";
            $origen="resgdis";
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

        <?php
            include('../constant/scripts_add.php')
        ?> 
    </body>
    
</html>