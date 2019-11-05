<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('_partials/header');
?>



<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Project</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Project Name</th>
                            <th>Project CODE</th>
                            <th>Progress</th>
                            <th>Location</th>
                            <th>Total Meters</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <?php
                            $i = 1;
                            foreach ($result as $project)
                            {
                          ?>                                
                          <tr>
                            <td>
                              <?php print $i++; ?>
                            </td>
                            <td><b><?php print $project->project_name; ?></b>
                            <?php if($project->project_status == "Completed")
                            {
                              ?>
                              <font color="RED"><i class="fas fa-lock"></i></font>
                              <?php
                            } ?>
                            
                              <small id="passwordHelpBlock" class="form-text text-muted">
                                Sale Name: <?php echo $project->sale_name; ?>
                              </small>
                            </td>
                            <td><?php print $project->project_CODE; ?></td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <?php print $project->project_location; ?>
                            </td>
                            <td><?php print $project->project_diameters; ?></td>
                            <td>
                              <?php 
                              if($project->project_status == "Active")
                              {
                               ?> 
                               <div class="badge badge-success">Active</div>
                              <?php 
                              }elseif($project->project_status == "Completed")
                              {
                              ?>  
                              <div class="badge badge-info">Completed</div>
                              <?php } ?>                            
                            </td>
                            <td><a href="<?php echo base_url('projectViews/'.$project->id); ?>" class="btn btn-secondary" data-toggle="tooltip" title="Bore log <?php echo $project->BTotal; ?>"><i class="fas fa-newspaper"></i></a></td>
                          </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>     
<?php $this->load->view('_partials/footer'); ?>

