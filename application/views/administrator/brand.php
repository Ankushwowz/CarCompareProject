<style>
.add-clss {float:right;}
.float-right{float:right !important;}
td {border: 0 !important;}
table.dataTable thead th, table.dataTable thead td {border-bottom: 0 !important;}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header categorymange">
      <h1 class="brandpadd">
         <i class="fa fa-users"></i> Brand  Management
         <small></small>
      </h1>
	  <a href="<?php echo base_url();?>administrator/addbrand" class="add-clss btn btn-success addvenderpri">Add New Brand</a>
   </section>
   <section class="content">
      
      <div class="row">
         <div class="col-xs-12">
            <div class="box admin-box">
               <!-- /.box-header -->
               <div class="box-body table-responsive">
                  <?php 
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
                  <table id="example" class="display table table-hover table-downs" style="width:100%">
                     <thead>
                        <tr>
                          
                           <th>Brand Name</th>
                           <th class="float-right">Action</th>
							
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(!empty($Records)){
								foreach($Records as $record){ ?>
									<tr>
									  
									   <td><?php echo $record->name; ?></td>
									 <td class="avail-edit-delete-un">
									       <a class="amoreoptionbtn">
									           <div class="menu cross menu--2 set-circl-menuss categorudots">
                                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="50" cy="50" r="30"></circle>
                                                        <path class="line--1" d="M0 70l28-28c2-2 2-2 7-2h64"></path>
                                                        <path class="line--2" d="M0 50h99"></path>
                                                        <path class="line--3" d="M0 30l28 28c2 2 2 2 7 2h64"></path>
                                                    </svg>
                                                </div>
									       </a>
									       <div class="amoreoption categorudotsband">																      
									       <a href="<?php echo base_url();?>administrator/editbrand/<?php echo $record->id;?>"  class="btn btn-success ">Edit</a> <a href="javascript:;" rel="<?php echo $record->id;?>" class="btn btn-danger delete-brand">Delete</a>
									   </div></td>
									  
									  
									 </tr><?php
								}
                           } ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
</div>