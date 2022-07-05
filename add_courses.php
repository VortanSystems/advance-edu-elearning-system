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
                <h5 class="card-category">  Add Your Courses</h5>
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


                  <form action="" method="post" enctype="multipart/form-data">
                   



                    <div class="input-group no-border">
                <input type="text" name="title"  class="form-control" maxlength="100" placeholder="Course Title...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons text_align-center"></i>
                  </div>
                </div>
              </div>



                    <div class="input-group no-border">
                <input type="number" name="price" min="4000" max="2500000" class="form-control" placeholder="Price In UGX...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons business_money-coins"></i>
                  </div>
                </div>
              </div>

                   <div class="input-group no-border">
                <label style="cursor: pointer;" class="form-control">Course Image (JPG or PNG)<input hidden="true" type="file" name="image" accept="image/*"  class="form-control" placeholder="Image (Landscape)"></label>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
                  </div>
                </div>
              </div>

              

                  <div class="input-group no-border">
                <textarea class="form-control" style="height: 150px" name="overview" placeholder="Briefly Introduce Your Course" maxlength="600"></textarea>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons text_align-left"></i>
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




                
                   <div class="input-group no-border">
                <textarea  id="summernote"  name="documents" class="form-control" style="height: 400px;" placeholder="Describe Your Course, include the curriculum and total learning hours including learners final outcomes"></textarea>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
                  </div>
                </div>
              </div>


<center><button name="add_course" type="submit" class="btn btn-primary rounded-pill"> <i class="now-ui-icons ui-1_simple-add"></i> &nbsp;&nbsp;
                    Post For Review </button>
</center>


                     
                  </form>
<?php } ?>
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