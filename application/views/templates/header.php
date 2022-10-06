<?php $url= explode('/',$_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Car Compare - Search Buy Sell Cars</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="description" content="search top cars near your location of various categories like coupe sedan van suv">
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@Car Compare">
      <meta name="twitter:url" content="index.html" />
      <meta name="twitter:title" content="Car Compare - Search Buy Sell Cars" />
      <meta name="twitter:description" content="search top cars near your location of various categories like coupe sedan van suv" />
      <meta name="twitter:image" content="<?php echo base_url(); ?>assets/images/site-default.jpg" />
      <meta property="og:title" content="Car Compare - Search Buy Sell Cars" />
      <meta property="og:site_name" content="Car Compare" />
      <meta property="og:url" content="index.html" />
      <meta property="og:description" content="search top cars near your location of various categories like coupe sedan van suv" />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="<?php echo base_url(); ?>assets/images/site-default.jpg" />
      <meta property="fb:app_id" content="1986781321439408" />
      <meta name="revisit-after" content="3 days">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
      <link href="<?php echo base_url(); ?>assets/css/all-css.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/font-awsome/font-awsome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ionrange-slider/css/ion.rangeSlider.css">
      <link href="<?php echo base_url(); ?>assets/layerslider/css/layerslider.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/all_pages.css" rel="stylesheet">
      <!--Select2 Plugin -->      
      <link href="<?php echo base_url(); ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/gallaryimage/component.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	
   </head>
   <!--/head-->   
   <body class="page-top" dir="ltr">
       <!--<div class="mj_preloaded" style="/* display: none; */">
        <div class="mj_preloader" style="/* display: none; */">
            <div class="lines">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <div class="loading-text">LOADING</div>
        </div>
        </div>-->
      <div id="page-wrap" class="animsition">
      <div class="offcanvas-overlay"></div>
      <div class="top-bar box-top-bar">
         <div class="container">
            <!-- Contact starts -->            
            <div class="tb-contact pull-left">               
			<i class="fa fa-envelope color"></i>   
			<a href="mailto: info@carcompareug.com"> info@carcompareug.com</a>              
			<!--<i class="fa fa-phone color"></i>  (256) 701 777 771           -->
			</div>
            <div class="tb-language dropdown pull-right">               
			<strong>   
		<?php  if(!empty($this->session->userdata('email'))){?>  
		<a  href="<?php echo base_url();?>dashboard"   style="font-size:20px;">My Account</a>		
			<?php }else{ ?>  
			<i class="fa fa-lock" aria-hidden="true" style="font-size: 16px;color: #fff;"></i>  
		     <a class="signin" href="#"  data-toggle="modal" data-target="#signin-modal" style="font-size:12px;"> Login</a>&nbsp;&nbsp;&nbsp;
			 <i class="fa fa-lock" aria-hidden="true" style="font-size: 16px;color: #fff;"></i>  
		     <a class="signin" href="#"  data-toggle="modal" data-target="#ModalForReg" style="font-size:12px;"> Register</a>
			<?php } ?>            
			</strong>            
			</div>
            <!-- Social media starts -->            
            <div class="tb-social pull-right">
               <div class="brand-bg text-right">
                  <!-- Brand Icons -->                  <a target="_blank" href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>                  <a target="_blank" href="https://twitter.com/" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>               
               </div>
            </div>
            <!-- Social media ends -->                                       
            <div class="clearfix"></div>
         </div>
      </div>
      <div class="clearfix"></div>
      <header id="header" class="sticky full-header static-header">
         <div class="container">
            <div class="row box-header-wrap">
               <div class="col-sm-2 col-xs-4 logo-col">
                  <div id="logo" class="logos">
                     <h3 class="logoalignss"> <a href="<?php echo base_url();?>" class="standard-logo pull-left">                       
					 <img src="<?php echo base_url();?>assets/img/logo.png" alt="Logo" style="height:63px;margin-top:5px;">   </a>                   
					 </h3>
                  </div>
               </div>
               <div class="col-sm-10 col-xs-8">
                  <nav class="main-nav pull-right">
                     <ul>
                        <li class="<?php if($url[3]=='') { echo "active";}?>" ><a href="<?php echo base_url();?>" ><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="<?php if(in_array('used-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>used-car">used car</a></li>
						<li class="<?php if(in_array('new-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>new-car">New car</a></li>
                        <li class="<?php if(in_array('rent-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>rent-car">rent car</a></li>
                        <li class="<?php if(in_array('car-review',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>car-review">car reviews</a></li>
                        <li class="<?php if(in_array('contact-us',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>contact-us">contact us</a></li>
                        <li class=""><a style="color:#fff;" href="<?php echo base_url();?>post-ad"><button class="btn btn-primary"style="background:#3286bc; font-size: 15px;">Sell Your Car</button></a></li>
                     </ul>
                  </nav>
                  <div class="offcanvas-toggler pull-right">
				  <i id="offcanvas-opener" class="fa fa-bars"></i>
				  <i id="offcanvas-closer" class="fa fa-close"></i>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- ========== START MOBILE NAV ========== -->      
      <nav class="mobile-nav">
         <ul>
                      <li class="<?php if($url[2]=='') { echo "active";}?>" ><a href="<?php echo base_url();?>" ><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="<?php if(in_array('used-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>used-car">used car</a></li>
						<li class="<?php if(in_array('new-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>new-car">New car</a></li>
                        <li class="<?php if(in_array('rent-car',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>rent-car">rent car</a></li>
                        <li class="<?php if(in_array('car-review',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>car-review">car reviews</a></li>
                        <li class="<?php if(in_array('contact-us',$url)) { echo "active";}?>" ><a href="<?php echo base_url();?>contact-us">contact us</a></li>
                        <li class=""><a style="color:#fff;" href="<?php echo base_url();?>post-ad"><button class="btn btn-primary"style="background:#3286bc; font-size: 15px;">Sell Your Car</button></a></li>
                     </ul>
      </nav>
      <!-- end mobile nav -->
	    <!----------------- Login -------------------------->

<div class="modal fade" id="signin-modal" role="dialog" >
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><span class="fa fa-sign-in"></span> Login to your Account </h4>
			<div class="alert alert-danger" id="login-danger" style="display:none;">
			Your login details has been invaild. Please try vaild details
			</div>
         </div>
         <div class="modal-body">
            <!-- Login starts -->
            <div class="well login-reg-form">
               <!-- Form -->
               <form action="#" class="form-horizontal" role="form" novalidate="" action=""  method="post" id="my_form_login">
                  <!-- Form Group -->
                  <div class="form-group">
                     <!-- Label -->
                     <label for="user" class="col-sm-3 control-label">Email</label>
                     <div class="col-sm-9">
                        <!-- Input -->
                        <input type="email" class="form-control" name="useremaillogin" placeholder="Email" required="true">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="password" class="col-sm-3 control-label">Password</label>
                     <div class="col-sm-9">
                        <input type="password" class="form-control" name="passwordlogin" placeholder="Password" required="true"> 
                     </div>
                  </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <a  href="#" id="ModalForgotpasshrf" class="black">Forgot Password</a>
                        </div>
                    </div>
                
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-9">
                        <!-- Button -->
						<input type="hidden" id="checkvalye" class="form-control" name="checkvalye" value="">
						<input type="hidden" id="Sell_last_id" class="form-control" name="Sell_last_id" value="">
					    <input type="hidden" id="TypeOfAdvert" class="form-control" name="TypeOfAdvert" value="">
						<input type="hidden" id="previewwithlogin" class="form-control" name="previewwithlogin" value="">
                        <input type="submit" class="btn btn-success" value="Login" name="login" >
						<span class="or_center">OR</span>
                        <a  style="background-color: #db2d2e;" href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalForReg"class="black">Create an account</a>
                     </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9">
                  </div>
               </form>
               <br><br>
            </div>
            <!-- Login ends -->
         </div>
         <div class="modal-footer">
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!----------------- End  Login -------------------------->
 <div class="modal fade" id="ModalForReg" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content regform-content">
        <div class="modal-header">
          <button type="button" class="close reset-close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-sign-in"></span> Registartion Form</h4>
			<div class="focouscls alert alert-success" id="reg-suc" style="display:none;">
			Thank you for registering your account have been created
			</div>
			<div class="focouscls alert alert-success" id="reg-suc-1" style="display:none;">
			Thank you for registering your account have been created and Post have been added to the websites
			</div>
			<div class="focouscls alert alert-danger" id="reg-danger" style="display:none;">
			This email is already registered with an account.Please try to login with your vaild credentials 
			</div>
        </div>
        <div class="modal-body">
            <form style="max-width: 615px" class="form-horizontal" role="form" novalidate="" action=""  method="post" id="my_form_reg">

                <input type="hidden" name="package_id" value="" id="package_id">
                <input type="hidden" id="show_id" name="show_id" value="">

                <div class="form-group">
                    <!-- Label -->
                    <label for="name" class="col-sm-3 control-label">First Name <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <!-- Input -->
                        <input type="text" name="first_name" value="" placeholder="First Name" class="form-control" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <!-- Label -->
                    <label for="name" class="col-sm-3 control-label">Last Name <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <!-- Input -->
                        <input type="text" name="last_name" value="" placeholder="Last Name" class="form-control" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="email" name="useremail" value="" placeholder="Email" class="form-control" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 col-xs-9 control-label">Resgister as Agency:</label>
                    <div class="col-sm-9 col-xs-3">
                        <input type="checkbox" id="myCheck" name="checkboxAg">
                    </div>
                </div>
                <div id="adiv" style="display: none;">
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="company_name" value="" placeholder="Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Website</label>
                        <div class="col-sm-9">
                            <input type="text" name="website" value="" placeholder="Website" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" value="" placeholder="Phone" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input id="repassword" type="password" name="repassword" placeholder="Confirm Password" class="form-control" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input type="hidden" name="terms_conditon" id="terms_conditon" value="checked">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="terms_conditon_field" id="terms_conditon_field">
                                I have read the <a target="_blank" href="#">Terms and Condition</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <!-- Buton -->
                        <input style="background-color: #db2d2e;" type="submit" class="btn btn-success" value="Register">&nbsp;
						<span class="or_center">OR</span>
                         <a  id="signin-modalclose" href="#" class="btn btn-success" class="black">Login</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-default reset reset-bt-btn" data-dismiss="modal">Close</button>
        </div>
    </div>
      
    </div>
  </div>
   <!-- Modal -->
	  <div class="modal fade" id="Modalregsuc1" role="dialog" >
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Notification</h4>
			</div>
			<div class="modal-body">
			  <p id="alert-message-gall">Thank you for registering your account have been created and Post have been added to the website</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	<div class="modal fade" id="Modalreg-suc" role="dialog" >
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Notification</h4>
			</div>
			<div class="modal-body">
			  <p id="alert-message-gall">Thank you for registering your account have been created </p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	</div>
	  
	  
	  
	<div class="modal fade" id="ModalForgotpass" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close reset" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><span class="fa fa-sign-in"></span> Forgot Password Form</h4>
        			
        			<div class="focouscls alert alert-success" id="reg-forgot" style="display:none;">
        			Thank you for new password .New password has been send your registered email.
        			</div>
        			<div class="focouscls alert alert-danger" id="forgot-danger" style="display:none;">
        			This email is not registered with any account.Please try with your vaild email 
        			</div>
                </div>
                <div class="modal-body">
                    <form style="max-width: 615px" class="form-horizontal" role="form" novalidate="" action=""  method="post" id="my_form_forgot_pass">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" name="useremail" value="" placeholder="Email" class="form-control" required="true">
                            </div>
                        </div>
        
                           
                             
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <!-- Buton -->
                                <input type="submit" class="btn btn-success" value="Forgot Password">&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  
                 <button type="button" class="btn btn-default reset reset-bt-btn " data-dismiss="modal">Close</button>
                </div>
            </div>
      
        </div>
    </div>

