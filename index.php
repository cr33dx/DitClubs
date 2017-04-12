<?php 
 error_reporting(E_ALL); 
?>
<?php include ( "inc/header.inc.php" ); ?>	
    <script type="text/javascript" src="js/anim_bsc.js"></script>
	<title>Ronec</title>
	<!--Home-->
	<div id="tf-home" class="text-center ">
        <div class="overlay">
            <div  class="content">
               <div id="mv1"> <p class="lead">Acche logon ka <strong>SAHARA</strong></p>
				<h1>Welcome on <strong><span class="color">C<i class="fa fa-cog fa-spin"></i>Ner</span></strong></h1></div>
                <a id="trans" class="fa fa-angle-down page-scroll"></a>	
				<div class="container">
				   <div class="row">
						<div class="col-xm-8 col-xm-offset-4">                                           
								<div class="col-md-4"></div><div class="col-md-4">
										<div class="form-group">
										   <p> 
										   <form action="conn.php" method="POST"><br>
										   <input type="text" class="form-control" name="user" placeholder="Student ID" id="trans2" style="display:none" autofocus size="1" maxlength="1" />
								            <input type="text" class="form-control" name="password" placeholder="Password" id="trans3" style="display:none" />						   
										   <input  id="sub_hdn" type="submit" name="submit" value="Sign Up!" hidefocus="true" tabindex="-1" /> 
										  </form>
										</div>
									</div>
							 </form>
						</div>
					</div>
				</div>    			
            </div>
        </div>
    </div>	
	<!--Footer--> 
   <?php include ( "inc/footer.inc.php" ); ?>
   <script language="javascript" type="text/javascript"> 
	jQuery(function($) {
    $('#trans2').on('keyup', function() {
												if (this.value.length >= this.maxLength) 
												{    var x=$(this).val();
											                 $.post("checkName.php",{ id: x });
															 var inputs = $(this).closest('form').find(':input');
														     $(this).val('');	
															 $(this).addClass('animated rubberBand');														    
                                                             inputs.eq(1).show();                                                           
															 inputs.eq(1).focus(); $(this).hide("slow");
															 										}
	                                    });
	                   });
 </script> 
   </body>
   </html>
