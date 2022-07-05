 <?php


include 'header.php';

$tutors = strip_tags($_GET['tutor']);

 

  if(isset($_GET['make_pub']))
{

  $course_id = strip_tags($_GET['make_pub']);
  //echo $course_id;
  $truxs = mysqli_query($db,"UPDATE advance_courses SET course_status='public' WHERE course_id='$course_id'");
  if($truxs)
  {
    $msg = "Course Is Now Public";
  }
}

if(isset($_GET['make_pri']))
{

  $course_id = strip_tags($_GET['make_pri']);
  $truxs = mysqli_query($db,"UPDATE advance_courses SET course_status='private' WHERE course_id='$course_id'");
  if($truxs)
  {
    $msg = "Course Is Now Private";
  }
}


?>

       
          <div class="panel-header panel-header-sm" >
      </div>
      <div class="content">
     
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Your Courses <center><b style="color: green">
            <?php

            if($msg)
            {
              echo($msg);
            }
            ?>
          </b></center></h5>
                <h4 class="card-title">
                  <a  href="add_courses.php?tutor=<?php echo $user_ids;?>" style="text-decoration: none; font-size: 16px;" >
                   <center> <button class="btn btn-primary rounded-pill">
 <i class="now-ui-icons ui-1_simple-add"></i> &nbsp;&nbsp;
                    Add Courses</button></center>
                  </a> </h4>
              </div>
              <div class="card-body">


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



                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Title
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Views
                      </th>
                      <th class="text-left">
                        Purchases
                      </th>
                      <th class="text-left">
                        Status
                      </th>

                         <th class="text-left">
                        Details
                      </th>

                         <th class="text-left">
                        Action
                      </th>
                    </thead>
                    <tbody>

                      <?php
$fetch_courses = mysqli_query($db,"SELECT  * FROM advance_courses WHERE course_tutor='$user_ids' order by id desc");
while($row = mysqli_fetch_array($fetch_courses))
{
                      ?>
                      <tr>
                        <td>
<?php
echo(htmlentities($row['course_title']));
?>                        </td>
                        <td>
                         UGX <?php
echo number_format(htmlentities($row['course_price']));
?>  
                        </td>
                        <td>
                          <?php
echo number_format(htmlentities($row['course_views']));
?>  
                        </td>
                        <td class="text-left">
                          <?php
echo number_format(htmlentities($row['course_purchases']));
?>  
                        </td>
                        <td class="text-left">
                          <?php
$lotus = (htmlentities($row['application_status']));
if($lotus=='pending')
{
echo "<span class='btn btn-block btn-warning'>Pending</span>";
}
elseif($lotus=='approved')

{
echo "<span class='btn btn-block btn-success'>Approved</span>";
}

  elseif($lotus=='declined')

  {
echo "<span class='btn btn-block btn-danger'>Declined</span>";
  }

    elseif($lotus=='review')

    {
echo "<span class='btn btn-block btn-info'>Under Review</span>";
    }
?>  
                        </td>

                         <td class="text-left">
                          <?php
$dimis = (htmlentities($row['course_id']));
$tutor_os = $user_ids;
?>  

<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo(htmlentities($row['course_id']));?>"    style="text-decoration: none;"><i class="now-ui-icons gestures_tap-01 " ></i></button>







<!-- Modal -->
<div     class="modal fade" id="exampleModal<?php echo(htmlentities($row['course_id']));?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> <?php echo(htmlentities($row['course_title']));?> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="card col-md-12" style="max-height: 350px; overflow: hidden;">
  <img src="<?php echo$base_url;?>/<?php echo(htmlentities($row['course_image']));?>" style="object-fit:cover;width:100%; height:100%;border-radius: 5px;">
</div>
 
<h3><?php echo(htmlentities($row['course_brief']));?> </h3>

<div class="col-md-12 card article-content"
                        style=" text-align: justify;
  text-justify: inter-word;">
<?php echo(htmlentities($row['course_details']));?>

  </div>
 

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




                        </td>


                         <td class="text-left">
                                <?php
$lotus = (htmlentities($row['course_status']));
if($lotus=='public')
{
echo "<a href='courses.php?make_pri=".(htmlentities($row['course_id']))."&tutor=".$tutor_os."' style='text-decoration:none;'><span class='btn  btn-success'>Make Private</span></a>";
}
elseif($lotus=='private')

{
echo "<a href='courses.php?tutor=".$tutor_os."&make_pub=".(htmlentities($row['course_id']))."' style='text-decoration:none;'><span class='btn  btn-danger'>Make Public</span></a>";
}



 
?>  
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>



<?php }  ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php

 
include 'footer.php';


      ?>