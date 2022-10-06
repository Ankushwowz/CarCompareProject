<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/lightbox/dist/css/lightbox.min.css" />
<script src="<?php echo base_url(); ?>assets/lightbox/dist/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
<style>
.fl-rt {
    float: left !important;
    margin-right: 70px;
}
 .listingviewcontent ul li{
        list-style: disc!important;
    }
    .listingviewcontent ol li{
        list-style: inherit!important;
    }
span#amount_val {
    color: red;
}    
</style>

<section id="portfolio" class="hportfolio">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
    	        <div class="breadsd detail-page-breads">
                    <a href="<?php echo base_url();?>">Home</a> / Car detail        
                </div>
            </div>
            <div class="col-md-5">
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <!-- Page heading two ends -->
    <div class="container real-estate" style="padding-top: 10px">
        <!-- Actual content -->
        <div class="rs-property">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="nav-tabs-one">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="p-nav-1">
    
                                <div class="single-property">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class=" single_car_name"><?php if(!empty($Post['title'])) { echo $Post['title']; }?> </span><span class=" float-right"></h2>
                                            <div class="detail-slider">
											<?php if(!empty($Post['featured_img'])) {?>
                                                <a href="<?php echo base_url();?>assets/upload/gallary/<?php echo $Post['featured_img']?>" class="example-image-link" data-lightbox="car1">
                                                    <img src="<?php echo base_url();?>assets/upload/gallary/<?php echo $Post['featured_img']?>" alt="" class="img-responsive" />
                                                </a>
												<?php }else{?>
														
														<img class="img-responsive" src="<?php echo base_url();?>assets/img/no-image.png" />
														<?php }?>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6 pl_lg_0">
                                            	 <div class="sub-cat">
                                                    
                                                    <span class=" float-righ-premimum vichlepricefon">
                                                        <div class="currency-price">
                                                      <?php if(!empty($Post['currency'])) { echo $Post['currency']; }?>&nbsp;<?php if(!empty($Post['price'])) { echo number_format($Post['price']); }?> <?php if($Post['advert_type']=='rent'){ echo"Per Day";}?>
													   </div>
													   <?php if($Post['package']=='basic'){?>
                                                       <span style="background-color:#6f5dd2 !important;"  class="label label-warning"><?php if(!empty($Post['package'])) { echo ucfirst($Post['package']); }?></span><?php } else {?>
													   <span style="background-color:#e6a636 !important;"  class="label label-warning"><?php if(!empty($Post['package'])) { echo ucfirst($Post['package']); }?></span>
													   <?php } ?>
													   
													 
													     <?php if($Post['guideprice']!=''){?>
                                                       <span style="background-color:#3286bc  !important;"  class="label label-warning fl-rt"><?php echo $Post['guideprice']; ?></span><?php } else {?>
													   <span style="background-color:#3286bc  !important;"  class="label label-warning fl-rt"></span>
													   <?php } ?>
                                                    </span>
                                                </div>
                                            <div class="sidebar">
                                                <div class="s-widget">
                                                   <div class="row">
                                                    <div class="widget-content gallery">
													<?php 
													//echo "<pre>"; print_r(count($gallaryImages)); die;
													if(count($gallaryImages) >0){ 
													foreach($gallaryImages as $gallaryImages){
													    //$arrLength = count($gallaryImages);
													    //echo "<pre>"; print_r($gallaryImages); //die;
													?>
                                                        <div class="col-md-4">
                                                        <div class="thumb">
                                                            <a href="<?php echo base_url();?>assets/upload/gallary/<?php echo $gallaryImages->image ;?>" class="example-image-link" data-lightbox="car_gallery">
                                                            <img src="<?php echo base_url();?>assets/upload/gallary/<?php echo $gallaryImages->image;?>" alt="" class="img-responsive" />
                                                            </a>
                                                        </div></div>
											<?php }
											}
											?> 	 
                                                    
                                                    </div>
                                                    <div class="gallery_img galeeryhovescrp"></div>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            
                                        </div>
                                        </div>
                                        <div class="info-box">
                                         <div class="info-field-block">
                                            <div class="fields">
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-flask bg-orange"></i> Advert Type:</span>
                                                    <button class="span-right"><?php if(!empty($Post['advert_type'])) { echo ucfirst($Post['advert_type']); }?></button>
                                                    </div>
                                                </div>
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-flask bg-orange"></i> Condition:</span>
                                                    <button class="span-right"><?php if(!empty($Post['condition'])) { echo ucfirst($Post['condition']); }?></button>
                                                    </div>
                                                </div>
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-diamond bg-green"></i> Brand & Model:</span>
                                                    <button class="span-right"><?php if(!empty($Post['brandname'])) { echo ucfirst($Post['brandname']); }?> <?php if(!empty($Post['modalname'])) { echo ucfirst($Post['modalname']); }?></button>
                                                    </div>
                                                </div>
                                                <div class="field quarter">
                                                     <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-calendar-check-o bg-lblue"></i> Year:</span>
                                                        <button class="span-right"><?php if(!empty($Post['year'])) { echo $Post['year']; }?></button>
                                                    </div>
                                                </div>
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-tachometer bg-purple"></i> Mileage:</span>
                                                    <button class="span-right"><?php if(!empty($Post['mileage'])) { echo $Post['mileage']; }?> Miles</button>
                                                </div>
                                                </div>
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-cogs bg-red"></i> Transmission:</span>
                                                    <button class="span-right"><?php if(!empty($Post['transmission'])) { echo ucfirst($Post['transmission']); }?></button>
                                                </div>
                                                </div>
                                                <div class="field quarter">
                                                    <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-flask bg-orange"></i> Fuel Type:</span>
                                                    <button class="span-right"><?php if(!empty($Post['fuel_type'])) { echo ucfirst($Post['fuel_type']); }?></button>
                                                </div>
                                                </div>
                                                <div class="field quarter">
                                                     <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-flask bg-orange"></i> Body Type:</span>
                                                    <button class="span-right"><?php if(!empty($Post['categoryName'])) { echo ucfirst($Post['categoryName']); }?></button>
                                                </div> 
                                                </div>
                                                <div class="field quarter">
                                                     <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-flask bg-orange"></i> Year Of Import:</span>
                                                    <button class="span-right"><?php if(!empty($Post['yearofimport'])) { echo $Post['yearofimport']; }?></button>
                                                </div>
                                                </div>
                                                <div class="field quarter">
                                                     <div class="ad-detail-info-section">
                                                    <span class="span-left"><i class="fa fa-map-marker bg-blue "></i> Location:</span>
                                                    <button class="span-right"><?php if(!empty($Post['location'])) { echo $Post['location']; }?></button>
                                                </div>
                                                </div>
                                         </div>
                                         </div>
                                                <!--<div class="ad-detail-info">
                                                    <span class="span-left"><i class="fa fa-star bg-yellow price-icon"></i> Review:</span>
                                                    <span class="span-right">
            					                        <span class="stars "><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></span>
            					                        0.0/(0 Votes)
                                                    </span>
                                                </div>-->
                                                
                                                <div class="clearfix"></div>
                                                
                                                <div class="ad-detail-info w-33 mx-0">
                                                    <button id="contact_seller" data-toggle="modal" data-target="#contact_Modal">Contact Seller</button>
                                                </div>
                                                
                                                <div class="ad-detail-info w-33 mx-0">
                                                    <button id="make_an_offer" data-toggle="modal" data-target="#make_offer_contact_Modal">Make An Offer</button>
                                                </div>
                                                <div class="ad-detail-info w-33 mx-0">
                                                    <a href="<?php echo base_url(); ?>contact-us" id="finance_offer">Get Finance Offer</a>
                                                    <!--<button id="make_an_offer" data-toggle="modal" data-target="#make_offer_contact_Modal">Make An Offer</button>-->
                                                </div>
                                                <div class="clearfix"></div>
                                                
                                                <div class="share_icon_div w-100">
                                                    <h3 class="share_label">Share :-</h3>
                                                    <div class="share_icon">
                                                        <a href="https://www.facebook.com/sharer.php?u=https://carcompareug.com/viechle/<?php echo $this->uri->segment(2);?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://carcompareug.com/viechle/<?php echo $this->uri->segment(2);?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                        <a href="https://twitter.com/share?text=<?php if(!empty($Post['title'])) { echo $Post['title']; }?>&url=https://carcompareug.com/viechle/<?php echo $this->uri->segment(2);?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="https://pinterest.com/pin/create/button/?url=https://carcompareug.com/viechle/<?php echo $this->uri->segment(2);?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        <div class="clearfix py-20"></div>
                                        
                                        <div class="col-md-6 listingviewcontent">
                                            <h4 class="info-subtitle">
                                                <!--<i class="fa fa-tasks"></i> -->
                                            Description</h4>
                                            <div class="single-desc"><?php if(!empty($Post['description'])) { echo $Post['description']; }?></div>
                                        </div>
                                        
        
                                        <div class="col-md-6">
                                            <h4 class="info-subtitle">
                                                <!--<i class="fa fa-puzzle-piece"></i>-->
                                            Other Information</h4>
                                            <div class="single-desc">
                                                <ul class="custom-data-list">
                                                   
                                                    <li><span class="span-left">No of Seats:</span><span class="span-right"><?php if(!empty($Post['noofSeats'])) { echo $Post['noofSeats']; }else{echo "N/A"; }?></span><div class="clearfix"></div></li>
                                                    <li><span class="span-left">Safety Rating:</span><span class="span-right"><?php if(!empty($Post['safetyRating'])) { echo $Post['safetyRating']; }else{echo "N/A"; }?></span><div class="clearfix"></div></li>
													  <li><span class="span-left">SGS Certification:</span><span class="span-right"><?php if(!empty($Post['SGS'])) { echo $Post['SGS']; }else{echo "N/A"; }?></span><div class="clearfix"></div></li>
                                                  
                                                </ul>                                        
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact_Modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close reset-close" data-dismiss="modal">&times;</button>
                    <!--<button type="button" class="close reset-close" data-dismiss="modal" aria-hidden="true">X</button>-->
                    <h4 class="modal-title" id="myModalLabel">Contact Seller</h4>
                </div>
                <div class="modal-body">
                    <div class="single-property sp-agent">
                        <div class="clearfix"></div>
                        
                        <div class="rs-enquiry">
							<div class="alert alert-success alert-dismissible" id="csform" style="display:none;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							Your information has been sent successfully.Seller will be contact shortly
							</div>
							<form action="#" method="post" id="contact-seller-form" role="form" novalidate="">
							<input type="hidden" name="post_id" value="<?php if(!empty($Post['id'])) { echo $Post['id']; }?>">
							<input type="hidden" name="seller_id" value="<?php if(!empty($Post['user_id'])) { echo $Post['user_id']; }?>">
							<div class="row">
							<div class="col-md-4 col-sm-4">
							<div class="form-group">
							<label for="enquiryInput1">Name</label>
							<input type="text" placeholder="Name" value="" name="sender_name" id="sender_name" class="form-control" required='true'>
							</div>
							</div>
							<div class="col-md-4 col-sm-4">
							<div class="form-group">
							<label for="enquiryInput2">Email</label>
							<input type="email" placeholder="Email" value="" name="sender_email" id="sender_email" class="form-control" required='true'>
							</div>
							</div>
							<div class="col-md-4 col-sm-4">
							<div class="form-group">
							<label for="enquiryInput3">Phone</label>
							<input type="text" placeholder="Phone" value="" name="phone" id="phone" class="form-control numbervalidation"  maxlength="10" required='true'>
							</div>
							</div>
							</div>
							<div class="form-group">
							<label for="enquiryInput3">Subject</label>
							<input type="text" placeholder="Subject" value="" name="subject" id="subject" class="form-control" required='true'>
							</div>
							<div class="form-group">
							<label for="enquiryInput4">Message</label>
							<textarea rows="7" placeholder="Message" name="msg" id="msg" class="form-control"></textarea>
							</div>
							

							<div class="clear-top-margin"></div>
							<input class="btn btn-primary mt-3" type="submit" value="Send">
							</form>
                            <div class="clearfix"></div>
                            <span class="agent-email-form-holder">
                            </span>
                        </div>
                    </div>
                </div>
                <!--<div class="modal-footer"></div>-->
            </div>
        </div>
    </div>

  <div id="make_offer_contact_Modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close reset-close" data-dismiss="modal">&times;</button>
                    <!--<button type="button" class="close reset-close" data-dismiss="modal" aria-hidden="true">X</button>-->
                    <h4 class="modal-title" id="myModalLabel">Make An Offer</h4>
                </div>
                <div class="modal-body">
                    <div class="single-property sp-agent">
                        <div class="clearfix"></div>
                        
                        <div class="rs-enquiry">
							<div class="alert alert-success alert-dismissible" id="afcsform" style="display:none;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							Your information has been sent successfully.Seller will be contact shortly
							</div>
							<form action="#" method="post" id="make-offer-form" role="form" novalidate="">
							<input type="hidden" name="mopost_id" value="<?php if(!empty($Post['id'])) { echo $Post['id']; }?>">
							<input type="hidden" name="moseller_id" value="<?php if(!empty($Post['user_id'])) { echo $Post['user_id']; }?>">
							<div class="row">
							<div class="col-md-6 col-sm-6">
							<div class="form-group">
							<label for="enquiryInput1">Name</label>
							<input type="text" placeholder="Name" value="" name="mosender_name"  class="form-control" required='true'>
					
							</div>
							</div>
							<div class="col-md-6 col-sm-6">
							<div class="form-group">
							<label for="enquiryInput2">Email</label>
							<input type="email" placeholder="Email" value="" name="mosender_email"  class="form-control" required='true'>
							</div>
							</div>
							<div class="col-md-6 col-sm-6">
							<div class="form-group">
							<label for="enquiryInput3">Phone</label>
							<input type="text" placeholder="Phone" value="" name="mophone"  class="form-control numbervalidation" required='true' maxlength="10">
							</div>
							</div>
							<div class="col-md-6 col-sm-6">
							<div class="form-group">
							<label for="enquiryInput3">Amount <span id="amount_val" style="display:none;"> (Amount cannot be greater)</span></label>
							<input type="hidden" placeholder="Old Price" id="oldprice" value="<?php if(!empty($Post['price'])) { echo number_format($Post['price']); }?>" name="price"  class="form-control">
							<input type="text" placeholder="Amount" value="" id="moamount" name="moamount"  class="form-control numbervalidation" required='true'>
							</div>
							</div>
							</div>
							<div class="form-group">
							<label for="enquiryInput3">Subject</label>
							<input type="text" placeholder="Subject" value="" name="mosubject"  class="form-control" required='true'>
							</div>
							<div class="form-group">
							<label for="enquiryInput4">Message</label>
							<textarea rows="7" placeholder="Message" name="momsg"  class="form-control"></textarea>
							</div>
							

							<div class="clear-top-margin"></div>
							<input class="btn btn-primary" type="submit" value="Send">
							</form>
                            <div class="clearfix"></div>
                            <span class="agent-email-form-holder">
                            </span>
                        </div>
                    </div>
                </div>
                <!--<div class="modal-footer"></div>-->
            </div>
        </div>
    </div>
</section>
<!-- //End portfolio -->