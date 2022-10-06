<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="usermana">
         <i class="fa fa-users"></i>Theme Setting
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
                 <form action="<?php echo base_url();?>administrator/theme-setting" method="post" role="form" >
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 1 Title</label>
							   <input type="text" name="section1" placeholder="Section 1 Title"  class="form-control" required  value="<?php if(!empty($themesetting['section1'])) { echo $themesetting['section1']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 1 Content</label>
							   <textarea id="editor1" name="section2" placeholder="Section 1 Title"  class="form-control"><?php if(!empty($themesetting['section2'])) { echo $themesetting['section2']; }?></textarea>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 2 Title</label>
							   <input type="text" name="section3" placeholder="Section 2 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section3'])) { echo $themesetting['section3']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 2 Content</label>
							   <textarea id="editor2" name="section4"   class="form-control"><?php if(!empty($themesetting['section4'])) { echo $themesetting['section4']; }?></textarea>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 3 Title</label>
							   <input type="text" name="section5" placeholder="Section 3 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section5'])) { echo $themesetting['section5']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 3 Content</label>
							   <textarea id="editor3" name="section6"   class="form-control"><?php if(!empty($themesetting['section6'])) { echo $themesetting['section6']; }?></textarea>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 4 Title</label>
							   <input type="text" name="section7" placeholder="Section 4 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section7'])) { echo $themesetting['section7']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 4 Content</label>
							   <textarea id="editor4" name="section8"   class="form-control"><?php if(!empty($themesetting['section8'])) { echo $themesetting['section8']; }?></textarea>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 5 Title</label>
							   <input type="text" name="section9" placeholder="Section 5 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section9'])) { echo $themesetting['section9']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 5 Content</label>
							   <textarea id="editor5" name="section10"   class="form-control"><?php if(!empty($themesetting['section10'])) { echo $themesetting['section10']; }?></textarea>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 6 Title</label>
							   <input type="text" name="section11" placeholder="Section 6 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section11'])) { echo $themesetting['section11']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 6 Content</label>
							   <textarea id="editor6" name="section12"   class="form-control"><?php if(!empty($themesetting['section12'])) { echo $themesetting['section12']; }?></textarea>
					</div>
					</div>
					<div class="row">
					
					<div class="col-md-12">
							   <label class="control-label">About Us Content</label>
							   <textarea id="editor7" name="section13"   class="form-control"><?php if(!empty($themesetting['section13'])) { echo $themesetting['section13']; }?></textarea>
					</div>
					</div>
					<div class="row">
					
					<div class="col-md-12">
							   <label class="control-label">Contact Us</label>
							   <textarea id="editor8" name="section14"   class="form-control"><?php if(!empty($themesetting['section14'])) { echo $themesetting['section14']; }?></textarea>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-12">
							   <label class="control-label">Section 7 Title</label>
							   <input type="text" name="section15" placeholder="Section 7 Title"  class="form-control" required="true" value="<?php if(!empty($themesetting['section15'])) { echo $themesetting['section15']; }?>">
					</div>
					<div class="col-md-12">
							   <label class="control-label">Section 7 Content</label>
							   <textarea id="editor9" name="section16"   class="form-control"><?php if(!empty($themesetting['section16'])) { echo $themesetting['section16']; }?></textarea>
					</div>
					</div>
					
					
					
					<div class="row">
					<div class="col-md-12 saveusbtn">
						 <input type="submit" name="submit" class="btn btn-success" value="Save">
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