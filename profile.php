<?php include ("inc/connect.inc.php"); ?>
<?php
 if(isset($_GET['u'])) {
	 $sid = mysqli_real_escape_string($con,$_GET['u']);
	 if(ctype_alnum($sid)){
		 $check=mysqli_query($con,"SELECT id,first_name,clg_id,prof FROM users WHERE id='$sid'");
		 if(mysqli_num_rows($check)==1) {
			 $get=mysqli_fetch_assoc($check);
			 $id=$get['id'];
			 $first=$get['first_name'];
			 $clg_id=$get['clg_id'];
			 $prof=$get['prof'];
		 }
		 else {
	         echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/phprn/index.php\">";	
			 exit();
		 }
	 }
 }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--[if IE]-->
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
         <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">	  

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title> Profile</title>
    <link href="css/stylepro.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
    <link href="img/animate.css" rel="stylesheet">
    <link id="colors" href="css/blue.css" rel="stylesheet"> 
	<style>[class^="hvr-"] {
    background:#006699;color: #FFFFFF;cursor: pointer;margin: 0.4em;padding:0px;text-decoration: none;}
.hvr-bounce-to-top {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 1s;
  transition-duration: 1s;
}
.hvr-bounce-to-top:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #006699;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
   color: black;
}
.hvr-bounce-to-top:hover, .hvr-bounce-to-top:focus, .hvr-bounce-to-top:active {
  color: black;
}
.hvr-bounce-to-top:hover:before, .hvr-bounce-to-top:focus:before, .hvr-bounce-to-top:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}</style>
<body id="document" style="overflow:hidden;">
    <div id="preloader" style="display: none;">
        <div id="status" style="display: none;"></div>
    </div>
	<nav id="tf-menu" class="navbar  navbar-default navbar-fixed-top" style="padding-top: 20px;background:black">
			<div class="container">
			   <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				  <a class="navbar-brand" href="index.php">coner</a>
				</div>

				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" >
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php" class="page-scroll hvr-bounce-to-top" >Home</a></li>
						<li><a href="cont.php" class="page-scroll hvr-bounce-to-top" >Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div> <!-- /.container-fluid -->
		</nav><!--EON -->

    <!--HOME SECTION-->
    <section id="home">
        <div bgcolor="black" class=" home-wrap overlay background text-center" id="large-header" data-animated="bounceIn" style="position:relative;width:100%;height:600px">
		   <canvas id="demo-canvas"  style=" position:absolute; top:0; left:0; z-index:0;width:100%"></canvas>
                    <h1> <?php echo $clg_id;   ?><span>HeartBreaker</span></h1>
                    <a href="" class="btn btn-home  scrol "> <span class="">239/7000</span></a>
        </div>
    </section>
    <!--END HOME SECTION-->
    <!-- SECTION ABOUT ME -->
    <section id="about-me">
        <div class="section-wrap">
            <div class="container">
                <div class="row about">
                    <div class="col-xs-12 col-md-4  text-center animated bounceIn" data-animated="bounceIn">

                        <img src="<?php echo "$prof"; ?>" alt=" " class="center-blok img-circle img-thumbnail img-responsive">
                        <div class="img-desc-about">
                            <h2 class="name">
                               <?php echo $first;   ?>
                                <span>BTech CSE-E 2 year</span>
                            </h2>
                            <a href="http://multi-themes.com/about/#"><span class="btn social"><i class="fa fa-facebook"></i></span></a>
                            <a href="http://multi-themes.com/about/#"><span class="btn social"><i class="fa fa-twitter"></i></span></a>
                            <a href="http://multi-themes.com/about/#"><span class="btn social"><i class="fa fa-linkedin-square"></i></span></a>
                            <a href="http://multi-themes.com/about/#"><span class="btn social"><i class="fa fa-behance"></i></span></a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-md-8 intro-text  animated bounceIn" data-animated="bounceIn">

                        <hr class="h2-spacer">
                        <div class="clearfix"></div>
                        <h2>ABOUT ME</h2>
                        <p>I´m web site designer aviable for freelance job. My 5 years experiences with coding web sites and applications are strong and clean. If you are hiring people like me, don't be hesitate and  contact me.</p>
                        <p>Parturient non a, phasellus curabitur, curabitur augue ac. Dui vehicula. Ut neque nunc, suscipit ante, placerat eleifend. Mauris tortor commodo, suscipit montes convallis, enim sed donec. Aliquam libero tortor, ut at, amet pulvinar id. Ac consequat vel. Ultrices molestie, rhoncus fermentum, eros sit sem</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row personal-info">
                    <div class="col-xs-12 col-md-6 animated" data-animated="bounceIn">
                        <div class="personal-title">
                            <h3>Personal information</h3>
                        </div>
                        <div class="personal-description">
                            <p><strong>Schooling: </strong>Delhi Public School, MBD</p>
                            <p><strong>Hobbies: </strong>Sporting, Reading, Listening music </p>
                            <p><strong>Aim: </strong>Buisnessman</p>
                            <p><strong>Skills: </strong> UI/UX Development, CSS,PHP, JQUERY</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 skill-bars animated" data-animated="bounceIn">
                        <div class="personal-title">
                            <h3>Public Rating</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                            <span class="progress-type">Studious</span>
                            <span class="progress-completed">60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="sr-only">70% Complete (success)</span>
                            </div>
                            <span class="progress-type">Intelligent</span>
                            <span class="progress-completed">70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                            <span class="progress-type">Cute</span>
                            <span class="progress-completed">60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                            <span class="progress-type">Friendly</span>
                            <span class="progress-completed">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./end about-wrap -->
        <div class="overlay">
            <div class="statistic">
                <div class="container">
                    <div class="row text-center counter">
                        <div class="col-xs-12 col-sm-3  box text-center">
                            <i class="fa fa-clock-o"></i><h3 class="stat-count">992</h3>
                            <p>profile views</p>
                        </div>
                        <div class="col-xs-12 col-sm-3  box text-center">
                            <i class="fa fa-code-fork"></i><h3 class="stat-count">125</h3>
                            <p>similar aims</p>
                        </div>
                        <div class="col-xs-12 col-sm-3  box text-center">
                            <i class="fa fa-coffee"></i><h3 class="stat-count">12</h3>
                            <p>dates</p>
                        </div>
                        <div class="col-xs-12 col-sm-3  box text-center">
                            <span><i class="fa fa-thumbs-o-up"></i></span><h3 class="stat-count">180</h3>
                            <p>earned likes</p>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </div>
    </section>
    <!--END ABOUT ME SECTION-->
    
     <!-- PORTFOLIO HORIZONTAL-->

    <div class="portfolio-horizontal  margin-60">


        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project1.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>iPhone 5 On The Desk</h5>
                    </div>
                </div>
                <img class="center-block img-project " alt="project" src="img/project1-300x200.jpg">

            </a>
        </div>
        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project2.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>MacBook Pro Workplace</h5>
                    </div>
                </div>
                <img class="center-block img-project " alt="project" src="img/project2-300x200.jpg">
            </a>
        </div>
        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project3.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>Light  Bulbs For The Bar</h5>
                    </div>
                </div>
                <img class="center-block img-project " alt="project" src="img/project3-300x200.jpg">
            </a>

        </div>
        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project4.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>Workspace Mouse</h5>
                    </div>
                </div>
                <img class="center-block img-project" alt="project" src="img/project4-300x200.jpg">
            </a>

        </div>
        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project5.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>Wireframes Of The Project</h5>
                    </div>
                </div>
                <img class="center-block img-project " alt="project" src="img/project5-300x200.jpg">
            </a>

        </div>
        <div class="col-lg-2 col-sm-6 project no-padding animated" data-animated="bounceIn">
            <a href="img/project6.jpg" data-imagelightbox="b">
                <div class="img-over" style="opacity: 0;">
                    <div class="project-desc">
                        <h5>Our Workspace</h5>
                    </div>
                </div>
                <img class="center-block img-project" alt="project" src="img/project6-300x200.jpg">
            </a>

        </div>
    </div>
    <!--Interest row-->
    <div class="interest-row ">
        <div class="container">
            <div class="">
                <span>My Pictures. </span>
                <a href="http://multi-themes.com/about/#" class="btn btn-white-border pull-right ">View All</a>
            </div>
        </div>
    </div>
    </section>
    <!--END PORTFOLIO SECTION-->
	
	<!--CONTACT SECTION-->
    <section id="contact">
        <div class="overlay">
            <div class="container">
                <div class="row contact">
                    <div class="col-xs-12  text-left">
                        <hr class="h2-spacer">
                        <div class="clearfix"></div>
                        <h2>Contact Me</h2>
                    </div>
                    <div class="col-md-offset-2 col-md-8">
                        <div class="col-md-12 animated" data-animated="fadeIn">
                            <!-- START CONTACT FORM -->
                            <div id="form-messages"></div>
                            <form role="form" id="ajax-contact" class="contact-form" method="post" action="http://multi-themes.com/about/mailer.php">
                                <!-- MESSAGE -->
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea rows="3" class="form textarea form-control " placeholder="Message" id="message" name="message" required=""></textarea>
                                    </div>
                                </div>
                                <!-- BUTTON SUBMIT -->
                                <div class="col-lg-12 col-xs-12">
                                    <button type="submit" class="btn btn-large send-btn">Send Message</button>
                                </div>
                            </form>
                            <!-- END CONTACT FORM -->
                        </div>
                    </div>
                </div>
            </div>



    </section>
    <!--END CONTACT SECTION-->

   <!--SECTION FOOTER-->
    <footer id="footer">
        <div class="footer">
            <div class="container">
                <div class="row ">

                    <div class="col-xs-12 text-center">
                       We're <i class="fa fa-heart"></i> still <a href="http://multi-themes.com/about/">Ass</a>.holes!
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->
      <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/TweenLite.min.js"></script>
	<script src="js/EasePack.min.js"></script>
	<script src="js/rAF.js"></script>
	<script src="js/demo-1.js"></script>
	</body>
	</html> 