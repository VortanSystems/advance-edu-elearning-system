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
                <h5 class="card-category">Your Sales History   
                
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
                        Buyer
                      </th>
                      <th>
                        Course
                      </th>
                      <th>
                        Date
                      </th>
                      <th class="text-left">
                        Amount
                      </th>
                      <th class="text-left">
                        Status
                      </th>

                         <th class="text-left">
                        Reference
                      </th>

                         
                    </thead>
                    <tbody>

                      <?php
$fetch_courses = mysqli_query($db,"SELECT  * FROM advance_purchases WHERE tutor_id='$user_ids' order by id desc");
while($row = mysqli_fetch_array($fetch_courses))
{
                      ?>
                      <tr>
                        <td>
<?php
echo(htmlentities($row['buyer_name']))."<br>"; 
echo(htmlentities($row['buyer_phone']))."<br>"; 
echo(htmlentities($row['buyer_email'])); 
?>                     </td>

                        <td>
                         <?php
$course_id = (htmlentities($row['course_id']));
?>  
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo$course_id;?>"    style="text-decoration: none;"><i class="now-ui-icons gestures_tap-01 " ></i></button>

<?php

$fetch_course = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_id='$course_id'");
$course_info = mysqli_fetch_array($fetch_course);

?>


<!-- Modal -->
<div     class="modal fade" id="exampleModal<?php echo$course_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> <?php echo(htmlentities($course_info['course_title']));?> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="card col-md-12" style="max-height: 350px; overflow: hidden;">
  <img src="<?php echo$base_url;?>/<?php echo(htmlentities($course_info['course_image']));?>" style="object-fit:cover;width:100%; height:100%;border-radius: 5px;">
</div>
 
<h3><?php echo(htmlentities($course_info['course_brief']));?> </h3>

<div class="col-md-12 card article-content"
                        style=" text-align: justify;
  text-justify: inter-word;">
<?php echo(htmlentities($course_info['course_details']));?>

  </div>
 

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>





                        </td>
                        <td>
                          <?php
echo date('D d M Y',strtotime(htmlentities($row['buying_time'])));
?>  
                        </td>
                        <td class="text-left">
                          <?php
echo number_format(htmlentities($row['purchase_amount']));
?>   
                        </td>
                        <td class="text-left">
                          <?php
$lotus = (htmlentities($row['buy_status']));
if($lotus=='pending')
{
echo "<span class='btn btn-block btn-warning'>Processing</span>";
}
elseif($lotus=='complete')

{
echo "<span class='btn btn-block btn-success'>Complete</span>";
}

  elseif($lotus=='refunded')

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
echo(htmlentities($row['wallet_reference']));
 //reference


 
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