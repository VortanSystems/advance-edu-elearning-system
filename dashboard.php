 <?php


include 'header.php';
?>

       <div class="panel-header panel-header-sm">
      </div>
      
      <div class="content">
     
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"> Account Balance</h5>
                <h4 class="card-title"><?php echo number_format($user_balance);?> UGX </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="border-top:1px solid red">
                 <a style="text-decoration: none;" class="text-primary" href="withdraws.php">  Withdraw</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Your Total Courses</h5>
                <h4 class="card-title"> <?php echo number_format($tutor_courses);?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="border-top:1px solid red">
                 <a style="text-decoration: none;" class="text-primary" href="<?php echo $base_url;?>/courses.php?tutor=<?php echo $user_ids;?>">  Add More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Your Total Sales</h5>
                <h4 class="card-title"> <?php echo number_format($user_sales);?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="border-top:1px solid red">
                 <a style="text-decoration: none;" class="text-primary" href="<?php echo $base_url;?>/purchases.php">  View All </a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <?php


include 'footer.php';


      ?>