  
<?php    
    switch($ano) {
        case "2020":
            $data = file_get_contents("data/data_".$origen."2020.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2019":
            $data = file_get_contents("data/data_".$origen."2019.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2018":
            $data = file_get_contents("data/data_".$origen."2018.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2017":
            $data = file_get_contents("data/data_".$origen."2017.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2016":
            $data = file_get_contents("data/data_".$origen."2016.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2015":
            $data = file_get_contents("data/data_".$origen."2015.json");
            $origen_data = json_decode($data, true);   
        break;
        case "2014":
            $data = file_get_contents("data/data_".$origen."2014.json");
            $origen_data = json_decode($data, true);   
        break;
    }
?>

    <h4 style="text-align:justify; margin-right:5%;"><?php print_r($title) ?> - <?php print_r($origen_data["ano"]) ?></h4>        
    <table id="table<?php print_r($origen_data["ano"])?>" style="font-size:14px" >
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
                for($i=0;$i<count($origen_data["data"]);$i++){   
            ?>
                <tr>
                    <td>
                        <?php
                            print_r($origen_data["data"][$i]["name"]);                            
                        ?>                        
                    </td>  
                    <td style="text-align:justify;">
                        <?php
                            if($origen_data["data"][$i]["descripcion"]!=null){
                                echo($origen_data["data"][$i]["descripcion"]);  
                        
                            }
                            else{
                                print_r("-");
                            }
                        ?>   
                    </td>
                    <td style="text-align:center;">
                        <?php
                            if($origen_data["data"][$i]["recurso"]!=null){?>
                                <a href="../../../../resources/transparencia/normas_emitidas/<?php echo $origen;?>/<?php echo $origen_data["ano"];?>/<?php echo $origen_data["data"][$i]["recurso"];?>" target="_blank"><i class="icon-doc icons"></i></a>
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


    

    