<style>
.mt-10{margin-top:10px !important;}
.mt-20{margin-top:20px !important;}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="usermana">
         <i class="fa fa-users"></i>Edit Brand
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
                 <form action="<?php echo base_url();?>administrator/editbrand/<?php echo $this->uri->segment(3);?>" method="post" role="form" novalidate=""  id="my_add_brand">
					<div class="row">
					
					<div class="col-md-12">
							   <label class="control-label">Brand Name</label>
							   <input type="text" name="brandName" placeholder="Brand Name"  class="form-control" required="true" value="<?php echo $Records['name'];?>">
							</div>
							 <div class="col-md-12">
						
						<input type="submit" name="submit" class="btn btn-success mt-10" value="Update">
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