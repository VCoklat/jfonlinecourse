<?php
 require_once('check.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Teacher</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Teacher</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <!--<li class="dropdown notifications-menu">-->
          <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
          <!--    <i class="fa fa-bell-o"></i>-->
          <!--    <span class="label label-warning">10</span>-->
          <!--  </a>-->
          <!--  <ul class="dropdown-menu">-->
          <!--    <li class="header">You have 10 notifications</li>-->
          <!--    <li>-->
                <!-- inner menu: contains the actual data -->
          <!--      <ul class="menu">-->
          <!--        <li>-->
          <!--          <a href="#">-->
          <!--            <i class="fa fa-users text-aqua"></i> 5 new members joined today-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <a href="#">-->
          <!--            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the-->
          <!--            page and may cause design problems-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <a href="#">-->
          <!--            <i class="fa fa-users text-red"></i> 5 new members joined-->
          <!--          </a>-->
          <!--        </li>-->

          <!--        <li>-->
          <!--          <a href="#">-->
          <!--            <i class="fa fa-shopping-cart text-green"></i> 25 sales made-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <a href="#">-->
          <!--            <i class="fa fa-user text-red"></i> You changed your username-->
          <!--          </a>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li class="footer"><a href="#">View all</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="pages/profile/<?php echo $_SESSION["picture"]?>" class="user-image" alt="<?php echo $_SESSION["name"]?>">
              <span class="hidden-xs"><?php echo $_SESSION["name"]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="pages/profile/<?php echo $_SESSION["picture"]?>" class="img-circle" alt="<?php echo $_SESSION["name"]?>">

                <p>
                  <?php echo $_SESSION["name"]?>
                  <small>Member since Nov. 2019</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="menu.php?menu=profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="pages/profile/<?php echo $_SESSION["picture"]?>" class="img-circle" alt="<?php echo $_SESSION["name"]?>">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION["name"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <!--li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-book"></i> <span>Parameter Bahasa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <?php
               $bahasa = $db->get('master_bahasa');
					foreach ($bahasa as $paket) { 	
              ?>
            <li><a href="menu.php?menu=bahasa&id=<?php echo $paket['id']?>"><i class="fa fa-book"></i> <?php echo $paket['nama']?></a></li>  
            <?php
					}
            ?>
          </ul>
        </li>
        <!--li>
          <a href="menu.php?menu=registrant">
            <i class="fa fa-users"></i> <span>Free Member</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li-->
        <li>
          <a href="menu.php?menu=test">
            <i class="fa fa-pencil"></i> <span>Placement Test</span>
            <!--<span class="pull-right-container">-->
            <!--  <small class="label pull-right bg-green">new</small>-->
            <!--</span>-->
          </a>
        </li>
        <li>
          <a href="menu.php?menu=materi">
            <i class="fa fa-pencil"></i> <span>Materi</span>
            <!--<span class="pull-right-container">-->
            <!--  <small class="label pull-right bg-green">new</small>-->
            <!--</span>-->
          </a>
        </li>
        
        <li>
          <a href="menu.php?menu=latihan">
            <i class="fa fa-pencil"></i> <span>Exercise</span>
            <!--<span class="pull-right-container">-->
            <!--  <small class="label pull-right bg-green">new</small>-->
            <!--</span>-->
          </a>
        </li>
        <li>
          <a href="menu.php?menu=exam">
            <i class="fa fa-pencil"></i> <span>Exam</span>
            <!--<span class="pull-right-container">-->
            <!--  <small class="label pull-right bg-green">new</small>-->
            <!--</span>-->
          </a>
        </li>
        <li>
          <a href="menu.php?menu=participant">
            <i class="fa fa-users"></i> <span>Member</span>
            <!--<span class="pull-right-container">-->
            <!--  <small class="label pull-right bg-green">new</small>-->
            <!--</span>-->
          </a>
        </li>
        <li>
          <a href="menu.php?menu=profile">
            <i class="fa fa-user-circle-o"></i> <span>Profile</span>
          </a>
        </li>
        
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
