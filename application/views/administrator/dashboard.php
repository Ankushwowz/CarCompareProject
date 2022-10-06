<div class="content-wrapper contenthpheader">
    <!-- Content Header (Page header) -->
    <section class="content-header hp-listing">
        <div class="grid-box-content">
        <?php //echo '<pre>'; print_r($this->session->all_userdata()); ?>
        <?php if($UserName['user_type'] == 3){ ?>
      <h1> Welcome <?php echo $UserName['first_name'] ?> </h1>
      <?php } else { ?>
      <h1> Welcome to Your Account</h1>
      <?php } ?>
      
      
      
        <p>Auto Deal would love to help you server the best Auto Trade Deal we have, With us you can list your Vehicle for Rent OR For Sale. We always look forward to save your time & effort by listing your Vehicle on our platform and getting you the Best Deal around the Area.</p>
        <p>Our platform helps you to connect directly with the Owner/Vendor so you can personally meet them and check the listed vehicle on site. In addition we provide support for the Finance as well. </p>
        </div>   
    </section>
    

    
    <section class="inventory_box ">
        <div class="row div_center">
            <div class="col-lg-3 col-md-3 col-sm-5">
               <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/stock.png" class="selling_img">
                           </div>
              <div class="inventory_small_box div_center small_box1">
                <div class="inner">
                  <h3 class="numbersect"><?php echo count($InventoryCount);?></h3>
                  <p class="listedsect">Listed Inventory</p>
                </div>
                <a href="<?php echo base_url()?>administrator/sell-car" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-5 shoppingsellling">
                <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/shopping.png" class="selling_img">
                           </div>
              <div class="inventory_small_box div_center small_box2">
                <div class="inner">
                  <p>Sell your Car</p>
                </div>
                <a href="<?php echo base_url()?>post-ad" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-5 shoppingsellling">
                <div class="featured_icon">
                               <img src="<?php echo base_url();?>assets/img/my-img/car-rental.png" class="selling_img">
                           </div>
              <div class="inventory_small_box div_center small_box3">
                <div class="inner">
                  <p>Rent your Car</p>
                </div>
                <a href="<?php echo base_url()?>post-ad" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
          </div>
    </section>
    
    <!--<section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Completed Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>New User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Reopened Issue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
    </section>-->
</div>