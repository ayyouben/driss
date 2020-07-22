<?php session_start();
if($_SESSION['login_user']==null){
  header('location: index.php');
}
?>

<?php include_once('header.php') ?>
  
  
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white"  data-image="./assets/img/sidebar-1.jpg" >
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
<?php include_once('sidebar.php');?>
    </div>
    <div class="main-panel" >
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

          <form class="navbar-form">
                  <span class="bmd-form-group"><div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                  </button>
                  </div></span>
                  </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                    Stats
                    </p>
                    </a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownnotif" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="material-icons">notifications_active</span><span class="notification">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right "aria-labelledby="navbarDropdownnotif">
                    <a class="dropdown-item" href="#">Profile dropdown-menu dropdown-menu-right</a>
                    <a class="dropdown-item" href="#">Settings dropdown-menu dropdown-menu-right</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons regular">person</i>
                    <p class="d-lg-none d-md-block">
                    Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mr-2 "aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#"><i class="material-icons">face</i>&nbsp;&nbsp;Profile</a>
                    <a class="dropdown-item" href="#"><i class="material-icons">build</i>&nbsp;&nbsp;Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="material-icons">logout</i>&nbsp;&nbsp;Déconnexion</a>
                    </div>
                  </li>
         
             

              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
         <div class="content">
        <div class="container-fluid" id="content" >
          <!-- your content here -->
        <?php include_once('admin/dasboard.php');?>


  
</div>
     
        </div>
          
        </div>
      </div>
<?php include_once('footer.php') ?>