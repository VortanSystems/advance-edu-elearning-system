<?php
include 'core/config/config.php';

?>
<!DOCTYPE html>
<html>
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

<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php include 'header_2.php';
if($msg)
{
  $mixta = $msg;
}
else
{
  $mixta = "Type A Name  And Press Enter";
}
?>
 <div class="panel-header">
  <center><h2 style="color: white; font-family: cambria"> Search <?php echo$tutorz_count;?>+ Tutors </h2></center>
  <form action="" method="post">
              <div class="input-group">
                <input autofocus="true" type="search" name="find_tutor" class="form-control text-primary" placeholder="<?php echo$mixta;?>">
                <input type="hidden" name="_tocken" value="<?php echo$tocken;?>">
                <div class="input-group-append">
                  <div type="submit" class="input-group-text">
                    <i style="color: white;" class="now-ui-icons ui-1_zoom-bold"></i><button hidden="true" type="submit" class="btn btn-nuetral border-0" style="padding: 0px; height: 1px;"></button>
                  </div>
                </div>
              </div>
            </form>


</div>
<div class="row col-md-12">
  
<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_users WHERE profile_updated='yes' && access_level='user' ORDER BY user_purchases DESC ");
while($row = mysqli_fetch_array($fetch_courses))
{
?>
<?php

if($row['account_status']=='active')
{
  ?>
   <div class="col-md-4">
            <div class="card card-user" style="height: 510px;">
              <div class="image">
                <img style="object-fit:cover;width:100%; height:100%;" src="assets/img/bg5.jpg" alt="<?php echo htmlentities($row['profile_pic']);?>">
              </div>
              <div class="card-body" style="height: 300px">
                <div class="author">
                  <a target="_blank" style="text-decoration: none;" href="tutor_details.php?tutor_code=<?php echo htmlentities($row['tutor_ids']);?>">
                    <img style="" class="avatar border-gray" src="<?php echo$base_url;?>/<?php echo htmlentities($row['profile_pic']);?>" alt="<?php echo htmlentities($row['profile_pic']);?>">
                    <h5 class="title"><?php echo htmlentities($row['fullname']);?></h5>
                  </a>
                  <p class="description">
                   <?php echo htmlentities($row['country']);?>
                  </p>
                </div>
                <p class="description text-center">
                  <?php echo htmlentities($row['bio']);?>
                </p>
              </div>
              <hr>
              <div style="vertical-align: bottom;" class="button-container">
                 
                <a style="text-decoration: none;" href="mailto:<?php echo(htmlentities($row['user_email']));?>" class="btn btn-primary btn-icon btn-round btn-lg">
                  <i style="color: white;" class="fab fa-google-plus-g"></i>
                </a>

              </div>
            </div>
          </div>



<?php } } ?>
 
 

</div>





  

</body>
</html>


<style type="text/css">
  /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}



body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("<?php echo$base_url;?>/<?php echo$landing;?>");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>


<script type="text/javascript">
  
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>