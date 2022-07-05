<?php 
include 'header.php';
?>

 <div class="content">
        <div class="row">
          <div class="col-md-12">
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
                        <label style="cursor: pointer;" class="form-control"> Landing Page Picture
                        <input required="true" hidden="true" type="file"  name="image" class="form-control" ></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Pro Price</label>
                        <input required="true" value="<?php echo$pro_fee;?>" type="number" class="form-control" placeholder="Price For Pro Subscription" name="pro_fee">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Pro Interval</label>
                        <input required="true"  value="<?php echo$pro_interval;?>" type="text" class="form-control"  placeholder="Subscription Interval" name="pro_interval">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Free Courses</label>
                        <input required="true"  value="<?php echo$free_courses;?>"  type="text" name="free_courses" class="form-control" placeholder="No Of Courses For Free Accounts">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Wallet Account * <small style="color: white;"> Business Account</small></label>
                        <input required="true"  value="<?php echo$pictona_merchant;?>"  type="text" name="pictona_merchant" class="form-control" placeholder="Naweri Wallet Email">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Naweri Wallet API</label>
                        <input required="true" type="text"  value="<?php echo$merchant_key;?>"  name="merchant_key" class="form-control" placeholder="Verifies Transactions" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Min Withdraw</label>
                        <input required="true" type="number"  value="<?php echo$min_withdraw;?>"  name="min_withdraw" class="form-control" placeholder="Minimum Withdraw Amount">
                      </div>
                    </div>
                  </div>


                     <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Max Withdraw</label>
                        <input required="true"  value="<?php echo$max_withdraw;?>"  type="number" name="max_withdraw" class="form-control" placeholder="Maximum Amount To Withdraw">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>System Email</label>
                        <input required="true" type="text"  value="<?php echo$sys_email;?>"  name="sys_email" class="form-control" placeholder="Also The Contact Email" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Maintenance Mode</label>
                       
<select name="maintenance_mode" class="form-control">
  <option style="background: indigo;" <?php if($maintenance_mode=='on'){echo("selected='true'");}?> value="on" class="form-control">On</option>
  <option  style="background: indigo;"  <?php if($maintenance_mode=='off'){echo("selected='true'");}?> value="off" class="form-control">Off</option>
</select>
                         
                      </div>
                    </div>
                  </div>

       <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Site Name</label>
                        <input required="true"  value="<?php echo$app_name;?>"  type="text" name="app_name" class="form-control" placeholder="System Name">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Site URL</label>
                        <input required="true" type="text"  value="<?php echo$base_url;?>"  name="base_url" class="form-control" placeholder="Website Link" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Meta Title</label>
                        <input required="true" type="text"  value="<?php echo$meta_title;?>"  name="meta_title" class="form-control" placeholder="Effects Site SEO Rank">
                      </div>
                    </div>
                  </div>


                        <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Landing Text</label>
                        <input required="true"  value="<?php echo$welcome_text;?>"  type="text" name="welcome_text" class="form-control" placeholder="Welcome Text">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Site Description</label>
                        <input required="true" type="text"  value="<?php echo$meta_description;?>"  name="meta_description" class="form-control" placeholder="Meta Description" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>SEO Keywords</label>
                        <input required="true" type="text"  value="<?php echo$meta_key_words;?>"  name="meta_key_words" class="form-control" placeholder="Meta Keywords">
                      </div>
                    </div>
                  </div>





                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Us</label>
                        <textarea  id="summernote"  required="true" rows="4" name="about_us" cols="80" class="form-control" placeholder="Describe Your Organisation, Include Terms of Use & Privacy Policy and Contact Information. You Can Also Paste HTML Here"><?php echo$about_us;?></textarea>
                      </div>
                    </div>
                  </div>





                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>FAQs</label>
                        <textarea  id="summernotea"  required="true" rows="4" name="faqs" cols="80" class="form-control" placeholder="Frequently Asked Questions That Will Save You Alot Of Time"><?php echo$faqs;?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <center><button type="submit" name="update_system" class="btn btn-primary rounded-pill">Update System</button></center>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
               
            </div>
          </div>
       
        </div>
      </div>


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   
    <script>
      $('#summernote').summernote({
        placeholder: 'Describe Your Course, include the curriculum and total learning hours including learners final outcomes',
        tabsize: 2,
        height: 400,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>   



    <script>
      $('#summernotea').summernote({
        placeholder: 'Describe Your Course, include the curriculum and total learning hours including learners final outcomes',
        tabsize: 2,
        height: 400,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>   





         <?php 
include 'footer.php';
?>