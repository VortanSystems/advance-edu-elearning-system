 <?php


include 'header.php';

$tutors = strip_tags($_GET['tutor']);

 
?>

       
         <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
     
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">  Update Profile</h5>
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
                






        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="cursor: pointer;" class="form-control"> Profile Picture
                        <input required="true" hidden="true" type="file"  name="image" class="form-control" ></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input required="true" value="<?php echo$fullname;?>" type="text" class="form-control" placeholder="Full Legal Name" name="fullname">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input required="true"  value="<?php echo$user_phone;?>" type="text" class="form-control"  placeholder="Phone Number" name="phone">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input required="true"  value="<?php echo$address;?>"  type="text" name="address" class="form-control" placeholder="Home Address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input required="true"  value="<?php echo$city;?>"  type="text" name="city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input required="true" type="text"  value="<?php echo$country;?>"  name="country" class="form-control" placeholder="Country" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input required="true" type="email"  value="<?php echo$user_emails;?>" readonly="true" name="email" class="form-control" placeholder="Email Address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Brief Bio</label>
                        <textarea required="true" rows="4" name="bio" cols="80" class="form-control" placeholder="Here can be your description"><?php echo$bio;?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <center><button type="submit" name="update_profile" class="btn btn-primary rounded-pill">Update Profile</button></center>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>

<?php
if($profile_updated=='yes')

{?>

          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <center><div style="width: 200px; height: 200px; border-radius: 100%; overflow: hidden;" class="author">
                  <a target="_blank"  href="tutor_details.php?tutor_code=<?php echo$user_ids;?>">
                    <img class="avatar border-gray" src="<?php echo$base_url;?>/<?php echo$user_pic;?>" alt="...">
                    <h5 class="title"><?php echo$fullname;?></h5>
                  </a>
                  <p class="description">
                    <?php echo$phone;?>
                  </p>
                </div>
                </center>
                <p class="description text-center">
                  <?php echo$bio;?>
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>


<?php } ?>





        </div>















              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
 
include 'footer.php';


      ?>