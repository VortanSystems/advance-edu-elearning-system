<?php 
include 'header.php';
?>

 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Search History Log Data</h5>

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
                          Topic
                        </th>
                        <th >
                          Results
                        </th>
                        <th>
                          Tocken
                        </th>
                        <th>
                          Timestamp
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>

<?php
$fetch_courses = mysqli_query($db,"SELECT * FROM advance_searches ORDER BY time_stamps DESC");
while($courses = mysqli_fetch_array($fetch_courses))
{
?>

                      <tr>
                        <td>
                          <?php echo(htmlentities($courses['topic']));?>
                        </td>
                        <td>
                          <?php echo number_format(htmlentities($courses['result']));?>
                        </td>
                        <td>
                          <?php echo (htmlentities($courses['tocken']));?>
                        </td>
                        <td >
                          <?php echo date('D d M Y H:m:sa',strtotime((htmlentities($courses['time_stamps']))));?>
                        </td>
                        </td>
                         
                         




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