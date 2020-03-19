<?php
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

// About Query
$queryAbout = 'SELECT * FROM parameter';
$resultAbout = mysqli_query($conn, $queryAbout);
$about = mysqli_fetch_assoc($resultAbout);


// Price Query
$queryPrice = 'SELECT * FROM price';
$resultPrice = mysqli_query($conn, $queryPrice);
$paket = [];
	while ($row = mysqli_fetch_assoc($resultPrice)) {
	$paket[] = $row;
}


// Testimoni Query
$queryTestimoni = 'SELECT * FROM testimoni';
$resultTestimoni = mysqli_query($conn, $queryTestimoni);
$testimoni = [];
	while ($row = mysqli_fetch_assoc($resultTestimoni)) {
	$testimoni[] = $row;
}

// Program Query
$queryProgram = 'SELECT * FROM program';
$resultProgram = mysqli_query($conn, $queryProgram);
$program = [];
	while ($row = mysqli_fetch_assoc($resultProgram)) {
	$program[] = $row;
}

// Team Query
$queryTeam = 'SELECT * FROM team';
$resultTeam = mysqli_query($conn, $queryTeam);
$team = [];
	while ($row = mysqli_fetch_assoc($resultTeam)) {
	$team[] = $row;
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
                            <li class="active"><a href="#home" data-click="scroll-to-target">HOME</a></li>
                            <li><a data-toggle="collapse" href="#aboutus" data-click="scroll-to-target">TENTANG KAMI</a></li>
                            <li><a href="#services" data-click="scroll-to-target">PROGRAM</a></li>
                            <li><a href="#ourteam" data-click="scroll-to-target">TEAM</a></li>
                            <!--li><a href="#portfolio" data-click="scroll-to-target">PORTFOLIO</a></li-->
                            <li><a href="#client" data-click="scroll-to-target">TESTIMONI</a></li>
                            <li><a href="#pricing" data-click="scroll-to-target">REGISTER</a></li>
                            <li><a href="http://member.jfonlinecourse.com/index.php" data-click="scroll-to-target">LOGIN</a></li>
                            <!--li><a href="#blog" data-click="scroll-to-target">BLOG</a></li-->
  					</ul>

  				</div><!-- navbar collapse end -->
  			</div><!-- container-fluid end -->
  		</nav>
				<!--/.Navbar-->
            <!-- end header -->
            <!-- start home -->
            <div id="home" class="content bg home parallax1" style="padding-top: 200px;">
                <!-- start container -->
                <div class="container banner-content">
                    <div class="row"></div>
                    <h1>JF ONLINE LANGUAGE COURSE</h1>
                    <h3>MAU BELAJAR <span class="text-color">BERBAGAI BAHASA</span> KAPAN SAJA DAN DIMANA SAJA?</h3>
                    <!--<div class="row">-->
                    <!--    <div class="col-md-2"></div>-->
                    <!--    <div class="col-md-8">-->
                    <!--        <iframe width="100%" height="315" src="https://www.youtube.com/embed/9YffrCViTVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2"></div>-->
                    <!--</div>-->
                  <br>
                    <a href="#pricing" data-click="scroll-to-target" class="btn btn-theme">REGISTER</a>
                    <a href="#aboutus" data-click="scroll-to-target" class="btn btn-outline">LEBIH LANJUT</a><br>
                </div>
                
                <!-- end container -->
                <!--a href="#aboutus" data-click="scroll-to-target">
                    <div class="button-scroll" data-scroll-nav="1"><span><i class="fa fa-angle-down"></i></span></div>
                </a-->
            </div>
              
            <!-- end home -->
            
            <!-- start aboutus -->
            <div id="aboutus" class="about" data-scrollview="true">
                <!-- start container -->
                <div class="container content" data-animation="true" data-animation-type="fadeInDown">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">TENTANG</span> KAMI</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        
                    </p>
                </div>
                <div class="about-bg content bg parallax2">
                    <div class="white_overlay_right"></div>
                    <div class="container">
                        <!-- start row -->
                        <div class="row no-padding">
                            <!-- strart col-6 -->
                            <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6 no-padding" data-animation="true" data-animation-type="fadeInLeft">
                                <!-- start about -->
                                <div class="aboutus">
                                    <h3>Latar Belakang</h3>
                                    <?php echo '<p>'.$about['latar'].'</p>'?>
                                    <div class="item-box">
                                        <i class="fa fa-anchor"></i>
                                        <div class="item-right">
                                            <h4>Misi Kami</h4>
                                            <?php echo '<p>'.$about['visi'].'</p>'?>
                                        </div>
                                    </div>	
                                    <!--div class="item-box">
                                        <i class="fa fa-support"></i>
                                        <div class="item-right">
                                            <h4>Custom Support</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vestibulum posuere augue eget ante porttitor fringilla.
                                            </p>
                                        </div>
                                    </div-->
                                </div>
                                <!-- end about -->
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!--div class="about-bg content bg parallax3">
                    <div class="white_overlay_left"></div>
                    <div class="container">
                        <!-- start row >
                        <div class="row no-padding">
                            <!-- strart col-6 >
                            <div class="col-md-6 col-sm-6 no-padding" data-animation="true" data-animation-type="fadeInLeft">
                                <!-- start about >
                                <div class="aboutus">
                                    <h3>Our Skills</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum posuere augue eget ante porttitor fringilla.
                                        Aliquam laoreet, sem eu dapibus congue, velit justo ullamcoRp.er urna,
                                        non rutrum dolor risus non sapien. Vivamus vel tincidunt quam.
                                        Donec ultrices nisl ipsum, sed elementum ex dictum nec.
                                    </p>
                                    <!-- start skills >
                                    <div class="skills">
                                        <div class="skills-name">Front End</div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 95%">
                                                <span class="progress-number">95%</span>
                                            </div>
                                        </div>
                                        <div class="skills-name">Programming</div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 80%">
                                                <span class="progress-number">80%</span>
                                            </div>
                                        </div>
                                        <div class="skills-name">Web Design</div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 90%">
                                                <span class="progress-number">90%</span>
                                            </div>
                                        </div>
                                        <div class="skills-name">Database Integration</div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar" style="width: 75%">
                                                <span class="progress-number">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end skills >
                                </div>
                                <!-- end about >
                            </div>
                            <!-- end col-6 >
                        </div>
                        <!-- end row >
                    </div>
                </div-->
            </div>
            <!-- end about -->
            <!-- start services -->
            <div id="services" class="content" data-scrollview="true">
                <div class="light-wrapper">
                    <div class="container" data-animation="true" data-animation-type="fadeInDown">
                        <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">PROGAM BAHASA YANG</span> KAMI TAWARKAN</h2>
                        <div class="divider text-center">
                            <span class="outer-line"></span>
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                            Ada 3 Program Bahasa yang Kami Tawarkan yaitu Bahasa Mandarin, Jepang dan Korea
                        </p>
                        <div class="row">
                            <!-- start service item -->
<?php foreach($program as $i) : ?>
                            <div class="col-md-4 col-sm-6 space-20" >
                                <div class="service-item-box text-center">
                                    <a href="#"><img src='/&admin/pages/parameter/<?= $i['gambar']; ?>'alt="<?= $i['title']; ?>"  style="width:100%"></a>
                                    			
                                </div>						
                            </div>
<?php endforeach; ?>
                            <!-- end service item -->
                            <!-- start service item -->
                            <!--<div class="col-md-4 col-sm-6 space-20" >-->
                            <!--    <div class="service-item-box text-center">-->
                            <!--        <a href="#"><img src="images/program/korea.jpeg"alt="Bahasa Korea"  style="width:100%"></a>			-->
                            <!--    </div>						-->
                            <!--</div> -->
                            <!-- end service item -->
                            <!-- start service item -->
                            <!--<div class="col-md-4 col-sm-6 space-20" >-->
                            <!--    <div class="service-item-box text-center">-->
                            <!--        <a href="#"><img src="images/program/mandarin.jpeg" style="width:100%" alt="Bahasa Mandarin"></a>		-->
                            <!--    </div>						-->
                            <!--</div> -->
                            <!-- end service item -->
                            
                        </div>
                        <!--end row --> 
                    </div>
                    <!-- enf container --> 
                </div>
                <!-- end light-wrapper -->
            </div>
            <!-- end services -->
            <!-- start quote -->
            <!--div id="quote" class="content bg parallax4" data-scrollview="true">
                <!-- start container >
                <div class="container" data-animation="true" data-animation-type="fadeIn">
                    <!-- start row >
                    <div class="row">
                        <!-- start col-12 >
                        <div class="col-md-12 quote">
                            <i class="fa fa-quote-left"></i> 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                            Mauris egestas dignissim sapien aliquam laoreet.
                            <i class="fa fa-quote-right"></i>
                            <small>Alice Jhonson</small>
                        </div>
                        <!-- end col-12 >
                    </div>
                    <!-- end row >
                </div>
                <!-- end container >
            </div-->
            <!-- end quote -->
            <!-- start our team -->
            <div id="ourteam" class="content" data-scrollview="true">
                <!-- start container -->
                <div class="container">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">OUR</span> TEAM</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-users" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                       Tim Kami terdiri dari guru-guru berkualitas di bidangnya masing-masing
                    </p>
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-4 -->
<?php $x = count($team);
    $a = 0;
?>
<?php foreach($team as $i) : ?>
<?php $a++ ?>
    <?php if($x == $a) : ?>
                       <div class="row">
                        <!-- start col-4 -->
                        <div class="col-md-4 col-sm-4">
                            
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                             <!--start team -->
                            <div class="ourteam">
                                <div class="image" data-animation="true" data-animation-type="rotateIn">
                                    <img src=<?= $i['gambar']; ?> alt=<?= $i['name']; ?>>
                                </div>
                                <div class="info">
                                    <h3 class="name"><?= $i['name']; ?></h3>
                                    <div class="title text-theme"><?= $i['jabatan']; ?></div>
                            
                                </div>
                            </div
                             <!--end team -->
                        </div>
                        <div class="col-md-4 col-sm-4">
                            
                        </div>
                        <!-- end col-4 -->
                    </div>
    <?php else : ?>
                        <div class="col-md-4 col-sm-4">
                            <!-- start team -->
                            <div class="ourteam">
                                <div class="image" data-animation="true" data-animation-type="rotateIn">
                                    <img src=<?= $i['gambar']; ?> alt=<?= $i['name']; ?>>
                                </div>
                                <div class="info">
                                    <h3 class="name"><?= $i['name']; ?></h3>
                                    <div class="title text-theme"><?= $i['jabatan']; ?></div>
                                </div>
                            </div>
                            <!-- end team -->
                        </div>
    <?php endif; ?>
<?php endforeach; ?>
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                        <!--<div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                        <!--    <div class="ourteam">-->
                        <!--        <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                        <!--            <img src="images/team/user2.jpg" alt="Kevina Dwi Sintia">-->
                        <!--        </div>-->
                        <!--        <div class="info">-->
                        <!--            <h3 class="name">Kevina Dwi Sintia</h3>-->
                        <!--            <div class="title text-theme">Tutor Bahasa Korea</div>-->
                                    
                        <!--        </div>-->
                        <!--    </div>-->
                            <!-- end team -->
                        <!--</div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                        <!--<div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                        <!--    <div class="ourteam">-->
                        <!--        <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                        <!--            <img src="images/team/user3.jpg" alt="Nadia Nur Maemunah">-->
                        <!--        </div>-->
                        <!--        <div class="info">-->
                        <!--            <h3 class="name">Nadia Nur Maemunah</h3>-->
                        <!--            <div class="title text-theme">Tutor Bahasa Jepang</div>-->
                            
                        <!--        </div>-->
                        <!--    </div>-->
                            <!-- end team -->
                        <!--</div>-->
                         <!--end col-4 -->
                    </div>
                    <!-- end row -->
                    <!-- start row -->
                    <!--<div class="row">-->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user1.jpg" alt="Nurul Kamilah">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Nurul Kamilah</h3>-->
                    <!--                <div class="title text-theme">Tutor Bahasa Inggris</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user2.jpg" alt="Rut Oktavia">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Rut Oktavia</h3>-->
                    <!--                <div class="title text-theme">Tutor Bahasa Mandarin</div>-->
                                    
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user3.jpg" alt="Demio Arifa">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Demio Arifa</h3>-->
                    <!--                <div class="title text-theme">Tutor Bahasa Korea</div>-->
                            
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                    <!--</div>-->
                    <!-- end row -->
                    <!-- start row -->
                    <!--<div class="row">-->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user1.jpg" alt="Dedy Van Hauten">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Dedy Van Hauten</h3>-->
                    <!--                <div class="title text-theme">Web Developer</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user2.jpg" alt="Umi Kulsum">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Umi Kulsum</h3>-->
                    <!--                <div class="title text-theme">Content Creator</div>-->
                                    
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user3.jpg" alt="Amreta Milana H">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Amreta Milana H</h3>-->
                    <!--                <div class="title text-theme">Tutor Bahasa Mandarin</div>-->
                            
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                        <!--</div>-->
                        <!-- end col-4 -->
                    </div>
                    <!-- end row -->
                    
                    <!-- start row -->
                    <!--<div class="row">-->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                            <!--div class="ourteam">
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user1.jpg" alt="Dedy Van Hauten">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Dedy Van Hauten</h3>-->
                    <!--                <div class="title text-theme">Web Developer</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                        <!--<div class="col-md-4 col-sm-4">-->
                            <!-- start team -->
                        <!--    <div class="ourteam">-->
                        <!--        <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                        <!--            <img src="images/team/user2.jpg" alt="Umi Kulsum">-->
                        <!--        </div>-->
                        <!--        <div class="info">-->
                        <!--            <h3 class="name">Julban Buyung Masloman</h3>-->
                        <!--            <div class="title text-theme">Digital Marketing</div>-->
                                    
                        <!--        </div>-->
                        <!--    </div>-->
                            <!-- end team -->
                        <!--</div>-->
                        <!-- end col-4 -->
                        <!-- start col-4 -->
                    <!--    <div class="col-md-4 col-sm-4">-->
                             <!--start team -->
                    <!--        <div class="ourteam">-->
                    <!--            <div class="image" data-animation="true" data-animation-type="rotateIn">-->
                    <!--                <img src="images/team/user3.jpg" alt="Amreta Milana H">-->
                    <!--            </div>-->
                    <!--            <div class="info">-->
                    <!--                <h3 class="name">Amreta Milana H</h3>-->
                    <!--                <div class="title text-theme">Tutor Bahasa Mandarin</div>-->
                            
                    <!--            </div>-->
                    <!--        </div-->
                             <!--end team -->
                    <!--    </div>-->
                        <!-- end col-4 -->
                    <!--</div>-->
                    <!-- end row -->
                    
                </div>
                <!-- end container -->
            </div>
            <!-- end our team -->
            <!-- start counters -->
            <div id="counters" class="content bg parallax5" data-scrollview="true">
                <!-- start container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-user"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="550" >550</div>
                                <div class="title">Total Murid</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-shopping-bag"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="850">850</div>
                                <div class="title">Murid Sesi Ini</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-clock-o"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="1605">1605</div>
                                <div class="title">Murid Lulus</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- start col-3 -->
                        <!--div class="col-md-3 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-trophy"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="40">40</div>
                                <div class="title">Award Win</div>
                            </div>
                        </div-->
                        <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end counters -->
            <!-- start portfolio -->
            <!--div id="portfolio" class="portfolio content" data-scrollview="true">
                <!-- start container >
                <div class="container">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">OUR</span> PORTFOLIO</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-image" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br>
                        sed bibendum tuRp.is luctus eget
                    </p>
                    <!-- start row >
                    <div class="row">
                        <div class="portfolio-filter">
                            <button class="filter-button" data-filter="all">All</button>
                            <button class="filter-button" data-filter="frontend">Front End</button>
                            <button class="filter-button" data-filter="programming">Programming</button>
                            <button class="filter-button" data-filter="webdesign">Web Design</button>
                            <button class="filter-button" data-filter="databaseintegration">Database Integration</button>
                        </div>
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter frontend">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio1.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio1.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter programming">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio2.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio2.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter webdesign">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio3.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio3.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter databaseintegration">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio4.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio4.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter frontend databaseintegration">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio5.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio5.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter webdesign frontend">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio6.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio6.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter frontend databaseintegration">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio7.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio7.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter databaseintegration">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio8.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio8.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                        <!-- start portfolio item >
                        <div class="portfolio_item col-lg-4 col-md-4 col-sm-6 col-xs-12 filter webdesign">
                            <img class="img-responsive" alt="portfolio" src="images/portfolio/portfolio9.jpg" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a class="popup-img" href="images/portfolio/portfolio9.jpg"><i class="fa fa-search"></i></a>
                                        <h3>Lorem ipsum</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end portfolio item >
                    </div>
                    <!-- end row >
                </div>
                <!-- end portfolio >
            </div>
            <!-- end portfolio -->
            
            
            <!-- start testimonials -->
            <div id="client" class="client content" data-scrollview="true">
                <!-- start container -->
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color"></span> TESTIMONIALS</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                    </p>
                </div>
                <!-- end containter -->
                <div class="content bg parallax6" data-scrollview="true">
                    <div class="container">
                        <!-- start carousel -->
                        <div id="testimonials" class="carousel testimonials slide" data-ride="carousel">
                            <!-- start carousel-inner -->
                            <div class="carousel-inner text-center">
                                <!-- start item -->
<?php foreach($testimoni as $i) : ?>
    <?php if($i["id"] == 1) : ?>
                                <div class="item active">
                                    
                                    <image src="&admin/pages/parameter/<?= $i['gambar']; ?>" style="width: 20%; display: inline-block" />
                                    
                                </div>
    <?php else : ?>
                                <div class="item">
                                    <image src="&admin/pages/parameter/<?= $i['gambar']; ?>" style="width: 20%; display: inline-block" />
                                </div>
    <?php endif; ?>
<?php endforeach; ?>
                                <!-- end item -->
                                <!-- start item -->
<!--                                <div class="item">-->
<!--                                    <blockquote>-->
<!--                                        <p>-->
<!--                                            <i class="fa fa-quote-left"></i>-->
<!--                                            disini kalau ada materi yang tidak mengerti akan benar-benar dijelaskan. Karena belajar disini jadi bisa baca huruf hangeul. -->
<!--Oh iya, terima kasih atas pelajarannya. Maaf tugas nya belum bisa ngumpulin tugas-tugasnya.-->
<!--                                            <i class="fa fa-quote-right"></i>-->
<!--                                        </p>-->
<!--                                    </blockquote>-->
<!--                                    <div class="name">Artha, Kelas: Basic Korea Bulan Februari</div>-->
<!--                                </div>-->
                                <!-- end item -->
                               
                            </div>
                            <!-- end carousel-inner -->
                            <!-- start carousel-indicators -->
                            <ol class="carousel-indicators">
                                <?php foreach($testimoni as $i) : ?>
                                <li data-target="#testimonials" data-slide-to="<?php echo $i['id']-1?>" class="active"></li>
                         <?php
                         endforeach; 
                         ?>
                            </ol>
                            <!-- end carousel-indicators -->
                        </div>
                        <!-- end carousel -->
                    </div>
                </div>
            </div>
            <!-- end testimonials -->
            <!-- start pricing -->
            <div id="pricing" class="content pricing-tables" data-scrollview="true">
                <!-- start container -->
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">OUR</span> PAKET</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-dollar" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        
                    </p>
                    <!-- start pricing-table -->
                    <div class="row">
<?php foreach($paket as $i) : ?>
    <?php if($i["id"] == 2 || $i["id"] == 5 ) { ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="bs bs-pricing highlight" data-animation="true" data-animation-type="fadeInUp">
                                <div class="cotent">
                                    <h3 class="category"><?= $i['paket']; ?></h3></h3>
                                    <ul>
                                        <li>1 bulan - Basic Course - 100rb</li>
                                        <li>2 bulan - Beginner Course - 330rb</li>
                                        <li>2 bulan - Intermediate Course - 530rb</li>
                                        <li>3 bulan - Super Intensive Course - 330rb</li>
                                    </ul>
                                    <a href="quiz/index.php?id=<?php echo $i['id']?>" class="btn btn-white">Register</a>
                                </div>
                            </div>
                        </div>
    <?php } else { ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="bs bs-pricing" data-animation="true" data-animation-type="fadeInDown">
                                <div class="cotent">
                                    <h3 class="category"><?= $i['paket'];?></h3>
                                    
                                    <ul>
                                        <li>1 bulan - Basic Course - 100rb</li>
                                        <li>2 bulan - Beginner Course - 330rb</li>
                                        <li>2 bulan - Intermediate Course - 530rb</li>
                                        <li>3 bulan - Super Intensive Course - 330rb</li>
                                    </ul>
                                   <a href="register.php?id=<?php echo $i['id']?>" class="btn btn-white">Register</a>
                                </div>
                            </div>
                        </div>

<?php } endforeach; ?>
                    </div>
                    
                        <!--<div class="col-md-4 col-sm-4">-->
                        <!--    <div class="bs bs-pricing highlight" data-animation="true" data-animation-type="fadeInUp">-->
                        <!--        <div class="cotent">-->
                        <!--            <h3 class="category">Paket B</h3>-->
                        <!--            <div class="bs-caption"><small>Rp.</small>300.000</div>-->
                        <!--            <ul>-->
                        <!--                <li><b>1</b> Bulan</li>-->
                        <!--                <li>Beginner Korean Course</li>-->
                        <!--            </ul>-->
                        <!--            <a href="#0" class="btn btn-white">Buy Now</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-4 col-sm-4">-->
                        <!--    <div class="bs bs-pricing" data-animation="true" data-animation-type="fadeInDown">-->
                        <!--        <div class="cotent">-->
                        <!--            <h3 class="category">Paket C</h3>-->
                        <!--            <div class="bs-caption"><small>Rp.</small>500.000</div>-->
                        <!--            <ul>-->
                        <!--                <li><b>2</b> Bulan</li>-->
                        <!--                <li>Intermediate Korean Course</li>-->
                        <!--            </ul>-->
                        <!--            <a href="#0" class="btn btn-action">Buy Now</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    <!--</div>-->
					<!--<div class="row">-->
     <!--                   <div class="col-md-4 col-sm-4">-->
     <!--                       <div class="bs bs-pricing" data-animation="true" data-animation-type="fadeInDown">-->
     <!--                           <div class="cotent">-->
     <!--                               <h3 class="category">Paket D</h3>-->
     <!--                               <div class="bs-caption"><small>Rp.</small>700.000</div>-->
     <!--                               <ul>-->
					<!--					<li><b>2</b> Bulan</li>-->
     <!--                                   <li>Advanced Korean Course</li>-->
     <!--                               </ul>-->
     <!--                               <a href="#" class="btn btn-action">Buy Now</a>-->
     <!--                           </div>-->
     <!--                       </div>-->
     <!--                   </div>-->
     <!--                   <div class="col-md-4 col-sm-4">-->
     <!--                       <div class="bs bs-pricing highlight" data-animation="true" data-animation-type="fadeInUp">-->
     <!--                           <div class="cotent">-->
     <!--                               <h3 class="category">Paket E</h3>-->
     <!--                               <div class="bs-caption"><small>Rp.</small>1.250.000</div>-->
     <!--                               <ul>-->
     <!--                                   <li><b>3</b> Bulan</li>-->
     <!--                                   <li>Super Intensive</li>-->
     <!--                               </ul>-->
     <!--                               <a href="#0" class="btn btn-white">Buy Now</a>-->
     <!--                           </div>-->
     <!--                       </div>-->
     <!--                   </div>-->
     <!--                   <div class="col-md-4 col-sm-4">-->
     <!--                       <div class="bs bs-pricing" data-animation="true" data-animation-type="fadeInDown">-->
     <!--                           <div class="cotent">-->
     <!--                               <h3 class="category">Paket F</h3>-->
     <!--                               <div class="bs-caption"><small>Rp.</small>1.000.000</div>-->
     <!--                               <ul>-->
     <!--                                   <li><b>6</b> Bulan</li>-->
     <!--                                   <li>bulan Full Korean Course</li>-->
     <!--                               </ul>-->
     <!--                               <a href="#0" class="btn btn-action">Buy Now</a>-->
     <!--                           </div>-->
     <!--                       </div>-->
     <!--                   </div>-->
     <!--               </div>-->
					<!--div class="row">
					<div class="col-md-12 col-sm-12">
						<blockquote class="quote-box highlight">
						  <p class="quote-text">
							MAU REQUEST 1ON1 JG BISA, TAPI NAMBAH HARGA 25RB YAA...JD KL MISALKAN MAU MILIH PAKET BASIC 1ON1 HARGANYA JD 125RB
						  </p>
						  <hr>
						</blockquote>
					</div>
					</div-->
                </div>
                <!-- end container -->
            </div>
            <!-- end pricing -->
            <!-- start blogs -->
            <!--div id="blog" class="content" data-scrollview="true">
                <!-- start container >
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">BLOG</span> POSTS</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-comment" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br>
                        sed bibendum tuRp.is luctus eget
                    </p>
                    <!-- start row >
                    <div class="row">
                        <div id="blog_posts" class="blog_posts carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog1.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog2.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog3.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog4.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog5.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog6.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog7.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog8.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog9.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- start carousel-indicators >
                            <ol class="carousel-indicators">
                                <li data-target="#blog_posts" data-slide-to="0" class="active"></li>
                                <li data-target="#blog_posts" data-slide-to="1" class=""></li>
                                <li data-target="#blog_posts" data-slide-to="2" class=""></li>
                            </ol>
                            <!-- end carousel-indicators >
                        </div>
                    </div>
                    <!-- end row >
                </div>
                <!-- end container >
            </div-->
            <!-- end blogs -->
                        
            <!-- start contact -->
            <div id="contactus" class="contactus content" data-scrollview="true">
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">LOGIN</span></h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                       
                    </p>
                </div>
                <!--div id="contactmap" style="width: 100%; height: 400px;"></div>
                <!-- start container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <ul class="contact-info list-inline text-center">
                                <!--li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Moonshine St. 14/05 Light City
                                    </p>
                                </li-->
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p>
                                        <a href="mailto:info@jfonlie_course.com" class="nocolor">info@jfonline_course.com</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>
                                        00 (123) 456 78 90
                                    </p>
                                </li>
                            </ul>
                            <div class="form-container">
                                <!--form name="contact-form" id="contact-form" action="javascript:void(0);" method="post"-->
                                <form name="contact-form" id="contact-form" action="check_login.php" method="post">    
                                    <div class="row">

                                        <div class="col-sm-12 text-center">
                                            <p class="successmsg">
                                                Login Berhasil.
                                            </p>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Email *
                                                    <input type="email" name="name" id="name" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                
                                         <label>Password *
                                                    <input type="password" name="password" id="password" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-field">
                                                <!--label>Your Message*
                                                    <textarea name="message" id="message" required></textarea>
                                                </label-->
                                                <div class="text-center">
                                                    <input type="submit" name="submit_contact" id="submit_contact" class="btn" value="Login">
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