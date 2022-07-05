<?php 
include 'header.php';
?>

 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Manage Courses</h5>

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
  
<div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">



                      <tr>
                        <th>
                          Course Title
                        </th>
                        <th >
                          Course Price
                        </th>
                        <th>
                          Course Sales
                        </th>
                        <th>
                          Application Status
                        </th>
                        <th>
                          Course Views
                        </th>
                        <th >
                          Course Status
                        </th>
                        
                        <th >
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>

<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_courses ORDER BY id DESC");
while($courses = mysqli_fetch_array($fetch_courses))
{
?>

                      <tr>
                        <td>
                          <?php echo(htmlentities($courses['course_title']));?>
                        </td>
                        <td>
                          <?php echo number_format(htmlentities($courses['course_price']));?>
                        </td>
                        <td>
                          <?php echo number_format(htmlentities($courses['course_purchases']));?>
                        </td>
                        <td >
                          <?php echo(htmlentities($courses['application_status']));?>
                        </td>
                        </td>
                        <td >
                         <?php echo number_format(htmlentities($courses['course_views']));?>
                        </td>

                        <td >
                          <?php echo(htmlentities($courses['course_status']));?>
                        </td>
                        <td >
                          <a style="cursor: pointer;"  data-toggle="modal" data-target="#exampleModal<?php echo(htmlentities($courses['id']));?>"><u style="color: white;">View Details</u></a>
                        </td>






<!-- Modal -->
<div     class="modal fade" id="exampleModal<?php echo(htmlentities($courses['id']));?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> <?php echo(htmlentities($courses['course_title']));?> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="col-md-12" style="max-height: 350px; overflow: hidden;">
  <img src="<?php echo$base_url;?>/<?php echo(htmlentities($courses['course_image']));?>" style="object-fit:cover;width:100%; height:100%;border-radius: 5px;">
</div>
 
<h3><?php echo(htmlentities($courses['course_brief']));?> </h3>

<div class="col-md-12"
                        style=" text-align: justify;
  text-justify: inter-word;">
<?php echo(htmlentities($courses['course_details']));?>

  </div>
 
<?php

$stais = htmlentities($courses['application_status']);

?>
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
<?php
if($stais=='pending')
{
	echo'<a href="courses.php?approve='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-success rounded-pill" >Approve</a>';
	
      echo'<a href="courses.php?decline='.htmlentities($courses['id']).'" style="text-decoration: none;"  type="button" class="btn btn-danger rounded-pill">Decline</a>';

}
elseif($stais=='approved')
{
    echo'<a href="courses.php?review='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-primary rounded-pill" >Review</a>';
}
elseif($stais=='review')
{
	echo'<a href="courses.php?approve='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-success rounded-pill" >Approve</a>';
	
      echo'<a href="courses.php?decline='.htmlentities($courses['id']).'" style="text-decoration: none;"  type="button" class="btn btn-danger rounded-pill">Decline</a>';
}

elseif($stais=='declined')
{
    echo'<a href="courses.php?review='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-primary rounded-pill" >Review</a>';

    echo'<a href="courses.php?approve='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-success rounded-pill" >Approve</a>';
}

?>
        

    

 
        
      </div>
    </div>
  </div>
</div>







                      </tr>
<?php } ?>                       
                    </tbody>
                  </table>
                </div>
              </div>
               
            </div>
          </div>
       
        </div>
      </div>


         <?php 
include 'footer.php';
?>