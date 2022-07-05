<?php 
include 'header.php';
?>

 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Manage Users</h5>

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
                          Fullname
                        </th>
                        <th >
                         Email
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Courses
                        </th>
                        <th>
                          Profile Updated
                        </th>
                        <th>
                          Created At
                        </th>
                        <th >
                          Last Update
                        </th>
                        
                        <th >
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>

<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_users WHERE access_level='user' ORDER BY user_purchases DESC");
while($courses = mysqli_fetch_array($fetch_courses))
{
?>

                      <tr>
                        <td>
                          <?php echo(htmlentities($courses['fullname']));?>
                        </td>
                        <td>
                          <?php echo (htmlentities($courses['user_email']));?>
                        </td>
                        <td>
                          <?php echo (htmlentities($courses['user_phone']));?>
                        </td>
                        <td >
                          <?php echo number_format(htmlentities($courses['user_courses']));?>
                        </td>
                         <td >
                          <?php echo (htmlentities($courses['profile_updated']));?>
                        </td>
                         
                        <td >
                         <?php echo date('D d M Y',strtotime(htmlentities($courses['created_at'])));?>
                        </td>

                        <td >
                          <?php echo date('D d M Y',strtotime(htmlentities($courses['updated_at'])));?>
                        </td>
                        <td >
                          <a class="btn btn-primary" style="cursor: pointer;"  data-toggle="modal" data-target="#exampleModal<?php echo(htmlentities($courses['id']));?>"> View Details </a>
                        </td>






<!-- Modal -->
<div     class="modal fade" id="exampleModal<?php echo(htmlentities($courses['id']));?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> <?php echo(htmlentities($courses['fullname']));?>'s Profile' </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 
 
 
<?php

$stais = htmlentities($courses['account_status']);

?>
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
        <a href="<?php echo$base_url;?>/tutor_details.php?tutor_code=<?php echo(htmlentities($courses['tutor_ids']));?>" type="button" class="btn btn-primary rounded-pill" target="_blank" >Public Profile</a>
<?php
if($stais=='suspended')
{
	 
      echo'<a href="users.php?activate_user='.htmlentities($courses['id']).'" style="text-decoration: none;"  type="button" class="btn btn-success rounded-pill">Activate</a>';

} 

elseif($stais=='active')
{
   
    echo'<a href="users.php?deactivate_user='.htmlentities($courses['id']).'" style="text-decoration: none;" type="button" class="btn btn-danger rounded-pill" >suspend</a>';
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