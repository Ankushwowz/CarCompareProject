<?php $url= explode('/',$_SERVER['REQUEST_URI']);

//echo"<pre>"; print_r($url); die(); ?>
<style>
.dash-menu-active {color:#fff !important;}
/*.activecls {background:#dd4b39 !important;}*/
.activecls {background:#3259ca !important;}
</style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car Compare - Search Buy Sell Cars</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
	
   
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <style>
  .logged-in-user-info img {
    width: 47px;
    margin: 10px 0 0 20px;
    float: left;
    border-radius: 50%;
}
  </style>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Logo -->
			<a href="<?php echo base_url();?>" class="logo">
			<small>
			    <img src="<?php echo base_url();?>assets/img/logo.png" style="height:45px;margin-top:5px;">
		    </small>
			</a>
          <!-- Sidebar toggle button-->
		  <?php $userdata = $this->administrator_model->getinfo();?>
            <div class="pull-right logged-in-user-info">
        		<?php if(!empty($userdata['profile_image'])){?>
        		<img class="thumbnail" src="<?php echo base_url();?>assets/upload/profile/thumbnail/<?php echo   $userdata['profile_image']; ?>" style="">
        		<?php } else{ ?>
        		<img class="thumbnail" src="<?php echo base_url();?>assets/img/download.jfif" style="">
        		<?php } ?>
        		<span style="user_details">
        		    <div>
        		        <b>Logged in as :</b>  <?php if(!empty($userdata['first_name'])) {echo $userdata['first_name'];}?>
        		    </div>
        		    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                          <!-- User Account: style can be found in dropdown.less -->
                          <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <span class="hidden-xs">Welcome <?php 
            					if(!empty($this->session->userdata('email'))) { echo $this->session->userdata('email');}?></span>
                            </a>
                          </li>
                        </ul>
                    </div>
        		</span>
    		
	        </div>
        </nav>
        <div class="dahsboard-page-heading">
             <div class="dashboard_pages">
                <h5><a href="<?php echo base_url();?>">Home</a> / <?php if(in_array('dashboard',$url)) { echo "Dashboard";}?> <?php if(in_array('users',$url)) { echo "Manage User";}?>
				<?php if(in_array('category',$url)) { echo "Body Types";}?> 
				<?php if(in_array('brand',$url)) { echo "Manage Brand";}?> 
				<?php if(in_array('model',$url)) { echo "Manage Model";}?> 
				<?php if(in_array('theme-setting',$url)) { echo "Theme Setting";}?> 
				<?php if(in_array('carreview',$url)) { echo "Car Review";}?> 
				<?php if(in_array('sell-car',$url)) { echo "Manage Sell Car";}?> 
				<?php if(in_array('editprofile',$url)) { echo "Profile";}?> 
				
				</h5>
             </div>
        </div>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <div id="toggle"><span></span></div>
      <aside class="main-sidebar" id="dashborad_menu">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            
            <li class="<?php if(in_array('dashboard',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>dashboard" class="<?php if(in_array('dashboard',$url)) { echo "dash-menu-active";}?>">
                <span>Welcome to Dashboard</span>
              </a>
            </li>
			<?php if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==1) {?>
            <li  class="<?php if(in_array('users',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/users" class="<?php if(in_array('users',$url)) { echo "dash-menu-active";}?>">
                <span>Manage User</span>
              </a>
            </li>
			
			<li  class="<?php if(in_array('corporateusers',$url) || in_array('createuser',$url) || in_array('edituser',$url) ) { echo "activecls";}?>">
             <a href="<?php echo base_url(); ?>administrator/corporateusers" class="<?php if(in_array('corporateusers',$url) || in_array('createuser',$url) || in_array('edituser',$url)) { echo "dash-menu-active";}?>">
                <span>Corporate Vendors</span>
              </a>
            </li>
			
			 <li  class="<?php if(in_array('category',$url) || in_array('addcategory',$url) || in_array('editcategory',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/category" class="<?php if(in_array('category',$url) || in_array('addcategory',$url) || in_array('editcategory',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Body Types</span>
              </a>
            </li>
			 <li  class="<?php if(in_array('brand',$url) || in_array('addbrand',$url) || in_array('editbrand',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/brand" class="<?php if(in_array('brand',$url) || in_array('addbrand',$url) || in_array('editbrand',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Brand</span>
              </a>
            </li>
			<li  class="<?php if(in_array('model',$url) || in_array('addmodel',$url) || in_array('editmodel',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/model" class="<?php if(in_array('model',$url) || in_array('addmodel',$url) || in_array('editmodel',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Model</span>
              </a>
            </li>
			 <li  class="<?php if(in_array('theme-setting',$url) ) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/theme-setting" class="<?php if(in_array('theme-setting',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Theme Setting</span>
              </a>
            </li>
			 <li  class="<?php if(in_array('carreview',$url) || in_array('addcarreview',$url) || in_array('editcarreview',$url) ) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/carreview" class="<?php if(in_array('carreview',$url) || in_array('addcarreview',$url) || in_array('editcarreview',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Car Review</span>
              </a>
            </li>
				<li  class="<?php if(in_array('sell-car',$url) || in_array('edit-vehicle',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/sell-car" class="<?php if(in_array('sell-car',$url)) { echo "dash-menu-active";}?>">
                <span>Sell Car</span>
              </a>
            </li>
			<?php } ?>
			
		
			
			<?php if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==2) {?>
				<li  class="<?php if(in_array('post-ad',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>post-ad" class="<?php if(in_array('post-ad',$url)) { echo "dash-menu-active";}?>">
                <span>Add Inventory</span>
              </a>
            </li>
			<li  class="<?php if(in_array('sell-car',$url) || in_array('edit-vehicle',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/sell-car" class="<?php if(in_array('sell-car',$url)) { echo "dash-menu-active";}?>">
                <span>Listed Inventory</span>
              </a>
            </li>
			<?php } ?>
			
			<?php if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==3) {?>
			
			<li  class="<?php if(in_array('post-ad',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>post-ad" class="<?php if(in_array('post-ad',$url)) { echo "dash-menu-active";}?>">
                <span>Add Inventory</span>
              </a>
            </li>
			<li  class="<?php if(in_array('sell-car',$url) || in_array('edit-vehicle',$url)) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/sell-car" class="<?php if(in_array('sell-car',$url)) { echo "dash-menu-active";}?>">
                <span>Listed Inventory</span>
              </a>
            </li>
			
			
			
			<!--<li  class="<?php //if(in_array('carreview',$url) || in_array('addcarreview',$url) || in_array('editcarreview',$url) ) { echo "activecls";}?>">
              <a href="<?php echo base_url(); ?>administrator/carreview" class="<?php //if(in_array('carreview',$url) || in_array('addcarreview',$url) || in_array('editcarreview',$url)) { echo "dash-menu-active";}?>">
                <span>Manage Car Review</span>
              </a>
            </li>-->
			<?php } ?>
			 <li class="<?php if(in_array('editprofile',$url)) { echo "activecls";}?>">
              <a  class="<?php if(in_array('editprofile',$url)) { echo "dash-menu-active";}?>" href="<?php echo base_url(); ?>administrator/editprofile">
                <span>My Profile</span>
              </a>
            </li>
			<?php if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==1) {?>
             <li>
              <a href="<?php echo base_url(); ?>administrator/logoutbyadmin">
                <span>Logout</span>
              </a>
            </li>
			
			<?php }else if(!empty($this->session->userdata('role')) && $this->session->userdata('role')==3) { ?>
			 <li>
              <a href="<?php echo base_url(); ?>administrator/logoutbycorporate">
                <span>Logout</span>
              </a>
            </li>
			<?php } else {?>
			
			<li>
              <a href="<?php echo base_url(); ?>logout">
                <span>Logout</span>
              </a>
            </li>
			
			<?php } ?>
         
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      
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