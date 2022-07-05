 <?php


include 'header.php';

$tutors = strip_tags($_GET['tutor']);

if($tutors=$user_ids)
 {
?>

       
         <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
     
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">  Go PRO</h5>
                 <center><p style="color: green">
            <?php

            if($msg)
            {
              echo($msg);
            }
            ?>
          </p></center>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                 

                 <?php
                 if($tutor_level=='premium')
                 {?>





                  <center> 
<br><br><br>
  <div style="width: 150px; height: 150px; border-radius: 100%; border: 1px solid green; overflow: hidden;"><b style="color: green; font-size:120px;"><i  class="now-ui-icons ui-1_check bold"></i></b></div>
<br>
    <h5 style="color: green; font-family: cambria;">
    You're Already A Pro User.
</h5>
<br>
<small>You Can Now Post Unlimited Courses</small>
</center>


<?php

                 }

                 else

                 {

if($profile_updated=='no')

{?>


<center> 
<br><br><br>
  <div style="width: 150px; height: 150px; border-radius: 100%; border: 1px solid orange; overflow: hidden;"><b style="color: orange; font-size:80px;">!</b></div>
<br>
    <h5 style="color: orange; font-family: cambria;">
    You Haven't Updated Your Profile Yet
</h5>
<br>
<a href="profile.php" class="btn btn-primary rounded-pill">Update Profile</button></a>
</center>


<?php

}
else
                 {
                 ?> 
                  


<div class="row col-md-12">

  <!--pricing cards beging-->
  <div class="card col-md-6">
    <div class="card-header">
    <center>
  
  <div style="width:84px; height: 84px; border-radius: 100%; border: 1px solid orange;font-size: 60px;color: orange;">
    

<i style="" class="now-ui-icons business_bulb-63"></i>

  </div>

</center>
</div>
    <div class="card-body">

<center><h3><b>Starter</b></h3>
  <b style="font-size: 20px;">0 UGX</b>
<ul class="navbar-nav">
  <li>Free</li>
  <li>Delayed Withdraws</li>
  <li>Second Level Support</li>
  <li>Working Days Support</li>
  <li><b>Post Only <?php echo$free_courses;?> Courses</b></li>
  <li>Slow Courses Approval</li>
  <li>No Email Notifications</li>
</ul></center>
    </div>
    <div class="card-footer"><center><a href="dashboard.php" class="btn btn-primary rounded-pill" style="text-decoration: none;">Stay Free</a></center></div>
  </div>


  <!--pricing cards ending-->



   <!--pricing cards beging-->
  <div class="card col-md-6">
    <div class="card-header">
    <center>
  
  <div style="width:84px; height: 84px; border-radius: 100%; border: 1px solid green;font-size: 60px;color: green;">
    

<i style="" class="now-ui-icons ui-1_lock-circle-open"></i>

  </div>

</center>
</div>
    <div class="card-body">

<center><h3><b>PRO</b></h3>
  <b style="font-size: 20px;"><?php echo$pro_price;?> UGX</b>
<ul class="navbar-nav">
  
  <li>Quick Withdraws</li>
  <li>Top Priority Support</li>
  <li><b>Paid Every <?php echo$pro_interval;?> Days</b></li>
  <li>24/7 Support Service</li>
  <li>Get Email Notifications</li>
  <li>Post Unlimited Courses</li>
  <li>Quick Courses Approval</li>
</ul></center>
    </div>
    <div class="card-footer"><center>


      <form action="https://wallet.naweri.com/api_request/" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" placeholder="merchant email" name="merchant" value="<?php echo$pictona_merchant;?>"> <!--Your Merchant Email Here-->

<input type="hidden" name="useremail" value="<?php echo$user_emails;?>"> 
<input type="hidden" name="username" value="<?php echo$fullname;?>"> 
<input type="hidden" name="userphone" value="<?php echo$user_phone;?>"> 
<input type="hidden" class="form-control" placeholder="itemname" name="itemname" value="Go Pro On <?php echo$app_name;?>"> 
<input type="hidden" class="form-control" placeholder="itemid" name="itemid" value="<?php echo(rand(10000,100000).rand(10000,100000).rand(10000,100000));?>" > 
<input type="hidden" class="form-control" placeholder="price" name="amount" value="<?php echo$pro_fee;?>">
<!--Don't Change Here--> 
<input type="hidden" class="form-control" name="itemdescription" value="Upgrade To A Premium Account On <?php echo$app_name;?> To Access Unlimited Features On Our Platform"> 
<input type="hidden" name="currency" value="UGX"> <!--First Check Our List Of Currencies In The wallet.naweri.com--> 
<input type="hidden" name="initdeposit"> <!--Do Not Change Here--> 
<input type="hidden" class="form-control" name="successurl" value="<?php echo$base_url;?>/success.php"> 
<input type="hidden" class="form-control" name="failedurl" value="<?php echo$base_url;?>/failed.php"> 
<button class="btn btn-success rounded-pill" style="text-decoration: none;" name="pictonapay" type="submit">
Go Pro</button> 
</form> 




  </div>


  <!--pricing cards ending-->





</div>







<?php } 

                 }
?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php

}
else
{
  header('location:dashboard.php');
}
include 'footer.php';


      ?>