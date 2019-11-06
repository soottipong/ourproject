<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>



      <!-- Main Content -->
      
<div class="main-content">
  <section class="section">
   <div class="section-header">
      <h1>Table Customer</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
           <div class="breadcrumb-item">Table Customer</div>
            </div>
      </div>

        <?php if($this->session->flashdata('success')){
                  $message=$this->session->flashdata('success');?>
                  <div class="alert alert-success" role="alert"><?php echo $message['message'];?></div>
                  <?php

                      }
                  ?>


          <div class="row">
              <div class="col-12">
                <div class="card">

                  <div class="card-header">
                     <div class="col-sm-5">

                         <button a href="<?php echo base_url()?>Customer/insert" type="button"class="btn btn-primary" data-toggle="modal" data-target="#data_Modal"><i class="glyphicon glyphicon-plus"></i>Add New</button></a> </div>
                           
      
                    <div class="card-header-form">
                        <div class="input-group-7">
                        <input  id="search" type="search" class="form-control form-control-sm" placeholder="search" style="float: right;"></div>
                        </div>
                    </div>
                  </div>
        
                    <div class="table-responsive">
                      <table class="table table-striped">
                          <div class="custom-checkbox custom-control"></div>
                    </th>
                        <tr>
                          <th>#</th>
                          <th>Customer</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Update</th>
                          <th>Status</th>
                          <th>Action</th>
                           
                           
                          </tr>

  <?php
  
  $i=0;
      foreach ($display as $row){?>
<tr>
 <td><?php echo ++$i; ?></td>
 <td><?php echo $row->customer_name;?></td>
 <td><?php echo $row->customer_email;?></td>
 <td><?php echo $row->customer_phone;?></td>
  <td><?php echo $row->updated_at;?></td>
 <td><div class="badge badge-success"><?php echo  $row->customer_status;?></div></td>

    
 <td class="action-button">
 <a href="<?php echo base_url()."customer/edit/".$row->id;?> "class="edit" title="edit"data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
 <a href="<?php echo base_url()."Customer/deletedata/".$row->id;?>"class="delete" title="Delete" data-toggle="modal-1" ><i class="material-icons">&#xE872;</i></a>
 <a href="<?php echo base_url()."Customer/detail/".$row->id;?>" class="detail" title="detail" data-toggle="modal" data-target="#add_data_Modals"><i class="glyphicon glyphicon-stats" ></i></a>



                     
   <?php
}

    ?>
   </table>
  </div>
 </div>
 <div class="card-footer text-right">
 <nav class="d-inline-block">
 <ul class="pagination mb-0">
     <li class="page-item disabled">
       <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
         <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
            <a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
          </ul>
         </nav>
      </div>
    </div>
  </div>
 <div id="add_data_Modals" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
           </div>  
      </div>  
 </div> 
  <div id="data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
           </div>  
      </div>  
 </div> 





 


 
