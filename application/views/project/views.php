<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php print $result->project_name; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Card</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                
                <div class="card card-primary">
                  <div class="card-header">
                    <h4><?php print $result->project_name.' ('.$result->project_CODE; ?>)</h4>
                    <div class="card-header-action">
                     
                        <?php
                        if($result->project_status == "Active"){ ?>
                          <div class="btn-group">
                            <a href="<?php echo  base_url('projects/setlock/'.$result->id); ?>" class="btn btn-primary" data-toggle="tooltip" title="Archive Project" onclick="return confirm('Are you want to archive this projecjt?')">Archive</a>
                            <a href="<?php print site_url('ProjectBorelog/'.$result->id);?>" class="btn btn-primary" data-toggle="tooltip" title="add borelog">Add</a>
                            <a href="<?php print site_url('projects/edit/'.$result->id);?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Project" onclick="return confirm('Are you want to edit this projecjt?')">Edit</a>
                            <a href="#" class="btn btn-primary">Print</a>
                          </div>
                        <?php }elseif($result->project_status == "Completed") { ?>
                          <div class="btn-group">
                            <a href="#" class="btn btn-primary">Print</a>
                          </div>
                        <?php } ?>  
                      
                      <?php 
                      if($result->project_status == "Active"){
                        print '<span class="badge badge-success">Active</span>';
                      }elseif($result->project_status == "Completed"){
                        print '<span class="badge badge-info">Completed</span>';
                      }
                      ?>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-md-2">
                        <address>
                          <strong><?php print $result->project_CODE; ?></strong><br>
                            CODE<br>
                        
                        </address>
                      </div>
                      <div class="col-md-2">
                        <address>
                          <strong><?php print $result->sale_name; ?></strong><br>
                            SALE<br>
                        
                        </address>
                      </div>
                      <div class="col-md-2">
                        <address>
                          <strong><?php print $result->customer_name; ?></strong><br>
                            CUSTOMER<br>
                        
                        </address>
                      </div>
                      <div class="col-md-2">
                        <address>
                          <strong><?php print date('d-m-Y',strtotime($result->project_start)); ?></strong><br>
                            START DATE<br>
                        
                        </address>
                      </div>
                      <div class="col-md-2">
                        <address>
                          <strong><?php print date('d-m-Y',strtotime($result->project_end)); ?></strong><br>
                            FINISH DATE<br>
                        
                        </address>
                      </div>
                      <div class="col-md-2 text-md-right">
                        <address>
                          <strong><?php print $result->project_diameters; ?></strong><br>
                            TOTAL METERS<br>
                        
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-md-4">
                        <address>
                          <strong><?php print $result->project_location; ?></strong><br>
                          LOCATION<br>
                        </address>
                      </div>
                      <div class="col-md-2">
                        <address>
                          <strong><?php echo $this->db->where('borelog_ref_pid', $result->id)->count_all_results('borelogs'); ?></strong><br>
                          TOTAL BORE LOGS<br>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Create Date:</strong><br>
                          <?php echo $result->created_at; ?><br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                  
                </div>
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
                            foreach ($bore as $project)
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
                                Sale Name: <?php echo $project->sale_name; ?><br/>
                                Created : <?php echo date("d-m-Y",strtotime($project->borelog_date)); ?>
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
                            <td><a href="<?php echo base_url('borelogsViwes/'.$project->bid);?>" data-toggle="tooltip" title="Bore log"><i class="fas fa-newspaper"></i></a>
                            <a href="<?php echo base_url('borelogsPrint/'.$project->bid);?>" target="_BLANK"><i class="fa fa-print"></i></a>
                            </td>
                          </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
            
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_partials/footer'); ?>