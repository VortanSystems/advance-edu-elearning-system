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
  $mixta = "Type A Topic  And Press Enter";
}
?>

 <div class="panel-header">
  <center><h2 style="color: white; font-family: cambria"> Search <?php echo$course_count;?>+ Courses </h2></center>
  
  <form action="" method="post">
              <div class="input-group">
                <input autofocus="true" type="search" name="find_course" class="form-control text-primary" placeholder="<?php echo$mixta;?>">
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
  

 <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>

          </div>

  
<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_courses WHERE application_status='approved' && course_status='public' ORDER BY course_purchases DESC");
while($row = mysqli_fetch_array($fetch_courses))
{
?>

<div class="col-lg-4 ">
            <div  style="height: 500px" class="card card-chart">
              <div class="card-header">
                <h5 class="card-category" style="font-weight: bold; color: black; text-transform: capitalize; text-align: center;"><?php echo htmlentities($row['course_title']);?></h5>
                
                <div class="dropdown">
                 <a target="_blank" href="course_details.php?course=<?php echo htmlentities($row['course_id']);?>" style="text-decoration: none; "> <button type="button" class="btn btn-round btn-outline-primary dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                  </button></a>
                   
                </div>
              </div>
              <div class="card-body" style="margin-top: 10px;">
                <div  style="height: 250px" class="chart-area">
                  <a target="_blank" href="course_details.php?course=<?php echo htmlentities($row['course_id']);?>" style="text-decoration: none; "><img  style="object-fit:cover;width:100%; height:100%;" src="<?php echo$base_url;?>/<?php echo htmlentities($row['course_image']);?>" alt="<?php echo htmlentities($row['course_image']);?>">
                  </a>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                 <i class="now-ui-icons business_bulb-63 text-primary"></i> <a class="text-secondary" target="_blank" href="course_details.php?course=<?php echo htmlentities($row['course_id']);?>" style="text-decoration: none; "> <?php echo htmlentities($row['course_brief']);?>
                </a>
                </div>
              </div>
            </div>
          </div>




<?php } ?>
 
 

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
  font: 20px "Lato";
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