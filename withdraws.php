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
                <h5 class="card-category">My Withdraws    <center><b style="color: green">
            <?php

            if($msg)
            {
              echo($msg);
            }
            ?>
          </b></center></h5>
          <?php if($user_balance>0) {?>
                 <h4 class="card-title">
                  <a  data-toggle="modal" data-target="#exampleModal" style="text-decoration: none; font-size: 16px;" >
                   <center> <button class="btn btn-primary rounded-pill">
 <i class="now-ui-icons ui-1_simple-add"></i> &nbsp;&nbsp;
                    Add Request</button></center>
                  </a> </h4>







<!-- Modal -->
<div     class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> Request A Withdraw </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form action="" method="post">
 	
 	<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Amount</label>
                        <input required="true" min="<?php echo$min_withdraw;?>" max="<?php echo$user_balance;?>" type="number" class="form-control" placeholder="Enter Amount" name="amount">
                      </div>
                    </div>
                  </div>

                  	<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Currency</label>
                        <input required="true"  type="text" class="form-control" placeholder="Enter Receiver Currency" name="currency">
                      </div>
                    </div>
                  </div>


                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Details</label>
                        <textarea required="true" rows="4" name="details" cols="80" class="form-control" placeholder="Bank Name, Receiver Name, A/C Number, Bank SWIFT Code, Bank Address"></textarea>
                      </div>
                    </div>
                  </div>


                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <center><button type="submit" name="initiate_withdraw" class="btn btn-primary rounded-pill">Request Withdraw</button></center>
                      </div>
                    </div>
                  </div>


 </form>
  

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>






              <?php } ?>
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
                        Date
                      </th>
                      <th>
                        Amount
                      </th>

                         <th class="text-left">
                        Currency
                      </th>
                      <th>
                        Reference
                      </th>
                      
                      <th class="text-left">
                        Status
                      </th>

                        <th class="text-left">
                        Details
                      </th>

                    </thead>
                    <tbody>

                      <?php
$fetch_courses = mysqli_query($db,"SELECT  * FROM advance_withdraws WHERE tutor_id='$user_ids' order by id desc");
while($row = mysqli_fetch_array($fetch_courses))
{
                      ?>
                      <tr>
                        <td>
<?php
echo date('D d M Y',strtotime(htmlentities($row['date_requested'])));
?>                        </td>
                        <td>
                         UGX <?php
echo number_format(htmlentities($row['amount']));
?>  
                        </td>
                        <td>
                          <?php
echo (htmlentities($row['currency']));
?>  
                        </td>
                        <td class="text-left">
                          <?php
echo (htmlentities($row['reference']));
?>  
                        </td>
                       

                         <td class="text-left">
                          <?php
 
$tutor_os =  (htmlentities($row['withdraw_status']));

if($tutor_os=='pending')
{
?>  
 
<span class='btn btn-block btn-warning'>Processing</span>

<?php } elseif($tutor_os=='declined') {?>

<span class='btn btn-block btn-danger'>Declined</span>

<?php } elseif($tutor_os=='approved') { ?>

<span class='btn btn-block btn-success'>Approved</span>

<?php } ?>

                        </td>

                         <td class="text-left">
<?php echo  (htmlentities($row['withdraw_details']));?>
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