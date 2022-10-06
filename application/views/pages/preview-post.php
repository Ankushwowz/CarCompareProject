<!-- ========== PORTFOLIO SECTION ========== -->
<style>
 .listingviewcontent ul li{
        list-style: disc!important;
    }
    .listingviewcontent ol li{
        list-style: inherit!important;
    }
</style>
<section id="portfolio" class="">
   <div class="page-heading-two">
      <div class="container">
	  
         <!--<div class="col-md-7">
            <h5>Preview  car <span>Put your car info</span></h5>
         </div>-->
         <div class="col-md-12">
            <div class="breads">
               <a href="<?php echo base_url();?>">Home</a> / Preview  car        
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="container div_center">
      <div class="col-md-8">
         <form action="" method="post" role="form" novalidate="" class="form-horizontal" enctype="multipart/form-data" id="my_form_sell_a_car">
            <div class="row">
		
               <h4>Preview your Advert details before Publishing to live website</h4>
               <div class="col-md-6">
                  <label class="control-label" for="">Advert Type : </label>
				  <?php if(!empty($Records['advert_type'])){
						if($Records['advert_type']=='sell'){ echo"For Sale";}
						if($Records['advert_type']=='rent'){ echo"For Rent";}
					 }?>
                
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Categories: </label>
                <?php if(!empty($Records['categoryName'])){ echo $Records['categoryName'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Car Brand : </label>
                   <?php if(!empty($Records['brandname'])){ echo $Records['brandname'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Car Model :</label>
                  <?php if(!empty($Records['modalname'])){ echo $Records['modalname'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Year Of Manufacture :</label>       
				  <?php if(!empty($Records['year'])){ echo $Records['year'];}?>                        
                  
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Year Of import :</label>
                 <?php if(!empty($Records['yearofimport'])){ echo $Records['yearofimport'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Currency :</label>
                  <?php if(!empty($Records['currency'])){ echo $Records['currency'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Price (For Rent per day) :</label>
                   <?php if(!empty($Records['price'])){ echo $Records['price'];}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Mileage(km) :</label>
				  <?php if(!empty($Records['mileage'])){ echo $Records['mileage'];}?>
                 
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Transmission :</label>
                  <?php if(!empty($Records['transmission'])){ echo ucfirst($Records['transmission']);}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Condition :</label>
                 <?php if(!empty($Records['condition'])){ echo ucfirst($Records['condition']);}?>
               </div>
               <div class="col-md-6">
                  <label class="control-label" for="">Fuel Type :</label>
                   <?php if(!empty($Records['fuel_type'])){ echo ucfirst($Records['fuel_type']);}?>
               </div>
               <div class="clearfix pt_40"></div>
               <hr/>
               <h4>Advert Detail</h4>
               <div class="col-md-6">
                  <label class="control-label">Phone :</label>                                
                  <?php if(!empty($Records['phone_no'])){ echo $Records['phone_no'];}?>
                  
               </div>
               <div class="col-md-6">
                  <label class="control-label">Email :</label>
                 <?php if(!empty($Records['email'])){ echo $Records['email'];}?>
                 
               </div>
               
               <div class="col-md-6">
                  <label class="control-label">Location :</label>
                   <?php if(!empty($Records['location'])){ echo $Records['location'];}?>
               </div>
              
               <div class="tabbable py_20">
                 
                  <div class="tab-content listingviewcontent" id="myTabContent2">
                     <div id="en-1" class="tab-pane fade in active">
                        <div class="col-md-6">
                           <label class="control-label">Listing Name :</label>
                           <?php if(!empty($Records['title'])){ echo $Records['title'];}?>
                        </div>
                        <div class="col-md-12">
                            
                            
                           <label class="control-label">Listing Description :</label>   <?php if(!empty($Records['description'])){ echo $Records['description'];}?>
                        </div>
                     </div>
                  </div>
               </div>
			       <div class="clearfix py_20 "></div>
               
            
				 
               <div class="clearfix py_20 "></div>
			  <div class="col-md-6">
                  <label class="control-label">Featured Image</label>
                  <div class="featured-img">
				  <?php if(!empty($Records['featured_img'])){?>
				  <img id="featured-img" src="<?php echo base_url();?>assets/upload/gallary/<?php echo $Records['featured_img'];?>">
				  <?php 
				  }else  {?>
				   <!--<img id="featured-img" src="<?php //echo base_url();?>assets/img/no-image.png">-->
				  <?php } ?>
               
				
                  </div>
               </div>
               <div class="col-md-6">
                  <label class="control-label">Gallery</label>
				 <div id="img-preview" class="row"> 
				<?php foreach($galleryRecords as $value){?>
				<div class="col-md-4" id="<?php echo $value->id?>"><div class="thumbnail">
				<img src="<?php echo base_url();?>assets/upload/gallary/<?php echo $value->image;?>" />
				
				</div></div>
				<?php } ?>
				
				  
				  
               </div>
               </div>
                   
           <div class="clearfix pt_40"></div>
               <hr/>
               <h4>Please Add Other Information Of Your Vehicle (Optional)</h4>
               <div class="col-md-6">
                  <label class="control-label">No of Seats :</label>                                
                <?php if(!empty($Records['noofSeats'])){ echo $Records['noofSeats'];}?>
				 
                  
               </div>
               <div class="col-md-6">
                  <label class="control-label">Safety Rating :</label>
				  <?php if(!empty($Records['safetyRating'])){ echo $Records['safetyRating'];}?>
				
                 
               </div>
               <div class="col-md-6">
                  <label class="control-label">SGS Certification :</label>
				   <?php if(!empty($Records['SGS'])){ echo $Records['SGS'];}?>
				</div>
              
             
            </div>
            <div class="row">
               <div class="col-md-12 pt_40">
                  <div class="form-group" style="text-align:center">
					<input type="hidden" id="user_id" name="user_id" value="<?php 
                        if(!empty($this->session->userdata('user_id'))){ echo $this->session->userdata('user_id'); } ?>" >
						<?php if(!empty($Records['package']) && $Records['package']=='basic'){?>
						<a href="#" class="btn btn-success savepublish" rel="<?php echo $Records['id'] ?>">Save & Publish</a> <?php } ?>
						
						<?php 
						if($Records['user_type']==3){
						if(!empty($Records['package']) && $Records['package']=='premium'){ ?>
						<a href="#" class="btn btn-success savepublish" rel="<?php echo $Records['id'] ?>">Save & Publish</a>
						<?php } } ?>
						
						<?php 
						if($Records['user_type']==2){
						if(!empty($Records['package']) && $Records['package']=='premium'){ ?>
						<a href="<?php echo base_url();?>pesapal/pay/<?php echo $Records['id'] ?>" class="btn btn-success">Save & Publish</a>
						<?php } } ?>
					
					<a href="<?php echo base_url();?>editvehicle/<?php echo base64_encode($Records['id']);?>" class="btn btn-primary">Edit</a> 
                  </div>
               </div>
            </div>
        </form>
     
	 </div>
   </div>
   


	  

</section>