<style>
.mt-10{margin-top:10px !important;}
.mt-20{margin-top:20px !important;}
</style>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <!--<i class="fa fa-users"></i>-->
         Add New Corporate Vendor
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
		
		
		<div class="focouscls alert alert-success" id="reg-suc" style="display:none;">
			Thank you for registering your account have been created
			</div>
			<div class="focouscls alert alert-success" id="reg-suc-1" style="display:none;">
			Thank you for registering your Corporate Vendor account with Car Compare. Login details are sent your email. Please check and you are ready to post advert on the website.
			</div>
			<div class="focouscls alert alert-danger" id="reg-danger" style="display:none;">
			This email is already registered with an account.Please try to login with your vaild credentials 
			</div>
			
                 <form action="" method="post" role="form" novalidate=""  id="my_corporate" autocomplete="off">
                     <input type="hidden" name="package_id" value="" id="package_id">
                     <input type="hidden" id="show_id" name="show_id" value="">
					<div class="row">
					<div class="col-md-6">
							   <label class="control-label mt-10">First Name <span class="text-danger">*</span></label>
							   <input type="text" name="first_name" placeholder="First Name"  class="form-control" required="true">
					</div>
					<div class="col-md-6">
							   <label class="control-label mt-10">Last Name<span class="text-danger">*</span></label>
							   <input type="text" name="last_name" placeholder="Last Name"  class="form-control" required="true">
					</div>
					<div class="col-md-6">
					   <label class="control-label mt-10">Email<span class="text-danger">*</span></label>
					   <input type="text" name="useremail" placeholder="Email"  class="form-control email_val" required="true" autocomplete="false">
					   <span class="email_val validation"></span>
					</div>
					
					<div class="col-md-6">
					   <label class="control-label mt-10">Assigned Adverts <span class="text-danger">*</span></label>
					   <input type="text" name="adverts" id="adverts" placeholder="Enter Assigned Adverts"  class="form-control numbervalidation" required="true">
					</div>
					
					<div class="col-md-6">
					   <label class="control-label mt-10">Password <span class="text-danger">*</span></label>
					   <input type="password" name="password" id="password" placeholder="Password"  class="form-control" required="true">
					</div>
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Subscription Valid From<span class="text-danger">*</span></label>
					   <input type="text" name="startdate" placeholder="Start date"  class="form-control fromdate" value="<?php echo date('Y-m-d'); ?>" readonly>
					</div>
					
					<div class="col-md-6">
					   <label class="control-label mt-10">Confirm Password <span class="text-danger">*</span></label>
					   <input type="password" name="repassword" id="repassword" placeholder="Confirm Password"  class="form-control" required="true">
					</div>
					
					
					
					
					
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Subscription Valid Upto<span class="text-danger">*</span></label>
					   <input type="text" name="timeperiod" placeholder="Number of days valid"  class="form-control todate" required="true">
					</div>
					
					<div class="col-md-6" style="display:block;">
					   <label class="control-label mt-10">Total Days<span class="text-danger">*</span></label>
					   <input type="text" name="daysleft" id="daysleft" placeholder="Number of days left"  class="form-control calculated" readonly>
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


