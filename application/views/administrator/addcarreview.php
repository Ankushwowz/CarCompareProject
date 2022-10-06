<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-users"></i>Add New Car Review
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
                 <form action="<?php echo base_url();?>administrator/addcarreview" method="post" role="form" novalidate=""   enctype="multipart/form-data" id="my_add_car_review">
					<div class="row">
							<div class="col-md-12">
								   <label class="control-label">Title</label>
								   <input type="text" name="title" placeholder="Title"  class="form-control" required="true">
							</div>
							<div class="col-md-12">
							   <label class="control-label">Short Description</label>
							   <textarea id="editor1" name="shortdescription" placeholder="Short Description"  class="form-control"></textarea>
							</div>
							<div class="col-md-12">
							   <label class="control-label">Description</label>
							   <textarea id="editor2" name="description" placeholder="Description"  class="form-control"></textarea>
							</div>
							<div class="col-md-12">
							   <label class="control-label">Featured Image</label>
							   <input type="file" name="userfile" placeholder="Title"  class="form-control" required="true">
							</div>
							</div>
							
							<div class="row">
							<div class="col-md-12">
						
						<input type="submit" name="submit" class="btn btn-success savesucessness" value="Save">
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