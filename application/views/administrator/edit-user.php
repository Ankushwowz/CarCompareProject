<style>
.mt-10{margin-top:10px !important;}
.mt-20{margin-top:20px !important;}
</style>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="usermana">
         <!--<i class="fa fa-users"></i>-->
         Edit Corporate Vendor
         <small></small>
      </h1>
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
                 <form action="<?php echo base_url();?>administrator/editcorporate/<?php echo $this->uri->segment(3);?>" method="post" role="form" novalidate=""  id="my_corporate_up">
					<div class="row">
					<div class="col-md-6">
						   <label class="control-label mt-10">First Name <span class="text-danger">*</span></label>
						   <input type="text" name="first_name" placeholder="First Name"  class="form-control" required="true" value="<?php if(!empty($users['first_name'])) { echo $users['first_name']; }?>">
					</div>
					<div class="col-md-6">
							   <label class="control-label mt-10">Last Name<span class="text-danger">*</span><span class="text-danger">*</span></label>
							   <input type="text" name="last_name" placeholder="Last Name"  class="form-control" required="true" value="<?php if(!empty($users['last_name'])) { echo $users['last_name']; }?>">
					</div>
					<div class="col-md-6">
					   <label class="control-label mt-10">Email<span class="text-danger">*</span></label>
					   <input type="text" name="useremail" placeholder="Email"  class="form-control" required="true" value="<?php if(!empty($users['user_email'])) { echo $users['user_email']; }?>" readonly>
					</div>
					
					<div class="col-md-6">
					   <label class="control-label mt-10">Assigned Adverts <span class="text-danger">*</span></label>
					   <input type="text" name="adverts" id="adverts" placeholder="Enter Assigned Adverts"  class="form-control numbervalidation" required="true" value="<?php if(!empty($users['adverts'])) {echo $users['adverts'];} ?>">
					</div>
					
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Subscription Valid From<span class="text-danger">*</span></label>
					   <input type="text" name="startdate" placeholder="Start date"  class="form-control fromdate" value="<?php echo date('Y-m-d'); ?>" readonly>
					</div>
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Subscription Valid Upto<span class="text-danger">*</span></label>
					   <input type="text" name="timeperiod" placeholder="Number of days valid"  class="form-control todate" required="true" value="<?php if(!empty($users['timeperiod'])) {echo $users['timeperiod'];} ?>">
					</div>
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Subscription Days Left<span class="text-danger">*</span></label>
					   
					   <?php
					   $future = $users['timeperiod'];;
									    
                        $today = date('Y-m-d');
                        
                        $timeleft = strtotime($future) - strtotime($today);
                        $daysleft = round((($timeleft/24)/60)/60);
                        
                        // function dateDiffInDays($date1, $date2)
                        // {
                        
                        // 	$diff = strtotime($date2) - strtotime($date1);
                       
                        // 	return abs(round($diff / 86400));
                        // }
                        
                        // $date1 = date('Y-m-d');
                        // $date2 = $users['timeperiod'];
                        // $dateDiff = dateDiffInDays($date1, $date2);
                    
                        ?>

					   
					   
					   <input type="text" name="daysleft" id="daysleft" placeholder="Number of days left"  class="form-control calculated" readonly value="<?php echo $daysleft; ?>">
					</div>
					
					<!--<div class="col-md-12" style="display:block;">-->
					<!--   <label class="control-label mt-10">Subscription Valid Upto<span class="text-danger">*</span></label>-->
					<!--   <input type="text" name="timeperiod" id="txttgl" placeholder="Number of days valid"  class="form-control" value="<?php //if(!empty($users['timeperiod'])) {echo $users['timeperiod'];} ?>">-->
					<!--</div>-->
					
					
					<div class="col-md-6">
                  <label class="control-label mt-10" for="">Status</label>
                  <select name="status" class="form-control" required='true'>
                     <option value="">Select Status</option>
                     <option value="1" <?php if($users['status']=='1'){echo "selected";}?>>Active</option>
                     <option value="0" <?php if($users['status']=='0'){echo "selected";}?>>Deactive</option>
                  </select>
               </div>
               
               
               <div class="col-md-6">
					   <label class="control-label mt-10">Password <span class="text-danger">*</span></label>
					   <input type="text" name="password" id="password" placeholder="Password"  class="form-control" required="true" value="<?php echo $users['plain_password']; ?>">
					</div>
										
					
					<div class="col-md-12">
						<input type="submit" name="submit" class="btn btn-success  mt-20" value="Save">
					  </div>
					</div>
			   </form>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
</div>