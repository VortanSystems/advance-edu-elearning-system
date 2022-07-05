<?php 
include 'header.php';
?>

 <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Admin Profile</h5>

              </div>
              <center><p style="color: green">
            <?php

            if($msg)
            {
              echo($msg);
            }
            ?>
          </p></center>
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
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="<?php echo$base_url;?>/admin/<?php echo$user_pic;?>" alt="<?php echo$user_pic;?>">
                      <h5 class="title"><?php echo$fullname;?></h5>
                    </a>
                    <p class="description">
                      Administration
                    </p>
                  </div>
                </p>
                <div class="card-description">
                   <?php echo$bio;?>
                </div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <center>
                    <a style="text-decoration: none;" href="tel:<?php echo$user_phone;?>" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-phone"></i>
                  </a>
                   
                  <a style="text-decoration: none;"  href="mailto:<?php echo$user_emails;?>" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </a>
                </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


         <?php 
include 'footer.php';
?>