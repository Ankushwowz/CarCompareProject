<div class="content-wrapper editcolosect">
    <!-- Content Header (Page header) -->
    <section class="edit-profile-header ">
        <h1 class="edithcolo">Edit Profile</h1>
    </section>
    <section class="edit-profile-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box admin-box">
                   <!-- /.box-header -->
                   <div class="box-body">
    				<?php 
    				$success = $this->session->flashdata('success');
    				if($success){?>
    				    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $success; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
    					<?php 
    				} ?>
    				
                        <form action="<?php echo base_url()?>administrator/editprofile" method="post" role="form" novalidate=""  id="editprofile" enctype="multipart/form-data">
    					    <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label for="name" class=" control-label">First Name <span class="text-danger"></span></label>
                                    <div class="">
                                        <input type="text" name="first_name" value="<?php if(!empty($profile['first_name'])) { echo $profile['first_name']; } ?>" placeholder="First Name" class="form-control textname" required="true">
                                    </div>
                                </div>
            
                                <div class="col-sm-4 form-group">
                                    <label for="name" class=" control-label">Last Name <span class="text-danger"></span></label>
                                    <div class="">
                                        <input type="text" name="last_name" value="<?php if(!empty($profile['last_name'])) { echo $profile['last_name']; } ?>" placeholder="Last Name" class="form-control textname" required="true">
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="email" class="= control-label">Phone</label>
                                    <div class="">
                                        <input type="text" name="phone" value="<?php if(!empty($profile['user_phone'])) { echo $profile['user_phone']; } ?>" placeholder="Phone" class="form-control textname numbervalidation">
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 form-group">
                                    <label for="password" class=" control-label">Old Password <span class="text-danger"></span></label>
                                    <div class="">
                                        <input type="text" name="old-password" placeholder="Old Password" class="form-control textname" required="true" readonly value="<?php if(!empty($profile['plain_password'])) { echo $profile['plain_password']; } ?>">
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 form-group">
                                    <label for="password" class=" control-label">New Password <span class="text-danger"></span></label>
                                    <div class="">
                                        <input id="password" type="password" name="password" placeholder="Password" class="form-control textname" required="true" value="<?php if(!empty($profile['plain_password'])) { echo $profile['plain_password']; } ?>">
                                    </div>
                                </div>
            					<div class="col-sm-4 form-group">
                                    <label for="password" class=" control-label">Profile Image <span class="text-danger"></span></label>
                                    <div class="">
                                        <input  type="file" name="userfile"  class="form-control textname" required="true">
            							<input  type="hidden" name="olduserfile"  class="form-control textname"  value="<?php if(!empty($profile['profile_image'])) { echo $profile['profile_image']; } ?>">
                                    </div>
                                </div>
                                 <?php if($this->session->userdata('role')==2 || $this->session->userdata('role')==1){ ?>
                                <div class="col-sm-12">
                                    <h2 class="labelss">Agency Details</h2>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email" class=" control-label">Company Name</label>
                                    <div class="">
                                        <input type="text" name="company_name" value="<?php if(!empty($profile['user_company'])) { echo $profile['user_company']; } ?>" placeholder="Company Name" class="form-control textname">
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email" class=" control-label">Website</label>
                                    <div class="">
                                        <input type="text" name="website" value="<?php if(!empty($profile['user_website'])) { echo $profile['user_website']; } ?>" placeholder="Website" class="form-control textname">
                                    </div>
                                </div>
                                <?php } ?>
        						<div class="col-sm-12 form-group">
                                    <div class="submenedit">
                                        <input  name="submit-btn" type="submit" class="btn btn-success" value="Submit">&nbsp;
            						</div>
                                </div>
    					    </div>
    			        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>