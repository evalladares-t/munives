<!DOCTYPE html>
<html>
		<?php
		include '../constant/head-web.php';
        ?>	
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>	
	<body>
        <?php
            $src_modal=array(
                array(
                    "img"=>"../../img/modal/popup_cas.jpg",
                    "url"=>null
                )
            );
            $ano="0";
            include '../constant/modal-web.php';
        ?>
        <div class="body">
			<?php
    			include '../constant/header-web.php';
            ?>
            <div role="main" class="main">
            <div class="container py-2">
                    <div class="row">
                        <div class="col">
                            <hr class="solid my-5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            <div class="tabs tabs-bottom tabs-center tabs-simple">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#tabsNavigationSimple1" data-toggle="tab">Directiva laboral</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tabsNavigationSimple2" data-toggle="tab">Convocatorias</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabsNavigationSimple1">
                                        <div class="text-center">    
                                            <div class="container py-2">                                    
                                                <div class="row mt-3">
                                                    <div class="col">              
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                                                    <ul class="nav nav-tabs col-sm-3">
                                                                        <li class="nav-item active">
                                                                            <a class="nav-link" href="#tabsNavigationVertSimple1" data-toggle="tab">Directiva Laboral</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsNavigationVertSimple2" data-toggle="tab">Proceso de Inscripción</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsNavigationVertSimple3" data-toggle="tab">Formato para la Inscripción</a>
                                                                        </li>                                                                      
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="tab-pane tab-pane-navigation active mt-4" id="tabsNavigationVertSimple1">                                            
                                                                    <h4>DIRECTIVA LABORAL</h4>
                                                                    
                                                                    <p style="text-align:justify">Los postulantes deben inscribirse en el lugar indicado en la convocatoria, adjuntando lo siguiente:</p>
                                                                    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;a. Los formatos 1,2,3,A,B,C,D,E,F,G,H debidamente llenados (firmados con huella digital), que se descargan de la presente.</p>
                                                                    <ul style="text-align:justify">
                                                                        <li>
                                                                            Formato 1 - Solicitud de Postulante al Proceso de Selección.&nbsp;<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato 2 - Formato de Elección del Sistema Pensionario.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato 3 - Formato de Ficha de Registro de Datos Personales.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato A –&nbsp;Declaración Jurada Sobre vinculación con Algún(os) Funcionarios(S) o Servidores(ES) de la Municipalidad de villa el salvador.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato B – Declaración Jurada de no Poseer Antecedentes Penales Ni Policiales.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato C –&nbsp;Declaración jurada Información de Haber Prestado Servicios en Alguna Entidad de la Administración Pública.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato D –&nbsp;Declaración Jurada Dominiciliaria.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato E –&nbsp;De no contarse considerado como Deudor Alimentario Moroso.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato F – Declaración Jurada Principio de Presunción de Veracidad contemplado en el Numeral.<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato G – Declaración Jurada de Conformidad al Literal(LEy de Seguridad y Salud en el Trabajo)<br>
                                                                        </li>
                                                                        <li>
                                                                            Formato H – Declaración Jurada sobre veracidad de información proporcionada en el curriculum vitae.<br><br><br>
                                                                        </li>
                                                                    </ul>
                                                                    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;b. Currículum Vitae documentado, detallando principalmente los aspectos referidos a formación, experiencia laboral y capacitación requerida para la prestación de los servicios indicados. . Copia simple de los documentos que demuestren la formación profesional o técnica, la experiencia laboral y la capacitación adquirida, conforme a lo solicitado en el Aviso de Convocatoria.</p>
                                                                    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;c. Copia simple del Documento Nacional de Identidad (DNI) vigente.</p>
                                                                    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;d. Numero de RUC activo.</p>
                                                                    <br>
                                                                    <p style="text-align:justify">Los postulantes no deben haber sido destituidos de la Administración Pública en los últimos cinco (05) años, lo que se informa en el Formato 6; aquellos que hubieran sido despedidos por falta grave de entidades privadas, deberán informarlo en su solicitud de inscripción.  Los postulantes deben tener disponibilidad inmediata para incorporarse y cumplir con los servicios específicos que se indiquen en el Aviso de Convocatoria.</p>
                                                                    <p style="text-align:justify">Los postulantes ganadores de un proceso de selección, están obligados a presentar los documentos orinales que sustentan la información indicada en el currículum vitae presentado al proceso, y en caso de no sustentar documentadamente la información proporcionada, se les descalificará por haber presentado información falsa, con las implicancias que ello conlleva.</p>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">                                        
                                                                    <div class="col pb-2">
                                                                        <h4 class="mt-4">PROCESO DE INSCRIPCION</h4>
                                                                        <br>
                                                                        <p style="text-align:justify;">Los postulantes deben tener presente lo siguiente: </p>
                                                                        <p style="text-align:justify;">La Contratación Administrativa de Servicios (CAS) es una modalidad diferente a la Contratación Laboral Directa (regida por el Decreto Legislativo 276 y el Decreto Legislativo 728). Antes de inscribirse para participar en un proceso de selección, los postulantes deben verificar que cumplen todos los requisitos establecidos en el Aviso de Convocatoria.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">                                        
                                                                    <div class="col pb-3">
                                                                        <h4 class="pb-4 mt-4">FORMATO PARA LA INSCRIPCIÓN</h4>
                                                                        <br>
                                                                        <a href="#"><p>Descargar Formulario de Inscripción</p></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimple2">
                                        <div class="text-center">  
                                            <div class="container py-2">                                      
                                                <div class="row mt-3">
                                                    <div class="col">              
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                                                    <ul class="nav nav-tabs col-sm-3">
                                                                        <li class="nav-item active">
                                                                            <a class="nav-link" href="#tabsconvcas2020" data-toggle="tab">Convocatoria CAS - 2020</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2019" data-toggle="tab">Convocatoria CAS - 2019</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2018" data-toggle="tab">Convocatoria CAS - 2018</a>
                                                                        </li>  
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2017" data-toggle="tab">Convocatoria CAS - 2017</a>
                                                                        </li> 
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2016" data-toggle="tab">Convocatoria CAS - 2016</a>
                                                                        </li> 
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2015" data-toggle="tab">Convocatoria CAS - 2015</a>
                                                                        </li> 
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2014" data-toggle="tab">Convocatoria CAS - 2014</a>
                                                                        </li>  
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2013" data-toggle="tab">Convocatoria CAS - 2013</a>
                                                                        </li> 
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tabsconvcas2012" data-toggle="tab">Convocatoria CAS - 2012</a>
                                                                        </li>                                                                    
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="tab-pane tab-pane-navigation active mt-4" id="tabsconvcas2020">      
                                                                    <?php
                                                                        if($ano=="0"){
                                                                            $ano="2020";
                                                                            include 'tables/tab_casgen.php';
                                                                            $ano="0";
                                                                        }
                                                                    ?>                                                                    
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2019">
                                                                    <?php
                                                                        if($ano=="0"){
                                                                            $ano="2019";
                                                                            include 'tables/tab_casgen.php';
                                                                            $ano="0";
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2018">                                        
                                                                    <?php
                                                                        if($ano=="0"){
                                                                            $ano="2018";
                                                                            include 'tables/tab_casgen.php';
                                                                            $ano="0";
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2017">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2017</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2017.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2016">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2016</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2016.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2015">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2015</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2015.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2014">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2014</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2014.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2013">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2013</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2013.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane tab-pane-navigation mt-4" id="tabsconvcas2012">                                        
                                                                    <div class="row">
                                                                        <h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2012</h4>                                                                        
                                                                    </div>
                                                                    <div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
                                                                        <?php
                                                                            include 'tables/tab_cas2012.html'
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <?php
    			include '../constant/footer-web.php';
    		?>
        </div>

        
        <script>
            
            </script>
		<?php
    		include '../constant/scripts-web.php';
        ?>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
        <?php
            for($i=2012;$i<2021;$i++){		
        ?>
            <script>
                // Write on keyup event of keyword input element
                ////cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json
                $(document).ready( function () {
                    $('#table<?php print_r($i) ?>').DataTable({
                        "language": {
                            "sUrl":"//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",
                        }
                    });
                } );
            </script>
        <?php } ?>
        <script>
            $(document).ready(function() {
                $('#defaultModal').modal('toggle')
            });
		</script>
	</body>
</html>
        
