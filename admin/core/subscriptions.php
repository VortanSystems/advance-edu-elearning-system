<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

                          if(isset($_GET['accept_upgrade']))
                          {
                            $txn_id = strip_tags($_GET['accept_upgrade']);
                            $txn_data = mysqli_query($db,"SELECT * FROM transactions WHERE id='$txn_id'");
                            $txn_data = mysqli_fetch_array($txn_data);
                            $txn_owner = htmlentities($txn_data['owner']);
                            $update_txn = mysqli_query($db,"UPDATE transactions SET status='complete' WHERE id='$txn_id'");

                            $update_owner = mysqli_query($db,"UPDATE advance_users SET tutor_level='premium' WHERE tutor_ids='$txn_owner'");

                            $msg = 'User Upgraded Successfully';
                          }






                          if(isset($_GET['decline_upgrade']))
                          {
                            $txn_id = strip_tags($_GET['decline_upgrade']);
                            $txn_data = mysqli_query($db,"SELECT * FROM transactions WHERE id='$txn_id'");
                            $txn_data = mysqli_fetch_array($txn_data);
                            $txn_owner = htmlentities($txn_data['owner']);
                            $update_txn = mysqli_query($db,"UPDATE transactions SET status='revocked' WHERE id='$txn_id'");

                            $update_owner = mysqli_query($db,"UPDATE advance_users SET tutor_level='basic' WHERE tutor_ids='$txn_owner'");

                            $msg = 'User Down-graded Successfully';
                          }




                          ?>