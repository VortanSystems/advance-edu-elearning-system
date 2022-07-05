<?php 
include 'header.php';
?>
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Manage Withdraw Requests</h5>

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
                   <table class="table">
                    <thead class=" text-primary">
                      <th>
                        User
                      </th>
                      <th>
                        Bank Details
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
$fetch_courses = mysqli_query($db,"SELECT  * FROM advance_withdraws  order by date_requested desc");
while($row = mysqli_fetch_array($fetch_courses))
{


                      ?>
                      <tr>
                        <td>
<?php
$tutor_id_tx = (htmlentities($row['tutor_id']));
$get_tutor = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$tutor_id_tx'");
$tux_dta = mysqli_fetch_array($get_tutor);
echo(htmlentities($tux_dta['fullname']))."<br>"; 
echo(htmlentities($tux_dta['user_phone']))."<br>"; 
echo(htmlentities($tux_dta['user_email'])); 
?>                     </td>

                        <td>
                         <?php
$course_id = (htmlentities($row['reference']));
?>  
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo$course_id;?>"    style="text-decoration: none;"><i class="tim-icons icon-alert-circle-exc " ></i></button>

 


<!-- Modal -->
<div     class="modal fade" id="exampleModal<?php echo$course_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><center> <?php echo(htmlentities($tux_dta['fullname']));?>'s Withdraw Request </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
 




<div class="col-md-12  article-content"
                        style=" text-align: justify;
  text-justify: inter-word; color: black">
  <p class="text-danger"> Do Not Approve User Requests Whose Amount Exceeds Their Last Payment of 14Days. 14 Days is Buyer's Refund Protection Time </p>
<b>Amount: </b><?php echo(htmlentities($row['amount']));?> <?php echo(htmlentities($row['currency']));?>
<hr>
<b>Bank Details: </b>
<?php echo(htmlentities($row['withdraw_details']));?>

  </div>
 

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
        

                                  <?php
$lotus = (htmlentities($row['withdraw_status']));
                          if($lotus=='pending')

{?>
<a href="withdraws.php?approve_withdraw=<?php echo(htmlentities($row['id']));?>" class="btn btn-success rounded-pill">Approve</a>
<a href="withdraws.php?decline_withdraw=<?php echo(htmlentities($row['id']));?>" class="btn btn-danger rounded-pill">Decline</a>
<?php
}

  elseif($lotus=='declined')

  {
echo "<span class='btn btn-block btn-danger'>Declined</span>";
  }


  elseif($lotus=='approved')

  {
?>
<a href="withdraws.php?decline_withdraw=<?php echo(htmlentities($row['id']));?>" class="btn btn-danger rounded-pill">Decline</a>
<?php
  }



?>


      </div>
    </div>
  </div>
</div>





                        </td>
                        <td>
                          <?php
echo date('D d M Y',strtotime(htmlentities($row['date_requested'])));
?>  
                        </td>
                        <td class="text-left">
                          <?php
echo number_format(htmlentities($row['amount'])); echo(" "); echo(htmlentities($row['currency']));
?>   
                        </td>
                        <td class="text-left">
                          <?php

if($lotus=='pending')
{
echo "<span class='btn btn-block btn-warning'>Processing</span>";
}
elseif($lotus=='approved')

{
echo "<span class='btn btn-block btn-success'>Approved</span>";
}

  elseif($lotus=='declined')

  {
echo "<span class='btn btn-block btn-danger'>Declined</span>";
  }

   
?>  
                        </td>

                         


                         <td class="text-left">
                                <?php
echo (htmlentities($row['reference']));
 //reference


 
?>  





                        </td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>



 
           
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