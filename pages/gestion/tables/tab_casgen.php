  
    
<?php
    
    switch($ano) {
        case "2020":
            $data = file_get_contents("data/data_cas2020.json");
            $convocatorias = json_decode($data, true);   
        break;
        case "2019":
            $data = file_get_contents("data/data_cas2019.json");
            $convocatorias = json_decode($data, true);   
        break;
        case "2018":
            $data = file_get_contents("data/data_cas2018.json");
            $convocatorias = json_decode($data, true);   
        break;
        case "2017":
            $data = file_get_contents("data/data_cas2017.json");
            $convocatorias = json_decode($data, true);   
        break;
        case "2016":
            $data = file_get_contents("data/data_cas2016.json");
            $convocatorias = json_decode($data, true);   
        break;
    }
?>

    <div class="row">
        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - <?php print_r($convocatorias["ano"]) ?></h4>
        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                    <div class="simple-search input-group">
                        <input class="form-control text-1" id="search<?php print_r($convocatorias["ano"]) ?>" name="q" type="search" value="" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fa fa-search header-nav-top-icon"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table style="margin-top:5%;" class="table table-striped" id="table<?php print_r($convocatorias["ano"]) ?>">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Convocatoria
                </th>
                <th>
                    Fe de errata
                </th>
                <th>
                    Comunicado
                </th>
                <th>
                    Evaluación curricular
                </th>
                <th>
                    Resultado
                </th>             
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($convocatorias["data"]);$i++){   
            ?>
                <tr>
                    <td>
                        <?php
                            print_r($convocatorias["data"][$i]["name"]);
                            
                        ?>                        
                    </td>  
                    <td>
                        <?php
                            if($convocatorias["data"][$i]["convocatoria"]!=null){?>
                                <a href="../../resources/gestion/convocatorias-cas/<?php echo $convocatorias["ano"];?>/<?php echo $convocatorias["data"][$i]["convocatoria"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                        <?php
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td>
                        <?php
                            if(count($convocatorias["data"][$i]["fe_errata"])>0){
                                for($j=0;$j<count($convocatorias["data"][$i]["fe_errata"]);$j++){?>
                                <?php
                                    if($convocatorias["data"][$i]["fe_errata"][$j]["fe_errata_enl"]!=null){
                                ?>
                                <a href="../../resources/gestion/convocatorias-cas/<?php echo $convocatorias["ano"];?>/<?php echo $convocatorias["data"][$i]["fe_errata"][$j]["fe_errata_enl"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                            <?php }
                            else{
                                print_r("-");
                            }
                        } ?>
                        <?php
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td>
                        <?php
                            if($convocatorias["data"][$i]["comunicado"]!=null){?>
                                <a href="../../resources/gestion/convocatorias-cas/<?php echo $convocatorias["ano"];?>/<?php echo $convocatorias["data"][$i]["comunicado"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                        <?php
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td>
                        <?php
                            if($convocatorias["data"][$i]["eval_curricular"]!=null){?>
                                <a href="../../resources/gestion/convocatorias-cas/<?php echo $convocatorias["ano"];?>/<?php echo $convocatorias["data"][$i]["eval_curricular"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                        <?php
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td>
                        <?php
                            if($convocatorias["data"][$i]["resultado"]!=null){?>
                                <a href="../../resources/gestion/convocatorias-cas/<?php echo $convocatorias["ano"];?>/<?php echo $convocatorias["data"][$i]["resultado"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                        <?php
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

    