   <!-- ========== TEXT SLIDER SECTION ========== -->
         <section class="advanced-slider-wrapper">
            <div class="container">
               <div class="col-md-12 col-sm-8 col-xs-12">
                  <div class="home-search-panel">
                     <div class="re-big-form">
                        <div class="nav-tabs-two search-panel-tab">
                           <!-- Tab content -->
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab-1">
								<h3 class="perfecth">FIND YOUR PERFECT RIDE</h3>
                                 <form role="form" action="<?php echo base_url();?>vehicle/advresults" method="post" id="home-search-form">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                      <div class="form-group">
                                                         <label class="control-label">Location</label>
                                                         <select name="state" id="state" class="form-control  search-location filter-change">
                                                            
            												<option value="">Select Location</option>
            												<?php  foreach($carState as $value){?>
            												<option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
            												<?php } ?>
                                                         </select>
                                                      </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <label for="input-11">Advert Type</label>
                                                            <select name="advert_type" id="advert_type" class="form-control advert-type filter-change">
                                                                <option value="">Select Advert Type</option>
                                                                <option value="sell">For Sell</option>
                                                                <option value="rent">For Rent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                      <div class="form-group">
                                                         <label for="input-11">Condition</label>
                                                         <select name="condition" id="condition" class="form-control car-condition filter-change">
                                                            <option  value="">Select Condition</option>
                                                            <option  value="new" >New</option>
                                                            <option value="used" >Used</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                       <div class="form-group">
                                                         <label for="input-14">Car Category</label>
            											 <select id="category_id" name="category" class="form-control search-category filter-change">
            											 <option value="">Select Category</option>
            												 <?php  foreach($carCategories as $value){?>
            											<option value="<?php echo $value->id;?>"><?php echo $value->title;?></option>
            											<?php } ?>
            											 </select>
                                                      </div>
                                                   </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
        										        <div class="form-group">
                                                            <label for="input-11">Car Brand</label>
                                                            <select name="brand" id="home-select-brand" class="form-control  car-brand filter-change">
                												<option value="">Select Brand</option>
                												<?php /*foreach($carBrandmodels as $value){?>
                												<option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                												<?php }*/ ?>
                											</select>
                                                        </div>
        										    </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
        										        <div class="form-group">
                                                             <label for="input-11">Car Model</label>
                                                             <select name="model" id="select-model" class="form-control model filter-change">
                                                                <option value="">Select Model</option>
                												
                                                             </select>
                                                        </div>
                                                    </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                  <div class="form-group">
                                                     <label for="input-11">Fuel Type</label>
                                                     <select name="fuel_type" id="fuel_type" class="form-control fueltype filter-change">
                                                        <option value="">Select Fuel Type</option>
                                                        <option value="gas" >Gas</option>
                                                        <option value="diesel" >Diesel</option>
                                                        <option value="petrol" >Petrol</option>
                                                        <option  value="octane" >Octane</option>
                                                        <option  value="electricity" >Electricity</option>
                                                        
                                                     </select>
                                                  </div>
                                               </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                  <div class="form-group">
                                                     <label for="input-11">Mileage Range</label>
                                                     <select name="mileage_range" id="mileage_range" class="form-control mileage-range filter-change">
        												<option value="">Select Mileage</option>
        												<?php foreach($mileage as $key=>$value){ ?>
        												<option value="<?php echo $key;?>"><?php echo $value;?></option>
        												<?php }?>
                                                     </select>
                                                  </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-6">
                                                    <div class="form-group">
                                                     <button type="submit" id="filter-search" class="btn  w-100 colrblues"><i class="fa fa-search"></i>&nbsp; Search Cars <span id="countrec">(<?php echo $searchcount;?>)</span><span id="loading-img"><img  style="display:none;" id="homeloading" src="<?php echo base_url();?>assets/img/loader_2.gif"></span></button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-6 text-center set-header-align">
                                                   <button type="submit" id="filter-search" class="btn  w-100 advancecolrs"> <a href="<?php echo base_url();?>advance-search" class="text-right" style="margin-left: auto;color: #fff !important;"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Advanced Search</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </form>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="banner">
                <img src="<?php echo base_url();?>assets/img/banner_img.jpg" class="banner_img">
            </div>
         </section>
         <!-- //End simple slider -- >
            <!-- ========== PORTFOLIO SECTION ========== -->
         <section id="portfolio" class="hportfolio">
            <div class="featured_box_section bg_gray">
               <div class="container main-container">
                  <div class="row">
                     <?php if(!empty($themesetting['section1'])) {?>
					 <div class="col-md-3">
                        <div class="featured_box">
                           <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/selling.png" class="selling_img">
                           </div>
                           <div class="featured_contant">
                              <a  class="ahrefsection" href="<?php echo base_url();?>post-ad"><h3><?php if(!empty($themesetting['section1'])) { echo $themesetting['section1']; }?></h3></a>
                              <p><?php if(!empty($themesetting['section2'])) { echo $themesetting['section2']; }?></p>
                           </div>
                        </div>
                     </div><?php 
					 }
					 ?>
					 <?php if(!empty($themesetting['section3'])) {?>
                     <div class="col-md-3">
                        <div class="featured_box">
                           <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/clipboard.png" class="selling_img">
                           </div>
                           <div class="featured_contant">
                               <a class="ahrefsection"  href="<?php echo base_url();?>contact-us"><h3><?php if(!empty($themesetting['section3'])) { echo $themesetting['section3']; }?></h3></a>
                              <p><?php if(!empty($themesetting['section4'])) { echo $themesetting['section4']; }?></p>
                           </div>
                        </div>
                     </div><?php 
					 }
					 ?>
                    <?php if(!empty($themesetting['section5'])) {?>
                     <div class="col-md-3">
                        <div class="featured_box">
                           <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/save-money (1).png" class="selling_img">
                           </div>
                           <div class="featured_contant">
                               <a class="ahrefsection"  href="<?php echo base_url();?>contact-us"> <h3><?php if(!empty($themesetting['section5'])) { echo $themesetting['section5']; }?></h3></a>
                              <p><?php if(!empty($themesetting['section6'])) { echo $themesetting['section6']; }?></p>
                           </div>
                        </div>
                     </div><?php 
					 }
					 ?>
					<?php if(!empty($themesetting['section15'])) {?>
                     <div class="col-md-3">
                        <div class="featured_box">
                           <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/stock.png" class="selling_img">
                           </div>
                           <div class="featured_contant">
                               <a class="ahrefsection"  href="<?php echo base_url();?>contact-us"><h3><?php if(!empty($themesetting['section15'])) { echo $themesetting['section15']; }?></h3></a>
                              <p><?php if(!empty($themesetting['section16'])) { echo $themesetting['section16']; }?></p>
                           </div>
                        </div>
                     </div><?php 
					 }
					 ?>
                  </div>
               </div>
            </div>
            <!-- Container -->
			<div class="container main-container">
			   <div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12 content-body">
					 <div class="block-heading-two">
						<h3>
						   <span><i class="fa fa-clock-o"></i> Latest car deals</span>
						   
						</h3>
					 </div>
					 <span class="recent-posts">
						<div class="row text-center grid-box">
						<?php foreach($latestPost as $latestPost) {?>
						
						   <div class="col-md-4 mb-3">
							  <div class="item grid-box-item hp-listing">
								<div class="image-style-one">
    								<a href="<?php echo base_url();?>viechle/<?php echo  base64_encode($latestPost->id);?>">
    								     <?php if(!empty($latestPost->featured_img)) {?>
    									   <img class="img-responsive" alt="test carrrrr" src="<?php echo base_url();?>assets/upload/gallary/<?php echo $latestPost->featured_img;?>">
    									 <?php } else { ?>
    									<img class="img-responsive" src="<?php echo base_url();?>assets/img/no-image.png"><?php 
    									 }
    									?>									   
    								</a>
								 </div>
								 <!--<div class="listing-share">-->
								 <!--    <button class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></button>-->
								 <!--    <div class="lsharelinks">-->
         <!--                               <a href="https://www.facebook.com/sharer.php?u=https://carcompareug.com/viechle/OTA=" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
         <!--                               <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://carcompareug.com/viechle/OTA=" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->
         <!--                               <a href="https://twitter.com/share?text=Test abcxyz&amp;url=https://carcompareug.com/viechle/OTA=" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
         <!--                               <a href="https://pinterest.com/pin/create/button/?url=https://carcompareug.com/viechle/OTA=" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>-->
         <!--                           </div>-->
								 <!--</div>-->
								 <div class="grid-box-content">
									
									<!--<a style="visibility: hidden;" class="b-tooltip" title="Coupe" href="<?php //echo base_url();?>viechle/<?php //echo  base64_encode($latestPost->id);?>">-->
									<a style="visibility: hidden;" class="b-tooltip" title="Coupe" href="<?php echo base_url();?>viechle/<?php echo  base64_encode($latestPost->id);?>">
									 
									   <!--<?php //if(!empty($latestPost->featured_img)) {?>
									   <img class="fa cat-img-small fa-car bg-orange" alt="test carrrrr" src="<?php //echo base_url();?>assets/upload/gallary/<?php //echo $latestPost->featured_img;?>">
									 <?php //} else { ?>
									<img class="fa cat-img-small fa-car bg-orange" src="<?php //echo base_url();?>assets/img/no-image.png"><?php 
									 //}
									?>-->
									</a>
									<h4 class="item-title indexlatestcars"><a href="<?php echo base_url();?>viechle/<?php echo  base64_encode($latestPost->id);?>"><?php echo ucfirst($latestPost->title);?></a></h4>
									<div class="listing-bn">
									  <?php echo $latestPost->brandname;?> <?php echo $latestPost->modalname;?>              
									</div>
									<div class="lisitngtags">
									    <?php if($latestPost->condition=='new'){?>
    									<span  style="background-color: #00aff0  !important;" class="price-tag rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
    									<?php echo ucfirst($latestPost->condition);?> </span>
    									<?php } else {?>
    									<span  style="background-color: #49bf49  !important;" class="price-tag new_condition rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
    									<?php echo ucfirst($latestPost->condition);?> </span>
    									<?php } ?>
    									
    									<?php if($latestPost->package=='premium'){?>
    									<span style="background-color: #e6a636 !important; left:auto;right:20px;top:3px;" class="condition-tag new_condition rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
    									<?php echo ucfirst($latestPost->package);?> </span><?php } else{?>
    									<span style="background-color: 	#6f5dd2 !important; left:auto;right:20px;top:3px;" class="condition-tag new_condition rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
    									<?php echo ucfirst($latestPost->package);?> </span>
    									<?php } ?>
    									
    									<!--<?php //if(!empty($latestPost->guideprice)){ ?>
    										<span style="background-color: 	#dc3132  !important; left:auto;right:110px;top:3px;" class="condition-tag new_condition rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
    									<?php //echo ucfirst($latestPost->guideprice);?> </span>
    									<?php //} ?>-->
    									
    									<button class="info-dta"><i class="fa fa-tachometer"></i> :<?php echo $latestPost->mileage;?> Miles</button>
    									
									</div>
									<div class="border-set-lisitng"></div>
									<div class="listing-price">
									    <p class="color-set-price"><b>Price</b></p>
									    <div class="lprice">
									    <div class="cat-title" style="font-size: 13px;color:#3286bc;font-weight: bold;">
									        <?php echo $latestPost->currency;?> <?php echo number_format($latestPost->price);?> | <a href="<?php echo base_url(); ?>contact-us" style="color: #156156;" class="finance-offer">Get Finance Offer</a> </div>
									        <?php if(!empty($latestPost->guideprice)){ ?>
    										<span style="left:auto;right:110px;top:3px; margin-left: 5px; font-size: 12px;" class=" newgoodprize" data-toggle="tooltip" data-placement="left" data-original-title="Featured"> |
    									<?php echo ucfirst($latestPost->guideprice);?> </span>
    									<?php } ?>
    									</div>
									</div>
								 </div>
							  </div>
						   </div>
						<?php } ?>
						<?php if(count($latestPost > 25)){ ?>
						<div class="col-md-12 showmore">
						    <a href="<?php echo base_url(); ?>vehicle/advresults" class="btn btn-success">Show More</a>
						</div>
						<?php } ?>
						</div>
					 </span>
				  </div>
			   </div>
			</div>
            <div class="container main-container ">
                <hr>
                <div class="row">
				 <?php if(!empty($themesetting['section7'])) {?>
					  <div class="col-md-6">
						 <div class="buyer_section">
							   <div class="section_heading">
								  <h3><?php if(!empty($themesetting['section7'])) { echo $themesetting['section7']; }?></h3>
								  <p><?php if(!empty($themesetting['section8'])) { echo $themesetting['section8']; }?></p>
								  <a href="<?php echo base_url();?>new-car" class="btn btn-warning w-50">Search for latest cars</a>
							   </div>
						 </div>
					  </div><?php 
					 }
					 ?>
					  <?php if(!empty($themesetting['section9'])) {?>
					  <div class="col-md-6">
						 <div class="buyer_section">
							   <div class="section_heading">
								  <h3><?php if(!empty($themesetting['section9'])) { echo $themesetting['section9']; }?></h3>
								  <p><?php if(!empty($themesetting['section10'])) { echo $themesetting['section10']; }?></p>
								  <a href="" data-toggle="modal" data-target="#ModalForReg" class="btn btn-warning w-50">Become A Dealer</a>
							   </div>
						 </div>
					  </div><?php 
					 }
					 ?>
                
               </div>
            </div>
            <!-- Start News Section-->
            <div class="container blog-one">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <!-- Blog item starts -->
                     <div class="blog-one-item row homeblogs">
                        <!-- blog One Img -->
                       
                        <!-- blog One Content -->
                        <div class="blog-one-content  col-md-9 col-sm-9 col-xs-12">
                           <!-- Heading -->
                           <h3 class="peacefotte"><?php if(!empty($themesetting['section11'])) { echo $themesetting['section11']; }?></h3>
                           <!-- Blog meta -->
                           <!-- Paragraph -->
                           <div class="single-desc"> <?php if(!empty($themesetting['section12'])) { echo $themesetting['section12']; }?></div>
                        </div>
                     </div>
                     <!-- Blog item ends -->
                     
                  </div>
               </div>
            </div>
            <!-- End News Section-->
         </section>
         <!-- //End portfolio -->
         <!-- ==========  SERVICES SECTION  ========== -->
         
         
         
         
		