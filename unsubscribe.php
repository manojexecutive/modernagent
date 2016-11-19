<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ModernAgent24 | Unsubscribe</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo2.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="index.html">Home</a></li>
            <!--<li class="scroll"><a href="#">Customer Process</a></li> -->
            <li class="scroll"><a href="pricing.html">Pricing</a></li>                     
           <!-- <li class="scroll"><a href="#">Landlord Database</a></li>
            <li class="scroll"><a href="#">Virtual Receptionist</a></li>-->
            <li class="scroll"><a href="#contact">Contact</a></li>
			<li class="scroll"><a href="map/admin/">Login</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
 <section id="about-us" class="parallax">
    <div class="container">
      <div class="row"  style="text-align:center;">
        <div class="col-sm-6" style="    margin-left: 25%;    text-align: center;">
  <form class="unsubcribe-form" action="" method="post" style="display:block">
         <h1 class="text-center" >Unsubscribe</h3>
		 <div class="error_message" style="display:none;background: rgba(255, 23, 23, 0.7);color: white;padding: 10px;font-size: 20px;">You are already unsubscribed or not in our list.</div>
		 <div class="success_message" style="display:none;background: rgba(0, 128, 0, 0.72); padding: 10px;font-size: 20px;">You are unsubscribed sucessfully.</div>
         <p>Enter your e-mail address below to unsubscribe.</p>
         <div class="form-group">
            <div class="input-icons">
               <input style="background:#FFF;color:#000;" class="form-control placeholder-no-fix customTextBox" type="email" autocomplete="off" placeholder="Email" value="" name="emailaddress" id="emailaddress" required />			   
			   <input type="button" value="SUBMIT" style="margin-top:20px;padding:10px;color:#000;" id="unsubscribebtn" name="unsubscribebtn" />
            </div>
         </div>
        
      </form>
             
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo2.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
   
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
	$('#unsubscribebtn').click(function(){
		
		var emailaddress = $('#emailaddress').val();
		if($.trim(emailaddress)==''){
			$('#emailaddress').css('border','2px solid red');
			return false;
		}else{
			$('#emailaddress').css('border','0px solid red');
		}
		$.ajax({
			url : "map/admin/landlord_request.php?id="+emailaddress+"&action=unsubcribe",
			method: "POST",
			success:function(data){
				if(data == 1)
				{
					$('.success_message').show('slow');					
					$('.error_message').hide();					
				}
				else
				{
					$('.success_message').hide();					
					$('.error_message').show('slow');	
				}
			}
		});
	});	
	</script>
</body>
</html>