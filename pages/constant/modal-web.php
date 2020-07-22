<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 2500}">
            <?php
                for($i=0;$i<count($src_modal);$i++){  
            ?> 
            <div class="modal-content">                                       
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">¡Anuncios!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="<?php echo $src_modal[$i]["img"]; ?>" alt="">
                        </div>
                    </div>
                </div>                
                <div class="modal-footer">
                <?php
                    if($src_modal[$i]["url"]!=null){
                ?>
                    <button type="button" class="btn btn-light">
                        <a href="<?php echo $src_modal[$i]["url"]?>" target="_blank"> 
                            Link
                        </a>
                    </button>
                <?php
                    }
                ?>
                </div>                               
            </div>
            <?php } ?> 
        </div>
    </div>
</div>



    <!--

    <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid border-radius-0" src="img/modal/popup_licencias.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid border-radius-0" src="img/modal/popup_amnistia07_20.jpg" alt="">
                            </div>
                        </div>

    -->