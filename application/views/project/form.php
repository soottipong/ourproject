<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php print $title; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Form Validation</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">
            
                <div class="card">
                  <form class="needs-validation" novalidate="" method="post" action="<?php echo site_url('projectCreate') ?>">
                    <div class="card-header">
                      <h4>Form Create</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Project Name</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="project_name" required="">
                          <input type="hidden" name="project_uid" value="<?php echo $user['id']; ?>">
                          <div class="invalid-feedback">
                            What's your project name?
                          </div>
                        </div>
                      
                        <label class="col-sm-1 col-form-label">Project CODE</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="project_code" required="">
                          <div class="invalid-feedback">
                            What's your project code?
                          </div>
                        </div>

                            <label class="col-sm-1 col-form-label">Sale Name</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" name="project_sale" required="">
                                    <?php 
                                    foreach ($sale as $sales)
                                        print '<option value="'.$sales->id.'">'.$sales->sale_name.'</option>';
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    What's sale name?
                                </div>
                            </div>
                      </div>
                      <div class="form-group row">


                            <label class="col-sm-1 col-form-label">Start Date</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control datepicker" name="project_date" required="">
                                <div class="invalid-feedback">
                                    When your start this project?
                                </div>
                            </div>
                            <label class="col-sm-1 col-form-label">Finish Date</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control datepicker" name="project_end" required="">
                                <div class="invalid-feedback">
                                    please insert completed date
                                </div>
                            </div>


                            <label class="col-sm-1 col-form-label">Assigned to</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" name="assign_to" required="">
                                    <?php 
                                    foreach ($users as $u)
                                        print '<option value="'.$u->id.'">'.$u->name.'</option>';
                                    
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    What's sale name?
                                </div>
                            </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Location</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="project_location" required="">
                                <div class="invalid-feedback">
                                    What's forman name?
                                </div>
                            </div>

                            <label class="col-sm-1 col-form-label">Diameters</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="project_meters" required="">
                                <div class="invalid-feedback">
                                    What's forman name?
                                </div>
                            </div>

                            <label class="col-sm-1 col-form-label">Customer</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" name="project_customer" required="">
                                    <?php 
                                    foreach ($customer as $custom)
                                        print '<option value="'.$custom->id.'">'.$custom->customer_name.'</option>';
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    What's sale name?
                                </div>
                            </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Total Pile</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="project_pile" required="">
                                <div class="invalid-feedback">
                                    What's forman name?
                                </div>
                            </div>
                            <label class="col-sm-1 col-form-label">Depth</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="project_depth" required="">
                                <div class="invalid-feedback">
                                    What's forman name?
                                </div>
                            </div>
                            <label class="col-sm-1 col-form-label">Status</label>
                            <div class="col-sm-3">
                              <select class="form-control select2" name="project_status" required="">
                                <option value="Active">Active</option>
                                <option value="Completed">Completed</option>
                              </select>
                                <div class="invalid-feedback">
                                    What's forman name?
                                </div>
                            </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Remark</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" cols="30" rows="10" name="project_remark" required=""></textarea>
                                <div class="invalid-feedback">
                                    What's sale name?
                                </div>
                            </div>
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


<?php $this->load->view('_partials/footer'); ?>