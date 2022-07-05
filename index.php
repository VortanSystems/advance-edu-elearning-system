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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include 'header_2.php';

?>


<div class="bgimg-1">
  <div class="caption">
    <span class="border"  style="text-transform: uppercase;"><?php echo($app_name);?></span><br>
    <span class="border" style="text-transform: capitalize;"><?php echo($welcome_text);?></span>
  </div>
</div>
<div class="topnav" >
  <a href="https://naweriindustries.business.site" >Construct &copy 2022 By Naweri Industries</a>
  
</div>

</body>
</html>


<style type="text/css">
  /* Add a black background color to the top navigation */
.topnav {
  background-color: black;
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
@media screen and (max-width: 600px) {
.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 18px;
  letter-spacing: 10px;
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
  font: 400 15px/1.8 "Lato";
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 1;
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
  top: 65%;
  width: 100%;
  text-align: center;
  color: white;
}

.caption span.border {
  background-color: black;
  color: white;
  padding: 20px;
  font-size: 30px;
  letter-spacing: 3px;
  border-radius: 5px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>


