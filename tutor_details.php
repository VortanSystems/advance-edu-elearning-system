<?php
include 'core/config/config.php';
$tutor = strip_tags($_GET['tutor_code']);
$tutor_fetch = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$tutor'");
$tutor_data =mysqli_fetch_array($tutor_fetch);
?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
 
 <meta name="viewport" content="width=device-width, initial-scale=1">


     <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="<?php echo($base_url);?>/<?php echo(htmlentities($tutor_data['profile_pic']));?>">
  <meta property="og:image" content="<?php echo($base_url);?>/<?php echo(htmlentities($tutor_data['profile_pic']));?>">
  <meta name="twitter:title" content="<?php echo(htmlentities($tutor_data['fullname']));?>'s Profile On <?php echo $app_name;?>">
  
   <meta name="keywords" content="<?php echo $meta_key_words;?>">
  <meta name="description" content="Enroll For <?php echo(htmlentities($tutor_data['fullname']));?>'s Courses On <?php echo $app_name;?>">
 
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

<div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title" style="text-transform: capitalize;">
                  <?php if(htmlentities($tutor_data['account_status'])=='active'){ echo(htmlentities($tutor_data['fullname']));?>'s Profile <?php } else { ?> <span class="btn btn-block btn-danger text-white">This User Is Suspended, Deal With At Your Own Risk</span> <?php } ?>
                </h5>
              </div>
              <div class="card-body">
             
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Fullname</label>
                        <input readonly="true" type="text" class="form-control" placeholder="Full Name" value="<?php echo(htmlentities($tutor_data['fullname']));?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input readonly="true" type="text" class="form-control" placeholder="Email" value="<?php echo(htmlentities($tutor_data['user_email']));?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input readonly="true" type="text" class="form-control" placeholder="Phone" value="<?php echo(htmlentities($tutor_data['user_phone']));?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input readonly="true" type="text" class="form-control" placeholder="Home Address" value="<?php echo(htmlentities($tutor_data['address']));?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input readonly="true" type="text" class="form-control" placeholder="City" value="<?php echo(htmlentities($tutor_data['city']));?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input readonly="true" type="text" class="form-control" placeholder="Country" value="<?php echo(htmlentities($tutor_data['country']));?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Sales</label>
                        <input readonly="true" type="number" class="form-control" placeholder="Sales" value="<?php echo(htmlentities($tutor_data['user_purchases']));?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="typography-line">
                  
                  <blockquote>
                    <p class="blockquote blockquote-primary">
                      For Your Financial Safety, Please Only Pay Tutors Through This Platform. We'll Not Be Held Liable For Transactions Outside Of This Platform. Don't Accept To Pay Extra Fees After Enrollment. Thank You.
                      <br>
                      <br>
                      <small>
                        <b> <?php echo$app_name;?> - Management</b>
                      </small>
                    </p>
                  </blockquote>
                </div>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo($base_url);?>/<?php echo(htmlentities($tutor_data['profile_pic']));?>" alt="<?php echo(htmlentities($tutor_data['profile_pic']));?>">
                    <h5 class="title"><?php echo(htmlentities($tutor_data['fullname']));?></h5>
                  </a>
                  <p class="description" style="text-transform: capitalize; color: indigo;">
                    <?php echo(htmlentities($tutor_data['tutor_level']));?> User
                  </p>
                </div>
                <p class="description text-center">
                  "<?php echo(htmlentities($tutor_data['bio']));?>"
                </p>
              </div>
              <hr>
               <div class="button-container">
                 
                <a style="text-decoration: none;" href="mailto:<?php echo(htmlentities($tred['user_email']));?>" class="btn btn-primary btn-icon btn-round btn-lg">
                  <i style="color: white;" class="fab fa-google-plus-g"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
 


 <center><h4 style="text-transform: capitalize; color: black;"><?php echo(htmlentities($tutor_data['fullname']));?>'s Courses</h4></center>
<div class="row col-lg-12 border-0">
  
<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_tutor='$tutor' ORDER BY course_purchases DESC");
while($row = mysqli_fetch_array($fetch_courses))
{
?>
<div class="col-lg-4 ">
            <div  style="height: 500px" class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"  style="font-weight: bold; color: black; text-transform: capitalize; text-align: center;"><?php echo htmlentities($row['course_title']);?></h5>
                
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