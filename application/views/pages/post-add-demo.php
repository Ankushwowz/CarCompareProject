<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
   <div class="page-heading-two">
      <div class="container">
	  
         <div class="col-md-7">
            <h5>Add car <span>Put your car info</span></h5>
         </div>
         <div class="col-md-5">
            <div class="breads">
               <a href="<?php echo base_url();?>">Home</a> / Add car        
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="container div_center">
      <div class="col-md-8">
         <form action="<?php echo base_url();?>" method="post" role="form" novalidate="" class="form-horizontal" enctype="multipart/form-data" id="image_upload_form">
            <div class="row">
			<?php if(isset($_GET['msg']) && $_GET['msg']=='success') {?>
			<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			your post has been add successfully.
			</div>
			<?php } ?>
               <h4>Please Add Your Car Details</h4>
               <div class="col-md-6">
                  <label class="control-label" for="">Advert Type</label>
                  <select name="advert_type" class="form-control" required='true'>
                     <option value="">Select Advert Type</option>
                     <option value="sell">For Sell</option>
                     <option value="rent">For Rent</option>
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Categories</label>
                  <select name="category" class="form-control" required='true'>
                     <option value="">Select Category</option>
					 <?php  foreach($carCategories as $value){?>
						 <option value="<?php echo $value->id;?>"><?php echo ucfirst($value->title);?></option>
					 <?php } ?>
                    
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Car Brand</label>
                  <select name="brand" class="form-control" id="select-brand" required='true'> 
                     <option value="">Select Brand</option>
                     <?php foreach($carBrandmodels as $value){?>
						 <option value="<?php echo $value->id;?>"><?php echo ucfirst($value->name);?></option>
					 <?php } ?>
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Car Model</label>
                  <select name="model" class="form-control" id="select-model">
				  <option value="">Select Model</option>
                
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Year Of Manufacture</label>                              
                  <select name="year" class="form-control" required='true'>
                     <option value="">Year Of Manufacture</option>
					 <?php for ($x = 2020; $x >= 1910; $x--) {?>
						<option value="<?php echo $x;?>" ><?php echo $x;?></option>
					 <?php } ?>
                    
            
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Year Of import</label>
                  <select name="yearofimport" class="form-control" required='true'>
                     <option value="">Select Year of Import</option>
                      <?php for ($x = 2021; $x >= 1910; $x--) {?>
						<option value="<?php echo $x;?>" ><?php echo $x;?></option>
					 <?php } ?>
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Currency</label>
                  <select name="currency" class="form-control" required='true'>
                     <option value="">Select Currency</option>
                     <option value="UGX" selected="selected">UGX</option>
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Price (For Rent per day)</label>
                  <input id="price" type="text" name="price" placeholder="Price" value="" class="form-control numbervalidation" required='true'>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Mileage(km)</label>
				   <input id="mileage" type="text" name="mileage" placeholder="Mileage(km)" value="" class="form-control numbervalidation" required='true'>
                  <?php /*<select name="mileage" id="mileage" class="form-control" required='true'>
                     <option value="">Select Mileage</option>
					 <?php foreach($mileage as $key=>$value){ ?>
                     <option value="<?php echo $key;?>"><?php echo $value;?></option>
                     <?php }?>
                  </select>*/
				  ?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Transmission</label>
                  <select name="transmission" class="form-control" required='true'>
                     <option value="">Select Transmission</option>
                     <option value="automatic" >Automatic</option>
                     <option value="manual" >Manual</option>
                     <option value="semi_automatic" >Semi-Automatic</option>
                    
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Condition</label>
                  <select name="condition" class="form-control" required='true'>
                     <option value="">Select Condition</option>
                     <option value="new" >New</option>
                     <option value="used" >Used</option>
                  </select>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Fuel Type</label>
                  <select name="fuel_type" class="form-control" required='true'>
                     <option value="">Select Fuel Type</option>
                     <option value="gas">Gas</option>
                     <option value="diesel">Disel</option>
                     <option value="petrol">Petrol</option>
                     <option value="octane">Octane</option>
                     <option value="electricity">Electricity</option>
                    
                  </select>
               </div>
               <div class="clearfix pt_40"></div>
               <hr/>
               <h4>Advert Detail</h4>
               <div class="col-md-6">
                  <label class="control-label">Phone</label>                                
                  <input id="phone_no" type="text" name="phone_no" placeholder="Phone" value="" class="form-control numbervalidation" required='true'>
                  
               </div>
               <div class="col-md-6">
                  <label class="control-label">Email</label>
                  <input id="email" type="email" name="email" placeholder="Email" value="" class="form-control"  required='true'>
                 
               </div>
               
               <div class="col-md-6">
                  <label class="control-label">Location</label>
                  <select name="state" id="state" class="form-control" required='true'>
				  <option value="">Select Location</option>
				  <?php  foreach($carState as $value){?>
						 <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
					 <?php } ?>
                  </select>
               </div>
              
               <div class="tabbable py_20">
                 
                  <div class="tab-content" id="myTabContent2">
                     <div id="en-1" class="tab-pane fade in active">
                        <div class="col-md-6">
                           <label class="control-label">Listing Name</label>
                           <input maxlength="25" type="text" name="title" placeholder="Listing Name" value="" class="form-control" required='true' >
                        </div>
                        <div class="col-md-12">
                           <label class="control-label">Listing Description</label> <textarea rows="5" name="description" class="form-control" ></textarea>
                        </div>
                     </div>
                  </div>
               </div>
			       <div class="clearfix py_20 "></div>
               <div class="col-md-12">
                  <label class="control-label" style="padding:10px 0;">Please Select The Type Of Advert Listing</label>                     
               </div>
               <div class="col-md-6">
                    <label class="package_basic_btn m-0" for="basic_pack"><input checked  type="radio" id="basic_pack" name="package" value="basic">Basic</label>
                    <div class="pricing-table">
                        <div class="price-heading">
                            <div class="price-group text-center">
                                <span class="price1">Basic</span>
                            </div>
                        </div> <!-- //price-heading -->
                        <ul class="price-feature">
                            <li>Price <span class="pull-right">Kshs0.00</span></li>
                            <li>Limit <span class="pull-right">30 Days</span></li>
                            <li>Gallery <span class="pull-right">5 Photos</span></li>
                        </ul> <!-- //price-feature -->
                       
                    </div>
                </div>
               <div class="col-md-6">
                    <label class="package_premium_btn m-0" for="premium_pack"><input type="radio" id="premium_pack" name="package" value="premium">Premium</label>
                    <div class="pricing-table">
                        <div class="price-heading">
                            <div class="price-group text-center">
                                <span class="price1">Premium</span>
                            </div>
                        </div> <!-- //price-heading -->
                        <ul class="price-feature">
                            <li>Price <span class="pull-right">Kshs200.00</span></li>
                                <li>Limit <span class="pull-right">30 Days</span></li>
                                <li>Gallery <span class="pull-right">20 Photos</span></li>
                            </ul> <!-- //price-feature -->
                       
                    </div>
                </div>
				 
               <div class="clearfix py_20 "></div>
			  <div class="col-md-12" style="margin-bottom:20px;">
			    <span id="imageextension" style="display:none;" class="error-image">Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg</span>
				 <span id="imagefsize"  class="error-image" style="display:none;">File size too large! Please upload less than 1MB</span>
				</div>
               <div class="col-md-6">
                  <label class="control-label">Featured Image[min 300x226]</label>
                  <div class="featured-img">
				  <img id="featured-img" src="<?php echo base_url();?>assets/img/no-image.png">
                    <div class="box">
					<input  style="display:none;" type="file" name="featuredImage" id="featuredImage" class="inputfile inputfile-1"/>
					
					<label for="featuredImage" class="featured_img"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload</span></label>
				</div>
				<input  type="hidden" name="txtfeaturedImage" id="txtfeaturedImage" />
                  </div>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Gallery</label>
				 
                  <?php /*<ul class="multiple-uploads">
				 	<div class="box">
					<input style="display:none;" type="file" name="userfile" id="galleryImage" class="inputfile inputfile-4"   />
					    <label for="galleryImage">
					    <figure class="plus_svg">
					        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
					            <path d="M24 10h-10v-10h-3v10h-10v3h10v10h3v-10h10z"/>
					        </svg>
					   </figure>
					   <!--<span>Choose a file&hellip;</span>-->
				        </label>
					</div>
				  </ul>
                  <div class="clearfix"></div>
				  <div class='progress' id="progress_div" style="display:none;">
					<div class='bar' id='bar'></div>
					<div class='percent' id='percent'>0%</div>
					</div>
					
                  <span class="gallery-upload-instruction"></span>
                  <div class="clearfix clear-top-margin"></div>*/?>
               
			    
				<div class="img-zone text-center" id="img-zone">
                    <div class="img-drop">
                        <h2><small>Drag &amp; Drop Photos Here</small></h2>
                        <p><em>- or -</em></p>
                        <h2><i class="glyphicon glyphicon-camera"></i></h2>
                        <span class="btn btn-success btn-file">
                        Gallery<input type="file" multiple="" accept="image/*">
                    </span>
                    </div>
                </div>
                <div class="progress hidden">
                    <div style="width: 0%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" role="progressbar" class="progress-bar progress-bar-success progress-bar-striped active">
                        <span class="sr-only">0% Complete</span>
                    </div>
					 <span id="sr-only-number">0%</span>
                </div>
           
				<div id="img-preview" class="row"> </div>
			
			   
			   </div>
           <div class="clearfix pt_40"></div>
               <hr/>
               <h4>Please Add Other Information Of Your Vehicle (Optional)</h4>
               <div class="col-md-6">
                  <label class="control-label">No of Seats</label>                                
                 <input type="text" name="noofSeats" class="form-control numbervalidation" >
				  <?php /*<select name="noofSeats" class="form-control" >
                     <option value="">No of Seats</option>
                      <?php for ($x = 1; $x <= 5; $x++) {?>
						<option value="<?php echo $x;?>" ><?php echo $x;?></option>
					 <?php } ?>
                  </select>*/ ?>
                  
               </div>
               <div class="col-md-6">
                  <label class="control-label">Safety Rating</label>
				  <input type="text" name="safetyRating" class="form-control numbervalidation" >
					<?php /*<select name="safetyRating" class="form-control" >
                     <option value="">Safety Rating</option>
                      <?php for ($x = 1; $x <= 5; $x++) {?>
						<option value="<?php echo $x;?>" ><?php echo $x;?></option>
					 <?php } ?>
                  </select>*/ ?>
                 
               </div>
               <div class="col-md-6">
                  <label class="control-label">SGS Certification</label>
				  <input type="text" name="SGS" class="form-control " >
				</div>
              
           
            </div>
			
			   
            <div class="row">
               <div class="col-md-12 pt_40">
                  <div class="form-group" style="text-align:center">
					<input type="hidden" id="user_id" name="user_id" value="<?php 
                        if(!empty($this->session->userdata('user_id'))){ echo $this->session->userdata('user_id'); } ?>" >
					<input type="submit" class="btn btn-success" value="Save & Publish" >
					<input id="imagecount" type="text"  value="0" >
                  </div>
               </div>
            </div>
        </form>
     	<br>
	
	 </div>
   </div>
   
	<!--Image Loader-->
	<div id="loading_img" style="display:none;">
	 <img src="<?php echo base_url();?>assets/img/loading_img.gif"  >
	</div>


	  <!-- Modal -->
	  <div class="modal fade" id="Modal5images" role="dialog" >
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Notification</h4>
			</div>
			<div class="modal-body">
			  <p id="alert-message-gallery"></p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>

</section>