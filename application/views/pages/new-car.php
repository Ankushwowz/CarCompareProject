<!-- ========== PORTFOLIO SECTION ========== -->

<section id="portfolio" class="Upeer-headers-section">
   <div class="page-heading-two">
      <div class="container">
         <!--<div class="col-md-7 col-sm-7 col-xs-7">-->
         <!--   <h5 class="car-title-detail">New Car</h5>-->
         <!--</div>-->
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="breads">
               <a href="<?php echo base_url();?>">Home</a> / New Car        
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
    <div class="container">
      <div class="col-md-3"></div>
      <div class="col-md-6" style="text-align:center;"></div>
      <div class="col-md-3"></div>
    </div>
     
    <div class="section_body">
    <div class="bg_color">
    <div class="container">
      <div class="col-md-6  col-sm-6 used">
         <form role="form" action="<?php echo base_url();?>vehicle/advresults" method="post" id="search-form">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <h3 class="usedfulsection">New Car</h3>
                  <hr class="hrmagr"/>
               </div>
              
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="input-11">Condition</label>
                    	<select name="selectcondition" id="condition" class="form-control car-condition filter-search filter-search-common" disabled>
						<option  value="new" selected>New</option>
					</select>
					<input type="hidden" name="condition" value="new" >
                  </div>
               </div>
			    <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="input-14">Body Style</label>
                     <select id="category_id" name="category" class="form-control search-category filter-search filter-search-common">
											 <option value="">Select Category</option>
												 <?php  foreach($carCategories as $value){?>
											<option value="<?php echo $value->id;?>"><?php echo ucfirst($value->title);?></option>
											<?php } ?>
					</select>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="input-11">Car Brand</label>
                      <select name="brand" id="home-select-brand" class="form-control  car-brand filter-search filter-search-common">
					  <option value="">Select Brand</option>
												<?php /*
												<?php foreach($carBrandmodels as $value){?>
												<option value="<?php echo $value->id;?>"><?php echo ucfirst($value->name);?></option>
												<?php } */?>
					</select>
				 </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="input-11">Car Model</label>
                     <select name="model" id="select-model" class="form-control model filter-search filter-search-common">
                                                <option value="">Select Model</option>
												<?php /*foreach($getBrand as $value){?>
												<option value="<?php echo $value->id;?>"><?php echo ucfirst($value->name);?></option>
												<?php }*/ ?>
                      </select>
				  </div>
               </div>
              
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                     <label for="input-11">Mileage Range</label>
                     <select name="mileage_range" id="mileage_range" class="form-control mileage-range filter-search filter-search-common">
							<option value="">Select Mileage</option>
								<?php foreach($mileage as $key=>$value){ ?>
								<option value="<?php echo $key;?>"><?php echo $value;?></option>
								<?php }?>
                      </select>
				  </div>
               </div>
			    <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                             <label for="input-11">Fuel Type</label>
                                             <select name="fuel_type" id="fuel_type" class="form-control fueltype filter-change filter-search-common">
                                                <option value="">Select Fuel Type</option>
                                                <option value="gas" >Gas</option>
                                                <option value="diesel" >Disel</option>
                                                <option value="petrol" >Petrol</option>
                                                <option  value="octane" >Octane</option>
                                                <option  value="electricity" >Electricity</option>
                                                
                                             </select>
                                          </div>
                                       </div>
               <div style="clear:both"></div>
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <label>&nbsp;</label>
                  <div class="form-group">
                     <button type="submit"  id="filter-search" class="btn btn-warning w-100 colrblues"" style="background: #187ed9;color: #fff;"><i class="fa fa-search"></i>&nbsp; Search Cars <span id="countrec">(<?php echo $searchcount;?>)</span><span id="loading-img"><img  style="display:none;" id="homeloading" src="<?php echo base_url();?>assets/img/loader_2.gif"></span></button>
                  </div>
               </div>
                <div class="col-md-12  col-sm-12 col-xs-12 text-right">
                    <a href="<?php echo base_url();?>advance-search" class="text-right" style="padding-left: 44%;color: #fff;"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Advanced Search</a>
                </div>
            </div>
         </form>
      </div>
    
    </div>
    </div>
    </div>
</section>
<!-- //End portfolio -->