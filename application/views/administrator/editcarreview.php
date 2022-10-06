<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="usermana">
         <i class="fa fa-users"></i>Edit Car Review
         <small></small>
      </h1>
   </section>
   <section class="content">
      
      <div class="row">
         <div class="col-xs-12">
            <div class="box admin-box">
               <!-- /.box-header -->
               <div class="box-body table-responsive">
                 <form action="<?php echo base_url();?>administrator/editcarreview/<?php echo $this->uri->segment(3);?>" method="post" role="form" novalidate=""   enctype="multipart/form-data" id="my_add_car_review">
					<div class="row">
							<div class="col-md-12">
								   <label class="control-label">Title</label>
								   <input type="text" name="title" placeholder="Title"  class="form-control" required="true" value="<?php if(!empty($result['title'])) {echo $result['title'];}?>">
							</div>
							<div class="col-md-12">
							   <label class="control-label">Short Description</label>
							   <textarea id="editor1" name="shortdescription" placeholder="Short Description"  class="form-control"><?php if(!empty($result['shortdescription'])) {echo $result['shortdescription'];}?></textarea>
							</div>
							<div class="col-md-12">
							   <label class="control-label">Description</label>
							   <textarea id="editor2" name="description" placeholder="Description"  class="form-control"><?php if(!empty($result['description'])) {echo $result['description'];}?></textarea>
							</div>
							<div class="col-md-12">
							   <label class="control-label">Featured Image</label>
							   <input type="file" name="userfile" placeholder="Title"  class="form-control" >
							   <input type="hidden" name="olduserfile"   class="form-control"  value="<?php if(!empty($result['featured_img'])) {echo $result['featured_img'];}?>">
							</div>
							</div>
							
							<div class="row">
							<div class="col-md-12">
						
						<input type="submit" name="submit" class="btn btn-success saveusbtn" value="Save">
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