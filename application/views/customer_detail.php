<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->view('dist/_partials/header');

?>

<body>

<body>
    <div id="add_data_Modals" role="document">  
      <div class="modal-dialog">  
           <div class="modal-content">  
           <div class="modal-header">
              <div class="modal-title"><h4>Customer Detail</h4></div>
            </div>
            
                <?php if(isset($_SESSION['success'])){?>
                  <div class="alert alert-sucess"><?php echo $_SESSION['success'];?></div>
                  <?php
                      }
                  ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                <div class="modal-body">
                  <div class="row">
                    
                    <div class="form-group col-6">
                      <label for="Customer Name" style="font-size: 15px; font-family: bold;">ID :<?php echo $da1->id;?></label><br>
                      <label for="Customer Name" style="font-size: 15px; font-family: bold;">Customer Name :<?php echo $da1->customer_name;?></label><br>
                      <label for="Phone" style="font-size: 14px; font-family:bold ;">Customer Phone:<?php echo $da1->customer_phone;?></label><br>
                      <label for="Email" style="font-size: 14px; font-family: bold;">Email: <?php echo $da1->customer_email;?></label><br>
                       <label for="Address" style="font-size: 14px; font-family: bold;">Address: <?php echo $da1->customer_address;?></label><br>
                        <label for="Create" style="font-size: 14px; font-family: bold;">Create at:<?php echo $da1->updated_at;?></label><br>
                        <label for="Update" style="font-size: 14px; font-family: bold;" >Update at: <?php echo $da1->updated_at;?></label><br>
                         <label for="Status" style="font-size: 14px;font-family: bold;">Status: <?php echo $da1->customer_status;?></label><br>
                       </div>
                    </div>
                 
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Close</button>  </div>

                         </div>
                       </div>
                  </div>
                </div>
          
