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
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   <?php echo $meta_title;?>
  </title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include 'header_2.php';

?>


<?php

$course = strip_tags($_GET['enroll_id']);
$fetch_course_data = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_id='$course'");
$course_data = mysqli_fetch_array($fetch_course_data);
$tutor = htmlentities($course_data['course_tutor']);
$course_title = htmlentities($course_data['course_title']);
$course_idz = htmlentities($course_data['course_id']);
$course_price =  htmlentities($course_data['course_price']);
$course_description =  htmlentities($course_data['course_details']);






?>


<center><div  class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">We Need This Information To Connect You And The Tutor</h5>
              </div>
              <div class="card-body">
                <form  action="https://wallet.naweri.com/api_request/" method="post" >
            
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="float: left">Full Name</label>
                        <input required="true" type="text" class="form-control" name="username" placeholder="Your Name Or Alias" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="float: left">Contact Email</label>
                        <input required="true"  type="text" class="form-control" name="useremail" placeholder="Active Contact Email Address">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="float: left">Contact Phone</label>
                        <input  required="true"  type="text" name="userphone" class="form-control" placeholder="Active Contact Phone">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="float: left">Note...</label>
                        <textarea  rows="4" readonly="truw" cols="80" class="form-control" placeholder="Here can be your description" >If Tutor Does Not Respond Or Contact You Within Seven Days After Purchase, Contact Us To Refund Your Payment. Thank You.</textarea>
                      </div>
                    </div>
                  </div>

<input type="hidden"  required="true"  class="form-control" placeholder="merchant email" name="merchant" value="<?php echo($pictona_merchant);?>">
 
<input type="hidden" required="true"  class="form-control" placeholder="itemname" name="itemname" value="<?php echo($course_title);?>">
<input type="hidden" required="true"  class="form-control" placeholder="itemid" name="itemid" value="<?php echo($course_idz);?>" >
<input type="hidden" required="true"  class="form-control" placeholder="price" name="amount" value="<?php echo($course_price);?>">
<!--Don't Change Here-->
<input type="hidden" required="true"  class="form-control" name="itemdescription" value="<?php echo($course_description);?>">
<input type="hidden" required="true"  name="currency" value="UGX"> <!--First Check Our List Of Currencies In The wallet.naweri.com-->
<input type="hidden" required="true"  name="initdeposit"> <!--Do Not Change Here-->
<input type="hidden" required="true"  class="form-control" name="successurl" value="<?php echo($base_url);?>/enroll_success.php">
<input type="hidden" required="true"  class="form-control" name="failedurl" value="<?php echo($base_url);?>/failed.php">



                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <center><button type="submit" name="pictonapay" style="width: 60%" class="btn btn-primary rounded-pill">Next</button></center>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>

</center>

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