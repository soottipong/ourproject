<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');

?>

<body>

<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

              <div class="card card-primary">
                 <div class="card-header"><h4>Detail</h4></div>
            
                <?php if(isset($_SESSION['success'])){?>
                  <div class="alert alert-sucess"><?php echo $_SESSION['success'];?></div>
                  <?php
                      }
                  ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                <div class="modal-body">
                <form  method="post" action="<?php echo base_url()."Customer/edit/".$da1->id;?>" >
                  <div class="row">
                    
                    <div class="form-group col-6">
                      <label for="Customer Name">Customer Name</label>
                      <input id="customer_name" type="text" class="form-control" required="" name="customer_name" value="<?php echo $da1->customer_name;?>"autofocus/>

                    </div>
                    <div class="form-group col-6">
                      <label for="Phone">Customer Phone</label>
                      <input id="customer_phone" type="number" class="form-control" name="customer_phone" value="<?php echo $da1->customer_phone;?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="Email">Email</label>
                      <input id="customer_email" type="Email" class="form-control" name="customer_email" value="<?php echo $da1->customer_email;?>">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="Address" class="d-block">Address</label>
                      <input id="customer_address" type="text" class="form-control" name="customer_address" value="<?php echo $da1->customer_address;?>">
                    </div>
                  </div>

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="Status">Update At</label>
                      <input id="updated_at" type="date" class="form-control" name="updated_at" value="<?php echo $da1->updated_at;?>">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    
                  
                    <div class="form-group col-4">
                      <label for="Status" class="d-block">Status</label>
                      <input id="customer_status" type="number" class="form-control" name="customer_status" value="<?php echo $da1->customer_status;?>">

                    </div>
                  </div>
                
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="update" value="Save">Save</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block"data-dismiss="alert">Close</button>  </div>

                         </div>
                       </div>

                   </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
     </div>




