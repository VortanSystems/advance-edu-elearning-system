<?php 
include 'header.php';
?>

      <div class="content">

      	<?php

$ct_withdraws = mysqli_query($db,"SELECT sum(amount) as amounz FROM advance_withdraws WHERE withdraw_status='pending'");
$withdraws = mysqli_fetch_assoc($ct_withdraws);
 
$pending_withdraws = number_format(htmlentities($withdraws['amounz']));

 




$cp_withdraws = mysqli_query($db,"SELECT sum(amount) as amoun FROM advance_withdraws WHERE withdraw_status='complete'");
$withdrawz = mysqli_fetch_assoc($cp_withdraws);
 
$complete_withdraws = number_format(htmlentities($withdrawz['amoun']));



$cp_withdrawu = mysqli_query($db,"SELECT sum(amount) as amou FROM advance_withdraws ");
$withdrawi = mysqli_fetch_assoc($cp_withdrawu);
 
$all_withdraws = number_format(htmlentities($withdrawi['amou']));

 


$all_user = mysqli_query($db,"select * from advance_users where access_level='user'");
$ct_all_user = mysqli_num_rows($all_user);

$sus_user = mysqli_query($db,"select * from advance_users where access_level='user' && account_status='suspended'");
$ct_sus_user = mysqli_num_rows($sus_user);


$ac_user = mysqli_query($db,"select * from advance_users where access_level='user' && profile_updated='yes'");
$ct_ac_user = mysqli_num_rows($ac_user);


$date_today = ('D d M Y');
$all_subs = mysqli_query($db,"select * from transactions");
$ct_all_subs = mysqli_num_rows($all_subs);


$active_subs = mysqli_query($db,"select * from advance_users where access_level='user' && tutor_level='premium'");
$ct_ac_subs = mysqli_num_rows($active_subs);


$expired_subs = mysqli_query($db,"select * from advance_users where access_level='user' && tutor_level='basic'");
$ct_expired_subs = mysqli_num_rows($expired_subs);



$cp_transactions = mysqli_query($db,"SELECT sum(paid_amount) as amounx FROM transactions WHERE status='complete'");
$txnz = mysqli_fetch_assoc($cp_transactions);
 
$complete_subs = number_format(htmlentities($txnz['amounx']));


$cp_sales = mysqli_query($db,"SELECT sum(purchase_amount) as trex FROM advance_purchases WHERE payment_status='complete'");
$sale_c = mysqli_fetch_assoc($cp_sales);
 
$complete_sales = number_format(htmlentities($sale_c['trex']));


$cp_refunds = mysqli_query($db,"SELECT sum(purchase_amount) as trex FROM advance_purchases WHERE payment_status='refunded'");
$sale_r= mysqli_fetch_assoc($cp_refunds);
 
$refunded_sales = number_format(htmlentities($sale_r['trex']));



$ct_keywords = mysqli_query($db,"select * from advance_searches");
$ct_keywords_s = mysqli_num_rows($ct_keywords);



$ct_courses = mysqli_query($db,"select * from advance_courses");
$ct_all_courses = mysqli_num_rows($ct_courses);



$ct_courses_pending = mysqli_query($db,"select * from advance_courses where application_status='pending'");
$ct_pending_courses = mysqli_num_rows($ct_courses_pending);



$ct_courses_declined = mysqli_query($db,"select * from advance_courses where application_status='declined'");
$ct_declined_courses = mysqli_num_rows($ct_courses_declined);



$ct_courses_private = mysqli_query($db,"select * from advance_courses where course_status='private'");
$ct_private_courses = mysqli_num_rows($ct_courses_private);


$ct_courses_review = mysqli_query($db,"select * from advance_courses where application_status='review'");
$ct_review_courses = mysqli_num_rows($ct_courses_review);




$ct_courses_approve_act = mysqli_query($db,"select * from advance_courses where application_status='approved' && course_status='public'");
$ct_priced_courses = mysqli_num_rows($ct_courses_approve_act);







?>
      
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Pending Withdraws</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$pending_withdraws;?></h3>
              </div>
               
            </div>
          </div>

           <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Complete Withdraws</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$complete_withdraws;?></h3>
              </div>
               
            </div>
          </div>
              <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Withdraws</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$all_withdraws;?></h3>
              </div>
               
            </div>
          </div>
        </div>


<div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Users</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$ct_all_user;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Suspended Users</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i>  <?php echo$ct_sus_user;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Updated Profile Users</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i>   <?php echo$ct_ac_user;?></h3>
              </div>
              
            </div>
          </div>
        </div>


      
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Lifetime Income <?php echo$ct_all_subs;?></h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i><?php echo$complete_subs;?> </h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Premium Users</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i>  <?php echo$ct_ac_subs;?> </h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Basic Users </h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> <?php echo$ct_expired_subs;?> </h3>
              </div>
              
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Sales</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$complete_sales;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Refunds</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> <?php echo$refunded_sales;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Keyword Searches</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i>  <?php echo$ct_keywords_s;?></h3>
              </div>
              
            </div>
          </div>
        </div>





        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Courses</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$ct_all_courses;?> </h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Pending Applications</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i>  <?php echo$ct_pending_courses;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Declined Courses</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i>  <?php echo$ct_declined_courses;?></h3>
              </div>
              
            </div>
          </div>
        </div>





        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Private Courses</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <?php echo$ct_private_courses;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Courses Under Review</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> <?php echo$ct_review_courses;?></h3>
              </div>
               
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Active Courses</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> <?php echo$ct_priced_courses;?></h3>
              </div>
              
            </div>
          </div>
        </div>



 


      </div>
     <?php 
include 'footer.php';
?>
