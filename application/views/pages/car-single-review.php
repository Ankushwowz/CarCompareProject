<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/font-awsome/font-awsome.min.css">
<section id="portfolio" class="carsinglereview">
   <div class="container">
      <!--<div class="col-md-7">-->
      <!--   <h5><?php //echo $blogreview['title']; ?></h5>-->
      <!--</div>-->
      <div class="col-md-12">
         <div class="breads">               <a href="<?php echo base_url();?>">Home</a> / <?php echo $blogreview['title']; ?>                    </div>
      </div>
      <div class="clearfix"></div>
   </div>
   <!-- Container -->   
   <div class="container">
      <div class="blog-two">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <!-- Blog item starts -->               
               <div class="blog-two-item">
                  <!-- blog two Content -->                  
                  <div class="blog-two-content">
                     <!-- Blog meta -->                     
                     <div class="blog-meta">
                        <!-- Date -->                        <i class="fa fa-calendar"></i> &nbsp; <?php if(!empty($blogreview['created_date'])) { echo 								date('D d F Y ', strtotime($blogreview['created_date']));																}?> &nbsp;<!-- updated on version 1.6 -->                        <!-- Author -->                        <i class="fa fa-user"></i> &nbsp; <?php if(!empty($blogreview['first_name'])) { echo ucfirst ($blogreview['first_name']);}?> &nbsp;                     
                     </div>
                     <!-- Paragraph -->                     
                     <div class="row">
                        <div class="col-md-4">
                            <?php if(!empty($blogreview['featured_img'])) {?>
                            <img src="<?php echo base_url()?>/assets/upload/gallary/<?php echo $blogreview['featured_img']; ?>" class="blog-image">
                            <?php } else { ?>									    
                            <img src="<?php echo base_url()?>/assets/img/no-image.png" class="blog-image">
                            <?php } ?>                        
                            </div>
                        <div class="col-md-8">
                            <h2 class="varchars"><?php echo ucfirst($blogreview['title']); ?></h2>  
                            <div class="single-desc">
                        <?php if(!empty($blogreview['description'])) { echo $blogreview['description'];}?> 
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
               <div class="sidebar">               </div>
            </div>
         </div>
      </div>
   </div>
</section>