  
<?php    
    $data = file_get_contents("../../data/data_".$origen.$ano.".json");
    $origen_data = json_decode($data, true);
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
                            if($origen_data["data"][$i]["recurso"]!=null && is_string($origen_data["data"][$i]["recurso"])){?>
                                <a href="../../../../resources/transparencia/normas_emitidas/<?php echo $origen;?>/<?php echo $origen_data["ano"];?>/<?php echo $origen_data["data"][$i]["recurso"];?>" target="_blank"><i class="icon-doc icons"></i></a>
                        <?php
                            }
                            if($origen_data["data"][$i]["recurso"]!=null && is_array($origen_data["data"][$i]["recurso"])){
                                for($j=0;$j<count($origen_data["data"][$i]["recurso"]);$j++){
                                    if($origen_data["data"][$i]["recurso"][$j]["recurso_enl"]!=null){?>
                                <a href="../../../../resources/transparencia/normas_emitidas/<?php echo $origen;?>/<?php echo $origen_data["ano"];?>/<?php echo $origen_data["data"][$i]["recurso"][$j]["recurso_enl"];?>" target="_blank"><i class="icon-doc icons"></i></a>

                        <?php
                                    }
                                }
                            }   
                            if($origen_data["data"][$i]["recurso"]==null){
                                print_r("-");
                            }
                        ?>   
                    </td>              
                </tr>
            <?php }?>
        </tbody>
    </table>