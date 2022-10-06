<style>
.mt-10{margin-top:10px !important;}
.mt-20{margin-top:20px !important;}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-users"></i>Add New Model
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
                 <form action="<?php echo base_url();?>administrator/addmodel" method="post" role="form" novalidate=""  id="my_add_model">
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Brand Name</label>
							  <select  name="brand_id"   class="form-control" required="true">
							  <option value="">Select Brand Name</option>
							  <?php foreach($brand as $brand){?>
							  <option value="<?php echo $brand->id;?>"><?php echo $brand->name;?></option>
							  <?php } ?>
							  </select>
					</div>
					<div class="col-md-12">
							   <label class="control-label mt-10">Body Types Name</label>
							  <select  name="category_id"   class="form-control" required="true">
							  <option value="">Select Body Types Name</option>
							  <?php foreach($category as $category){?>
							  <option value="<?php echo $category->id;?>"><?php echo $category->title;?></option>
							  <?php } ?>
							  </select>
					</div>
					<div class="col-md-12">
							   <label class="control-label mt-10">Model Name</label>
							   <input type="text" name="modelName" placeholder="Model Name"  class="form-control" required="true">
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