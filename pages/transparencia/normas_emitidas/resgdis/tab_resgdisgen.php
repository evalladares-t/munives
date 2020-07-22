  
<?php    
    switch($ano) {
        case "2020":
            $data = file_get_contents("data/data_resgdis2020.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2019":
            $data = file_get_contents("data/data_resgdis2019.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2018":
            $data = file_get_contents("data/data_resgdis2018.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2017":
            $data = file_get_contents("data/data_resgdis2017.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2016":
            $data = file_get_contents("data/data_resgdis2016.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2015":
            $data = file_get_contents("data/data_resgdis2015.json");
            $resgdis = json_decode($data, true);   
        break;
        case "2014":
            $data = file_get_contents("data/data_resgdis2014.json");
            $resgdis = json_decode($data, true);   
        break;
    }
?>

    <h4 style="text-align:justify; margin-right:5%;">RESOLUCIÓN DE GERENCIA DE DESARROLLO E INCLUSION SOCIAL - <?php print_r($resgdis["ano"]) ?></h4>        
    <table id="table<?php print_r($resgdis["ano"])?>" style="font-size:14px" >
        <thead>
            <tr>
                <th>
                    Resolución
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Descargar
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($resgdis["data"]);$i++){   
            ?>
                <tr>
                    <td>
                        <?php
                            print_r($resgdis["data"][$i]["name"]);                            
                        ?>                        
                    </td>  
                    <td style="text-align:justify;">
                        <?php
                            if($resgdis["data"][$i]["descripcion"]!=null){
                                echo($resgdis["data"][$i]["descripcion"]);  
                        
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td style="text-align:center;">
                        <?php
                            if($resgdis["data"][$i]["recurso"]!=null){?>
                                <a href="../../../../resources/transparencia/normas_emitidas/resgdis/<?php echo $resgdis["ano"];?>/<?php echo $resgdis["data"][$i]["recurso"];?>" target="_blank"><i class="icon-doc icons"></i></a>
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


    

    