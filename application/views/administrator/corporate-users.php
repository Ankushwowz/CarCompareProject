<style>
td {border: 0 !important;}
table.dataTable thead th, table.dataTable thead td {border-bottom: 0 !important;}
.btn-txt { text-align: center; margin: 20px;}
.change-status { background: #dd4b39; color: #fff; padding: 4px 10px 10px 10px; border-radius: 4px; }
.aeditclass { background: #dd4b39; color: #fff; padding: 4px 10px 10px 10px; border-radius: 4px; }
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header corporateven">
      <h1 class="corporatesellhead">
         <!--<i class="fa fa-users"></i> -->
         Corporate Vendor List
         <small></small>
      </h1>
	  <a href="<?php echo base_url(); ?>administrator/createuser" class="btn btn-primary btn-txt addvenderpri">Add Vendor</a>
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
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $success; ?>                    
						</div>
					<?php } ?>
				 <div class="focouscls alert alert-success" id="reg-suc" style="display:none;">
			    Thank you for registering your account have been created
    			</div>
    			<div class="focouscls alert alert-success" id="reg-suc-1" style="display:none;">
    			Thank you for registering your Corporate Vendor account with Car Compare. Login details are sent your email. Please check and you are ready to post advert on the website.
    			</div>
    			<div class="focouscls alert alert-danger" id="reg-danger" style="display:none;">
    			This email is already registered with an account.Please try to login with your vaild credentials 
    			</div>	
                  <table id="example" class="display table table-hover table-downs" style="width:100%">
                     <thead>
                        <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Password</th>
                           <th>Valid Upto</th>
                           <th>Status</th>
                           <th>Action</th>
							
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(!empty($Records)){
								foreach($Records as $record){ ?>
									<tr>
									   <td><?php echo $record->first_name; ?></td>
									   <td><?php echo ucfirst($record->last_name); ?></td>
									   <td><?php echo $record->user_email; ?></td>
									   <td><?php echo $record->plain_password; ?></td>
									   <?php 
									   
									    $future = $record->timeperiod;
									    
                                        $today = date('Y-m-d');
                                        
                                        $timeleft = strtotime($future) - strtotime($today);
                                        $daysleft = round((($timeleft/24)/60)/60);
									   
									   
									   //$today = date('Y-m-d');
		                                    if($today > $record->timeperiod){ ?>
									   <td><a href="javascript:;"  class="btn btn-warning" style="width: 100%">Expired</a></td>
									   <?php }else{ ?>
									   <td><?php echo $record->timeperiod; ?> (<?php echo $daysleft; ?> days left)</td>
									   <?php } ?>
									   
									   <td>
									   
									   <?php  if($record->status==0){?>
									   <a href="javascript:;" class="btn btn-danger" style="width: 100%">Deactive</a>
									   <?php }else { ?>
									   <a href="javascript:;"  class="btn btn-success" style="width: 100%">Active</a>
									   <?php  }?> 
									   </td>
									   <td>
									   <a class="btn btn-primary" href="<?php echo base_url();?>administrator/edituser/<?php echo base64_encode($record->id)?>">Edit</a>
									  <!-- <a href="javascript:;" rel="<?php //echo $record->id;?>" class="btn btn-danger delete-corporate-user">Delete</a>
									   <?php  //if($record->status==0){?>
									   <a href="javascript:;" rel="<?php// echo $record->id;?>" class="btn btn-success deactive-corporate-user">Change Status</a>
									   <?php //}else { ?>
									   <a href="javascript:;" rel="<?php //echo $record->id;?>" class="btn btn-danger active-corporate-user">Change Status</a>
									   <?php  //}?> -->
									   
									   </td>
									  
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