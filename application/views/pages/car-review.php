<div class="container blog-one carreview-blogs">
    <div class="row portfolioss" >
        <!--<div class="col-md-2"></div>-->
        <div class="col-md-12 searchdiv">
            <form action="<?php echo base_url()?>car-review"  method="post" id="carreview-form">
            	<div class="col-sm-9 col-xs-12">
            	<input type="text"  name="txtsearch" class="form-control" placeholder="Please enter  for search data"  value="<?php if(!empty($_POST['txtsearch'])) { echo $_POST['txtsearch']; }?>" >
            	</div>
            	<div class="col-sm-3 col-xs-12">
            	<input type="submit" class="btn btn-success serchbtnsusscess" name="search" value="Search">
            	</div>
            </form>
        </div>
        <!--<div class="col-md-2"></div>-->
    </div>
	<div class="row">
	        <!--<div class="col-md-2"></div>-->
	<div class="col-md-12 car_review" >
            <div class="blog-one p-0" id='carreviewpostsList'> </div>
            <div id='carreviewpagination' class="text-center my-5 v-page pagination">
			
			
			</div>
         </div>
		  <!--<div class="col-md-2"></div>-->
         </div>
	
    <?php 
  /*if(count($blogreview) >0){
    foreach($blogreview as $blogreview){?>
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 car_review">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
        					<!-- Blog item starts -->
                            <div class="blog-one-item row">
                                <!-- blog One Img -->
                                <div class="blog-one-img col-md-3 col-sm-3 col-xs-12">
                                    <!-- Image -->
                                   
        							<?php if(!empty($blogreview->featured_img)) {?>
        									   <img src="<?php echo base_url()?>/assets/upload/gallary/<?php echo $blogreview->featured_img; ?>" class="img-responsive img-thumbnail">
        									   <?php } else { ?>
        									    <img src="<?php echo base_url()?>/assets/img/no-image.png" class="img-responsive img-thumbnail">
        									   <?php } ?>
                                </div>
                                <!-- blog One Content -->
                                <div class="blog-one-content  col-md-9 col-sm-9 col-xs-12">
                                    <!-- Heading -->
                                    <h3><a href="<?php echo base_url();?>car-single-review/<?php echo base64_encode($blogreview->id);?>"><?php if(!empty($blogreview->title)) { echo $blogreview->title;}?></a></h3>
                                    <!-- Blog meta -->
                                    <div class="blog-meta">
                                        <!-- Date -->
                                        <i class="fa fa-calendar"></i>  <?php if(!empty($blogreview->created_date)) { echo 
        								date('D d F Y ', strtotime($blogreview->created_date));
        								
        								}?>  <!-- updated on version 1.6 -->
                                        <!-- Author -->
                                        <i class="fa fa-user"></i> <?php if(!empty($blogreview->first_name)) { echo ucfirst ($blogreview->first_name);}?>
        
                                    </div>
                                    <!-- Paragraph -->
                                    <p><?php if(!empty($blogreview->description)) { 
									echo substr(strip_tags($blogreview->description),0,500) ;  } ?>
									</p>
									<?php if(!empty($blogreview->description)) { ?>
										<a href="<?php echo base_url();?>car-single-review/<?php echo base64_encode($blogreview->id);?>"><button class="read_more"> Read More </button></a>
									<?php } ?>
                                </div>
                            </div>
                         
        
        
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
        <?php 
    	
        }
        }else {?>
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
        		    <h2 style="text-align:center;">No data found</h2>
        		</div>
        </div>
        <?php } */?>
</div>