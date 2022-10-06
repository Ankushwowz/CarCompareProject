<style>.add-clss {float:right;}</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-users"></i> Car Review Management
         <small></small>
      </h1>
	  <a href="<?php echo base_url();?>administrator/addcarreview" class="add-clss btn btn-success addvenderpri">Add New Car Review</a>
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
                           <th>Image</th>
                           <th>Title</th>
                           <th>Short Description</th>
                           <th>Description</th>
                           <th>Action</th>
							
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(!empty($Records)){
								foreach($Records as $record){ ?>
									<tr>
									   <td>
									   <?php if(!empty($record->featured_img)) {?>
									   <img src="<?php echo base_url()?>/assets/upload/gallary/<?php echo $record->featured_img; ?>" width="100px;" height="100px;">
									   <?php } else { ?>
									    <img src="<?php echo base_url()?>/assets/img/no-image.png" width="100px;" height="100px;">
									   <?php } ?>
									   </td>
									   <td><?php echo $record->title; ?></td>
									   <td><?php echo $record->shortdescription; ?></td>
									   <td><?php echo $record->description; ?></td>
										<td class="avail-edit-delete-un">
									       <a class="amoreoptionbtn ">
									           <div class="menu cross menu--2 set-circl-menuss">
                                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="50" cy="50" r="30"></circle>
                                                        <path class="line--1" d="M0 70l28-28c2-2 2-2 7-2h64"></path>
                                                        <path class="line--2" d="M0 50h99"></path>
                                                        <path class="line--3" d="M0 30l28 28c2 2 2 2 7 2h64"></path>
                                                    </svg>
                                                </div>
									       </a>
									       <div class="amoreoption categorudotsmodal">																      
									       <a href="<?php echo base_url();?>administrator/editcarreview/<?php echo $record->id;?>"  class="btn btn-success ">Edit</a> <a href="javascript:;" rel="<?php echo $record->id;?>" class="btn btn-danger delete-catreview">Delete</a> 
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