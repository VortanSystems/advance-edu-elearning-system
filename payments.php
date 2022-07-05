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
                <h5 class="card-category">My Subscriptions    <center><b style="color: green">
            <?php

            if($msg)
            {
              echo($msg);
            }
            ?>
          </b></center></h5>
                 
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
                        Ref
                      </th>
                      <th class="text-left">
                        Expiry
                      </th>
                      <th class="text-left">
                        Status
                      </th>

                         <th class="text-left">
                        Pay Status
                      </th>

                    </thead>
                    <tbody>

                      <?php
$fetch_courses = mysqli_query($db,"SELECT  * FROM transactions WHERE owner='$user_ids' order by id desc");
while($row = mysqli_fetch_array($fetch_courses))
{
                      ?>
                      <tr>
                        <td>
<?php
echo date('D d M Y',strtotime(htmlentities($row['pay_date'])));
?>                        </td>
                        <td>
                         UGX <?php
echo number_format(htmlentities($row['paid_amount']));
?>  
                        </td>
                        <td>
                          <?php
echo (htmlentities($row['pay_currency']));
?>  
                        </td>
                        <td class="text-left">
                          <?php
echo (htmlentities($row['reference']));
?>  
                        </td>
                        <td class="text-left">
<?php echo date('D d M Y',strtotime(htmlentities($row['expire_data'])));?>
                        </td>

                         <td class="text-left">
                          <?php
$dimis = date('D d M Y',strtotime(htmlentities($row['expire_data'])));
$tutor_os = date('D d M Y');

if(($tutor_os-$dimis)>0)
{
?>  
 
<span class='btn btn-block btn-success'>Active</span>

<?php } else {?>

<span class='btn btn-block btn-danger'>Expired</span>

<?php } ?>


                        </td>


                         <td class="text-left">
                          <?php
$lotus = (htmlentities($row['status']));
 if($lotus=='complete')

{
echo "<span class='btn btn-block btn-success'>Complete</span>";
}
elseif($lotus=='revocked')

{
echo "<span class='btn btn-block btn-danger'>Revocked</span>";
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