<!-- ========== PORTFOLIO SECTION ========== -->
<style>
#search-form {margin-bottom: 30px;}
</style>
<section id="portfolio" class="Upeer-headers-section addvanceserch">
   <div class="page-heading-two">
      <div class="container">
         <!--<div class="col-md-7">-->
         <!--   <h5 class="car-title-detail">Advanced Search</h5>-->
         <!--</div>-->
         <div class="col-md-12">
            <div class="breads">               <a href="<?php echo base_url('/'); ?>">Home</a> / Advance Search                    </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="container">
       <div class="row">
      <div class="col-md-12" style="text-align:center;">
         <h2 style="padding:10px;color:#000;">Find New & Second Hand Cars for Sale</h2>
         <p class="secrhnewpad">Search new and used cars by make and model.</p>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-6">
         <form role="form" action="<?php echo base_url();?>vehicle/advresults" method="post" id="search-form">
            <div class="s-widget">
               <!-- Form Group -->               
               <div class="widget-content search">
                  <div class="col-md-6 form-group" style="display:none;">
                     <select name="currency" class="form-control currency filter-search">
                        <option value="">Select Currency</option>
                        <option value="USD">USD</option>
                        <option value="UGX">UGX</option>
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="state" id="state" class="form-control  search-location filter-search">
                        <option value="">Select Location</option>
                        <?php  foreach($carState as $value){?>						
                        <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                        <?php } ?>						
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="advert_type" id="advert_type" class="form-control advert-type filter-search">
                        <option data-name="" value="">Select Advert Type</option>
                        <option value="sell">Sellin Price of car</option>
                        <option  value="rent">Rental Price of car</option>
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select id="category_id" name="category" class="form-control search-category filter-search">
                        <option value="">Body Style</option>
                        <?php  foreach($carCategories as $value){?>											
                        <option value="<?php echo $value->id;?>"><?php echo ucfirst($value->title);?></option>
                        <?php } ?>					
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="brand" id="home-select-brand" class="form-control  car-brand filter-search">
                        <option value="">Select Brand</option>
                        <?php foreach($carBrandmodels as $value){?>												
                        <option value="<?php echo $value->id;?>"><?php echo ucfirst($value->name);?></option>
                        <?php } ?>					
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="model" id="select-model" class="form-control model filter-search">
                        <option value="">Select Model</option>
                        <?php foreach($getBrand as $value){?>														
                        <option value="<?php echo $value->id;?>"><?php echo ucfirst($value->name);?></option>
                        <?php } ?>							  
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="condition" id="condition" class="form-control car-condition filter-search">
                        <option value="">Select condition</option>
                        <option  value="new" >New</option>
                        <option  value="used" >Used</option>
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="fuel_type" id="fuel_type" class="form-control fueltype filter-search">
                        <option value="">Select Fuel Type</option>
                        <option value="gas" >Gas</option>
                        <option value="diesel" >Disel</option>
                        <option value="petrol" >Petrol</option>
                        <option value="octane" >Octane</option>
                        <option value="electricity" >Electricity</option>
                        
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="mileage_range" id="mileage_range" class="form-control mileage-range filter-search">
                        <option value="">Select Mileage</option>
                        <?php foreach($mileage as $key=>$value){ ?>								
                        <option value="<?php echo $key;?>"><?php echo $value;?></option>
                        <?php }?>                      
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="price"  class="form-control chosen-select filter-search price">
                        <option value="" selected>Price</option>
                        <option value="50">Up to 50 </option>
                        <option value="100">Up to 100 </option>
                        <option value="500">Up to 500 </option>
                        <option value="5000">Up to 5,000 </option>
                        <option value="10000">Up to 10,000 </option>
                        <option value="15000">Up to 15,000 </option>
                        <option value="20000">Up to 20,000 </option>
                        <option value="25000">Up to 25,000 </option>
                        <option value="30000">Up to 30,000 </option>
                        <option value="35000">Up to 35,000 </option>
                        <option value="40000">Up to 40,000 </option>
                        <option value="45000">Up to 45,000 </option>
                        <option value="50000">Up to 50,000 </option>
                        <option value="60000">Up to 60,000 </option>
                        <option value="70000">Up to 70,000 </option>
                        <option value="80000">Up to 80,000 </option>
                        <option value="90000">Up to 90,000 </option>
                        <option value="100000">Up to 100,000 </option>
                        <option value="125000">Up to 125,000 </option>
                        <option value="150000">Up to 150,000 </option>
                        <option value="200000">Up to 200,000 </option>
                        <option value="250000">Up to 250,000 </option>
                        <option value="300000">Up to 300,000 </option>
                        <option value="350000">Up to 350,000 </option>
                        <option value="400000">Up to 400,000 </option>
                        <option value="450000">Up to 450,000 </option>
                        <option value="500000">Up to 500,000 </option>
                        <option value="1000000">Up to 100,0000 </option>
                        <option value="1500000">Up to 150,0000 </option>
                        <option value="2500000">Up to 250,0000 </option>
                        <option value="5000000">Up to 500,0000 </option>
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="year" class="form-control  filter-search year">
                        <option value="">Year</option>
                        <?php for ($x = 2021; $x >= 1910; $x--) {?>						
                        <option value="<?php echo $x;?>" ><?php echo $x;?></option>
                        <?php } ?>                     
                     </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <select name="yearofimport" class="form-control  filter-search yearofimport">
                        <option value="">Select Year of Import</option>
                        <?php for ($x = 2021; $x >= 1910; $x--) {?>						
                        <option value="<?php echo $x;?>" ><?php echo $x;?></option>
                        <?php } ?>                     
                     </select>
                  </div>
                  <div class="col-md-12 form-group">
                     <button style="width: 100%;background: #0b82f7;" class="btn btn-success" id="filter-search" type="submit">Search <span id="countrec">(<?php echo $searchcount;?>)</span><span id="loading-img"><img  style="display:none;" id="homeloading" src="<?php echo base_url();?>assets/img/loader_2.gif"></span></button>                                       
                  </div>
                </div>
            </div>
         </form>
      </div>
      </div>
   </div>
</section>
<!-- //End portfolio -->