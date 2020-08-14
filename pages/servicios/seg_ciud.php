<!DOCTYPE html>
<html>
	<?php
		include '../constant/head-web.php';
	?>
	<body>	
		<div class="body">
			<?php
    			include '../constant/header-web.php';
			?>
			    <?php            
					$ano="0";
					$title="RESOLUCIÓN DE OFICINA GENERAL DE ADMINISTRACIÓN";
					$origen="seg_ciud";
				?>
            
                <div role="main" class="main">
					<div class="container py-2">
						<div class="row">
							<div class="col">
								<hr class="solid my-5">
								<h4 class="mb-4" style="margin-left:80px;text-align: left;">Documentación</h4>  
								<div class="text-center">  								       
									<div class="row">
										<div class="col-lg-4">
											<div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
												<ul class="nav nav-tabs col-sm-3">
													<li class="nav-item active">
														<a class="nav-link" href="#seg_ciud2020" data-toggle="tab">2020</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#seg_ciud2019" data-toggle="tab">2019</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#seg_ciud2018" data-toggle="tab">2018</a>
													</li>  
													<li class="nav-item">
														<a class="nav-link" href="#seg_ciud2017" data-toggle="tab">2017</a>
													</li> 
													<li class="nav-item">
														<a class="nav-link" href="#seg_ciud2016" data-toggle="tab">2016</a>
													</li> 
													<li class="nav-item">
														<a class="nav-link" href="#seg_ciud2015" data-toggle="tab">2015</a>
													</li>                                                                  
												</ul>
											</div>
										</div>
										<div class="col-lg-8">
											<div class="tab-pane tab-pane-navigation active mt-4" id="seg_ciud2020">      
												<?php
													if($ano=="0"){
														$ano="2020";
														include 'tables/seg_ciud/seg_ciud_gen.php';
														$ano="0";
													}
												?>                                                  
											</div>
											<div class="tab-pane tab-pane-navigation mt-4" id="seg_ciud2019">
												<?php
													if($ano=="0"){
														$ano="2019";
														include 'tables/tab_casgen.php';
														$ano="0";
													}
												?>
											</div>
											<div class="tab-pane tab-pane-navigation mt-4" id="seg_ciud2018">                                        
												<?php
													if($ano=="0"){
														$ano="2018";
														include 'tables/tab_casgen.php';
														$ano="0";
													}
												?>
											</div>
											<div class="tab-pane tab-pane-navigation mt-4" id="seg_ciud2017">                                        
											<?php
													if($ano=="0"){
														$ano="2017";
														include 'tables/tab_casgen.php';
														$ano="0";
													}
												?>
											</div>
											<div class="tab-pane tab-pane-navigation mt-4" id="seg_ciud2016">                                        
												<div class="row">
													<h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2016</h4>                                                                        
												</div>
												<div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
													<?php
														include 'tables/tab_cas2016.html'
													?>
												</div>
											</div>
											<div class="tab-pane tab-pane-navigation mt-4" id="seg_ciud2015">                                        
												<div class="row">
													<h4 style="text-align:justify; margin-right:5%;">CONVOCATORIA CAS - 2015</h4>                                                                        
												</div>
												<div class="col-lg-8" style="margin-left:18%; margin-top:4%;">
													<?php
														include 'tables/tab_cas2015.html'
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
				<?php
    			include '../constant/footer-web.php';
    			?>

		</div>
		<?php
    		include '../constant/scripts-web.php';
    	?>
		
	</body>
</html>