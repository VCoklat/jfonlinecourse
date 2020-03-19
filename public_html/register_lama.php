<?php
$id=$_GET['id'];
$servername = "srv55";
$username = "u6510106_admin";
$password = "jfonline2019";
$dbname = "u6510106_data";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Testimoni Query
$queryTestimoni = "SELECT * FROM paket where id_bahasa='$id'";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	    $testimoni[] = $row;
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JF ONLINE LANGUAGE COURSE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description">
        <meta content="" name="author">
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- START CSS STYLE  -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quattrocento" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="css/popup.css" media="screen">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/color/default.css" id="theme" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
		<style>
        	#brand-image
        	{
        		height: 50px;
        		margin-left: 15px;
        	}
			
			blockquote{
				border-left:none
			}

			.quote-badge{
				background-color: rgba(0, 0, 0, 0.2);   
			}

			.quote-box{
				
				overflow: hidden;
				padding-top: 100px;
				margin-top: 25px;
				color:white;
				width: 100%;
				box-shadow: 2px 2px 2px 2px #E0E0E0;
				
			}

			.quotation-mark{				
				margin-top: -50px;
				font-weight: bold;
				font-size:20px;
				color:white;
				font-family: "Times New Roman", Georgia, Serif;
				
			}

			.quote-text{
				
				font-size: 19px;
				margin-top: -65px;
			}
		</style>
        <!--  END CSS STYLE  -->
    </head>
    <body data-spy="scroll" data-target="#header-navbar" data-offset="51">
        <!-- start main-container -->
        <div id="main-container" class="fade">
            <!-- start header -->
 		<nav id="header" class="navbar header navbar-fixed-top" role="navigation">
  			<div class="container-fluid">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                            <i class="fa fa-bars"></i>
                            <i class="fa fa-close"></i>
  					</button>

  					<a class="navbar-brand" href="http://www.techcrunch.com">
						<img id="brand-image" src="images/logo.png" alt="logo">
  					</a>
  				</div>

  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse" id="header-navbar">
  					<ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php" data-click="scroll-to-target">HOME</a></li>
                            <!--li><a data-toggle="collapse" href="index.php" data-click="scroll-to-target">TENTANG KAMI</a></li>
                            <li><a href="index.php" data-click="scroll-to-target">PROGRAM</a></li>
                            <li><a href="index.php#ourteam" data-click="scroll-to-target">TEAM</a></li>
                            <!--li><a href="#portfolio" data-click="scroll-to-target">PORTFOLIO</a></li>
                            <li><a href="index.php#client" data-click="scroll-to-target">TESTIMONI</a></li>
                            <li><a href="index.php#pricing" data-click="scroll-to-target">REGISTER</a></li-->
                            <li><a href="http://member.jfonlinecourse.com" data-click="scroll-to-target">LOGIN</a></li>
                            <!--li><a href="#blog" data-click="scroll-to-target">BLOG</a></li-->
  					</ul>

  				</div><!-- navbar collapse end -->
  			</div><!-- container-fluid end -->
  		</nav>
				<!--/.Navbar-->
            <!-- end header -->
            <!-- start home -->
            <div id="home" class="content bg home parallax1"style="height:170vh">
                <div id="pricing" class="content pricing-tables" data-scrollview="true">
                    <!-- start container -->
                    <div class="container" data-animation="true" data-animation-type="fadeInUp">
                        <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">PAKET</span> BAHASA <?php 
                        $queryTestimoni = "SELECT nama FROM master_bahasa where id='$id' LIMIT 1";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	    echo $row['nama'];
	}
                        ?></h2>
                        <div class="divider text-center">
                            <span class="outer-line"></span>
                            <span class="outer-line"></span>
                        </div>
                   
                        <!-- start pricing-table -->
                        <div class="row">
                            <?php foreach($testimoni as $i) : ?>
                            <div class="col-md-3 col-sm-3">
                               <div class="bs bs-pricing highlight" data-animation="true" data-animation-type="fadeInUp">
                                    <div class="cotent">
                                        <h3 class="category"><?= $i['nama']; ?></h3>
                                        
                                        <ul>
                                            <li><?= $i['lama']; ?> Bulan</li>
                                            <li><a href="<?= $i['link']; ?>"><?= $i['detail']; ?></a></li>
                                            <li>Rp. <?= $i['biaya']; ?>,00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                    <!-- end container -->
                </div>
            </div>
              
            <!-- end home -->
            
            <!-- start contact -->
            <div id="contactus" class="contactus content" data-scrollview="true">
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">REGISTER HERE</span></h2>
                </div>
                <!--div id="contactmap" style="width: 100%; height: 400px;"></div>
                <!-- start container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                           
                            <div class="form-container">
                                <!--form name="contact-form" id="contact-form" action="javascript:void(0);" method="post"-->
                                <form name="contact-form" id="contact-form" action="javascript:void(0)" method="post">    
                                    <div class="row">

                                        <div class="col-sm-12 text-center">
                                            <p class="successmsg">
                                                Register Berhasil. Mohon cek folder inbox/spam anda
                                            </p>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Nama *
                                                    <input type="text" name="name" id="name" style="background-color:#A9A9A9;" placeholder="John" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                 <label>Email *
                                                    <input type="email" name="email" id="email" placeholder="john@gmail.com"style="background-color:#A9A9A9;" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                 <label>HP
                                                    <input style="background-color:#A9A9A9;" type="number" placeholder="081234567890"name="phone" id="phone" >
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_bahasa" value="<?php echo $id?>">
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Paket *
                                                     <select name="paket" id="paket" style="background-color:#A9A9A9;">
                                                          <?php foreach($testimoni as $i) : ?>
  <option value="<?= $i['id']; ?>">Paket <?= $i['lama']; ?> Bulan <?= $i['nama']; ?></option>
                            <?php endforeach; ?>
  
</select> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-field">
                                                <!--label>Your Message*
                                                    <textarea name="message" id="message" required></textarea>
                                                </label-->
                                                <div class="text-center">
                                                    <input type="submit" name="register" id="register" class="btn" value="Register">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container --> 
            </div>
            <!-- end contact -->
            <!-- start aboutus -->
        
            <!-- start footer -->
            <div id="footer" class="footer">
                <div class="container">
                    <p class="social-list">
                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                    </p>
                    <br>
                    <p>
                        &copy; 2019 COPYRIGHT JFONLINE COURSE . ALL RIGHTS RESERVED
                    </p>
                </div>
            </div>
            <!-- end footer -->
            <!-- start theme-settings -->
            <div class="theme-settings">
                <a href="javascript:;" data-click="theme-settings-expand" class="theme-collapse-btn"><i class="fa fa-cog fa-spin"></i></a>
                <div class="theme-settings-content">
                    <ul class="theme-list clearfix">
                        <li><a href="javascript:void(0);" class="bg-puRp.le" data-theme="puRp.le"></a></li>
                        <li><a href="javascript:void(0);" class="bg-blue" data-theme="blue"></a></li>
                        <li><a href="javascript:void(0);" class="bg-orange" data-theme="orange"></a></li>
                        <li><a href="javascript:void(0);" class="bg-green" data-theme="green"></a></li>
                        <li class="active"><a href="javascript:void(0);" class="bg-pink" data-theme="default"></a></li>
                    </ul>
                </div>
            </div>
            <!-- end theme-settings -->
            <a href="javascript:void(0);" id="scroll-to-top"><i class="fa fa-arrow-up"></i></a>
        </div>
        <!-- end main-container -->
        <!-- START JS  -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZEvpuCCcKno-6SK9VektANgv4Q-3ckuA&libraries=places"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="js/scroll.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/map.min.js"></script>
        <script src="js/scripts.js"></script>
        <!--  END JS  -->
    </body>
</html>