<?php
$url =explode('/',$_SERVER['REQUEST_URI']);
$pageUrls = $url[3]; 
//echo "<pre>"; print_r($url[3]); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Car Compare | Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<style>
    .login-logo a, .register-logo a {
    color: #ffff !important;
}
img.sellingadmin_img {
    margin-bottom: -30px;
}
</style> 
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <?php if($pageUrls == 'corporate-administrator'){ ?>
  <body class="hold-transition" style="background: url(<?php echo base_url();?>assets/img/bg-img.jpg); background-size: cover; background-repeat: no-repeat;">
     <?php } else { ?>
   <body class="hold-transition adminhold" style="background: url(<?php echo base_url();?>assets/img/wallpaper2you_117217.jpg); background-size: cover; background-repeat: no-repeat;">
     <?php } ?>

      
      
    <div class="login-box ">
        <div class="loginalignadmin">
      <div class="login-logo">
          <?php if($pageUrls == 'corporate-administrator'){ ?>
       
        <a href="#"><b>Corporate</b><br>Admin Panel</a>
        
        <?php } else { ?>
        <a href="https://oxeenit.tech/carcompare/dev/" class="">   
         <img src="<?php echo base_url();?>assets/img/logo (3).png" class="sellingadmin_img"></a>
        <a href="#"><b></b><br>Admin Panel</a>
        <?php } ?>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></p>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
        <form action="<?php echo base_url(); ?>administrator" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          
          <?php if($pageUrls == 'corporate-administrator'){ ?>
          <div class="form-group has-feedback">
                        <div class="col-sm-9">
                            <a href="<?php echo base_url(); ?>forget-password" id="forget-password" class="black">Forgot Password</a>
                        </div>
                    </div>
            <?php } ?>        
          
          <div class="row">
            <div class="col-xs-8">    
                              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In"  name="SignIn"/>
            </div><!-- /.col -->
          </div>
        </form>

       </div>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>