<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->view('dist/_partials/header');
?>
<body>

             <div class="modal-dialog m-0" id ="#data_Modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
              <div class="modal-title"><h4>Customer</h4></div></div>

              <div class="modal-body">
                <form  method="post" action="<?php echo base_url()?>Customer/insert"  >
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="Customer Name">Customer Name</label>
                      <input id="customer_name" type="text" class="form-control" required="" name="customer_name" autofocus/>
                    </div>
                    <div class="form-group col-6">
                      <label for="Phone">Customer Phone</label>
                      <input id="customer_phone" type="number" class="form-control" required="" name="customer_phone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="Email">Email</label>
                      <input id="customer_email" type="Email" class="form-control" name="customer_email">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                  <div class="form-group col-6">
                    <label for="Address" class="d-block">Address</label>
                    <input id="customer_address" type="text" class="form-control" name="customer_address">
                    </div>
                  </div>
                    <div class="row">
                    <div class="form-group col-6">
                      <label for="Status">Create At</label>
                      <input id="created_at" type="date" class="form-control" name="created_at">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="Update" class="d-block">Update At</label>
                      <input id="updated_at" type="date" class="form-control" name="updated_at">
                    </div>
                  </div>
                  <div class="row">
                 <div class="form-group col-5">
                    <label for="Status" class="d-block">Status</label>
                    <input id="customer_status" type="number" class="form-control" name="customer_status">
                    </div>
                  </div>
                      <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="save" value="Save">Save
                    </button>
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Close</button> </div>            
                  </div>
                </form>
              </div>
            </div>    
        
<?php $this->load->view('dist/_partials/js'); ?>
