<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

include 'core/config/config.php';

if($_SESSION['user_login'] == false)
{
  header('location:logout.php');
  //echo "not working";
  //echo('--------------------------------------------------'.$_SESSION['user_login']);

}

if($maintenance_mode=='on')
{
  header("location:maintanance.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
 
 <meta name="viewport" content="width=device-width, initial-scale=1">


     <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="<?php echo $social_image;?>">
  <meta property="og:image" content="<?php echo $social_image;?>">
  <meta name="twitter:title" content="<?php echo $meta_title;?>">
  
   <meta name="keywords" content="<?php echo $meta_key_words;?>">
  <meta name="description" content="<?php echo $meta_description;?>">
 
   <!-- Favicons -->
  <link href="<?php echo $favicon;?>"  rel="shortcut icon" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $favicon;?>">
    <!-- CSRF Token -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   <?php echo $meta_title;?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        
        <a href="<?php echo $base_url;?>" class="simple-text logo-normal">
          <?php echo $app_name;?>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?php echo $base_url;?>/dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $base_url;?>/courses.php?tutor=<?php echo $user_ids;?>">
              <i class="now-ui-icons education_atom"></i>
              <p>My Courses</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $base_url;?>/purchases.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Puchases</p>
            </a>
          </li>
           
          <li>
            <a href="<?php echo $base_url;?>/profile.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>My Profile</p>
            </a>
          </li>

           <li>
            <a href="<?php echo $base_url;?>/withdraws.php">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>My Withdraws</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $base_url;?>/payments.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>My Subscriptions</p>
            </a>
          </li>
         
           <?php
           if($tutor_level=='basic')
            {?>
          <li class="active-pro">
            <a href="<?php echo $base_url;?>/upgrade.php">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Upgrade</p>
            </a>
          </li>
        <?php } ?>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <?php
           if($tutor_level=='basic')
            {?>
                 <a href="upgrade.php" class="btn btn-danger btn-block rounded-pill" style="text-decoration: none;">Upgrade</a>
               <?php } ?>
              </div>
            </form>
            <ul class="navbar-nav">
             <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Session</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo $base_url;?>/logout.php">Log Out</a>
            
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url;?>/profile.php">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->