<!--<script defer="defer" src="<?php echo base_url(); ?>assets/zeus_packs/views/layouts/application_v2.js"></script>-->
 
 <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
    </script>
<section id="services" class="services bg-gradient-dark p-t-80">
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <div class="features-item features-item-v2">
               <div class="features-info">
                  <h3 class="title">Contact <span>Us</span></h3>
                  <p style="margin-top:30px;">
                 
				  <?php if(!empty($themesetting['section14'])) { echo $themesetting['section14']; }?>
                  <div class="brand-bg footer-share-links">
                     <a class="facebook" href="#">
                     <i class="fa fa-facebook circle-3"></i>
                     </a>
                     <a class="twitter" target="_blank" href="#">
                     <i class="fa fa-twitter circle-3"></i>
                     </a>
                  </div>
                  </p>
               </div>
            </div>
         </div>
         <!-- //.col-sm-4 -->
         <div class="col-sm-4">
            <!-- EACH FEATURE -->
            <div class="features-item features-item-v2">
               <div class="features-info">
                  <h3 class="title">Useful <span>Links</span></h3>
                  <ul class="useful-links">
                     <li><a href="<?php echo base_url();?>"><span class="fa fa-angle-right"></span> Home</a></li>
                     <li><a href="<?php echo base_url();?>used-car"><span class="fa fa-angle-right"></span> 
                        Used Car</a>
                     </li>
                     <li><a href="<?php echo base_url();?>new-car"><span class="fa fa-angle-right"></span> 
                        New Car</a>
                     </li>
                     <li><a href="<?php echo base_url();?>rent-car"><span class="fa fa-angle-right"></span> 
                        Rent Car</a>
                     </li>
                     <li><a href="<?php echo base_url();?>contact-us"><span class="fa fa-angle-right"></span> 
                        Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- //features-item -->                    
         </div>
         <!-- //.col-sm-4 -->
         <div class="col-sm-4">
            <!-- EACH FEATURE -->
            <div class="features-item features-item-v2">
               <div class="features-info">
                  <h3 class="title">About <span>Us</span></h3>
                  <p><?php if(!empty($themesetting['section13'])) { echo $themesetting['section13']; }?>
                  </p>
               </div>
            </div>
            <!-- //features-item -->                    
         </div>
         <!-- //.col-sm-4 -->
      </div>
      <!-- //row -->
   </div>
   <!-- //container -->
</section>
<!-- //End services -->
<!-- ========== FOOTER ========== -->
<footer class="footer">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 text-center">
            <p class="copyright m-b-10">Copyright &#169; 2022 <b>Arie Ventures Ltd T/A Car Compare Services.</b> All rights reserved.</p>
         </div>
         <!-- //col-sm-12 -->
      </div>
      <!-- //row -->
   </div>
   <!-- //container -->
</footer>
<!-- //End footer -->
<!-- Go to top button -->
<button data-rippleria-color="#fff" class="go-top ripple"><i class="fa fa-angle-up"></i></button>
<!-- //End page-wrap -->
</div>
</body>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
	<!--<script type="text/javascript" src="<?php //echo base_url(); ?>assets/custom-js/progress-bar-jquery.js"></script>
	<script type="text/javascript" src="<?php //echo base_url(); ?>assets/custom-js/progress-bar-jquery.form.js"></script>
	<!--Select2 js -->
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/loading/loading.css">
	<script src="<?php echo base_url(); ?>assets/plugins/loading/loading.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <script>
    //     window.onload = function() {
    //   let rm = document.querySelectorAll('.descript-advresult');
    //   rm.forEach(el => {
    //     el.classList.add('less');
    //     var div = document.createElement('div');
    //     div.innerHTML = "<a href='javascript:void(0);' class='rmlink' onclick='toggleRM(this)'>Read more</a>";
    //     el.append(div);
    
    //   })
    // }
    
    // function toggleRM(el) {
    //   const cl = el.parentNode.parentNode.classList
    //   const is_less = cl.contains('less');
    //   el.innerHTML = !is_less ? "Read More" : "Read Less";
    //   if (is_less) cl.remove('less');
    //   else cl.add('less');
    // }
    </script>
    	
		<script>

  jQuery(document).ready(function () {
				var img_zone = document.getElementById('img-zone'),		
				collect = {
					filereader: typeof FileReader != 'undefined',
					zone: 'draggable' in document.createElement('span'),
					formdata: !!window.FormData
				}, 
				acceptedTypes = {
					'image/png': true,
					'image/jpeg': true,
					'image/jpg': true,
					'image/gif': true
				};
				
				// Function to show messages
				function ajax_msg(status, msg) {
					var the_msg = '<div class="alert alert-'+ (status ? 'success' : 'danger') +'">';
					the_msg += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					the_msg += msg;
					the_msg += '</div>';
					$(the_msg).insertBefore(img_zone);
				}
				
				// Function to upload image through AJAX
				function ajax_upload(files) {
				    $('#imageextension').hide();
					var filelength  =files.length;
					$('#Modal5images').modal('hide');
					var packageName = $("input[name='package']:checked").val();
					var imagecount = $("#imagecount").val();
					var post_id = $("#post_id").val();
					if(post_id!=''){post_id = post_id;}else{post_id =0;}
					if(packageName=='basic'){
						if(imagecount==0){
								if(filelength > 5){
									$('#Modal5images').modal('show');
									$('#alert-message-gallery').html('You can only upload 5 images for gallery');
									return false;
								}
							}else{
								var imagecountlenth = parseInt(5)-parseInt(imagecount);
								if(filelength > imagecountlenth){
									if(filelength!=imagecountlenth){
										$('#Modal5images').modal('show');
										$('#alert-message-gallery').html('You can only upload '+imagecountlenth+' images for basic gallery');
										return false;
									}
								}
							}
						}
						if(packageName=='premium'){
						if(imagecount==0){
								if(filelength > 10){
									$('#Modal5images').modal('show');
									$('#alert-message-gallery').html('One Time you can  upload only less than or equal to 10 images for premium gallery');
									return false;
								}
							}else{
								var imagecountlenth = parseInt(20)-parseInt(imagecount);
								if(filelength > imagecountlenth){
									if(filelength!=imagecountlenth){
										$('#Modal5images').modal('show');
										$('#alert-message-gallery').html('You can only upload '+imagecountlenth+' images for gallery');
										return false;
									}
								}
							}
						}	
					$('.progress').removeClass('hidden');
					$('.progress-bar').css({ "width": "0%" });
					$('.progress-bar span').html('0% complete');	
										
					var formData = new FormData();					
					//formData.append('any_var', 'any value');
					for (var i = 0; i < files.length; i++) {
						//formData.append('img_file_' + i, files[i]);
						var fextension = files[i].name.split('.').pop().toLowerCase();
						console.log(fextension);
                        if(jQuery.inArray(fextension, ['gif','png','jpg','jpeg']) == -1) {
                          jQuery('#imageextension').show();
                        //alert('Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, bmp');
                         return false;
                        }else{
						
						
						if(files[i].size > 9048576){
							jQuery('#galleryName').append('<p style="color:red;">'+files[i].name+'</p>');
							jQuery('#imagefsize').show();
							
						}else{
						 jQuery('#galleryName').append('<p>'+files[i].name+'</p>');	
						 formData.append('userfile[]', files[i]);
						}
                        }
						
						
						//$('#galleryName').append('<p>'+files[i].name+'</p>');
						//formData.append('userfile[]', files[i]);
					}	
										
					formData.append('packageName',packageName);
					formData.append('post_id',post_id);
					$.ajax({
						 url: baseURL+'home/multipleImageStore', // Change name according to your php script to handle uploading on server
						type : 'post',
						data : formData,
						dataType : 'json',						
						processData: false,
						contentType: false,
						error : function(request){
							ajax_msg(false, 'An error has occured while uploading photo.'); 								
						},
						success : function(json){
							var img_preview = $('#img-preview');
							var col = '.col-md-4';
							$('.progress').addClass('hidden');	
							var photos = $('<div class="photos"></div>');
							$(photos).html(json.img);								
							var lt = $(col, photos).length;
							$('col', photos).hide();
							$(img_preview).prepend(photos.html());
							$(col + ':lt('+lt+')', img_preview).fadeIn(2000);	
							H5_loading.hide();	
							if(packageName=='basic'){
								$('#imagecount').val(json.imagecount);
								
							}
							if(packageName=='premium'){
								$('#imagecount').val(json.imagecount);
								
							}
							$('#galleryName').html('');
						
						 return false;
							if(json.error != '') 
								ajax_msg(false, json.error);
						},
						progress: function(e) {
							if(e.lengthComputable) {
								var pct = (e.loaded / e.total) * 100;
								$('.progress-bar').css({ "width": pct + "%" });	
								$('.progress-bar span').html(pct + '% complete');							
								$('#sr-only-number').html(parseInt(pct) + '%');	
								if(parseInt(pct)==100){
									H5_loading.show();
									
								}
							}
							else {
								console.warn('Content Length not reported!');
							}
						}
					});					
				}
				
				// Call AJAX upload function on drag and drop event
				function dragHandle(element) {
					element.ondragover = function () { return false; };
					element.ondragend = function () { return false; };
					element.ondrop = function (e) { 
						e.preventDefault();
						ajax_upload(e.dataTransfer.files);
					}  		
				}
				
				if (collect.zone) {  		
					dragHandle(img_zone);
				} 
				else {
					alert("Drag & Drop isn't supported, use Open File Browser to upload photos.");			
				}
			
				// Call AJAX upload function on image selection using file browser button
				$(document).on('change', '.btn-file :file', function() {
					ajax_upload(this.files);			
				});
				
				// File upload progress event listener
				(function($, window, undefined) {
					var hasOnProgress = ("onprogress" in $.ajaxSettings.xhr());
				
					if (!hasOnProgress) {
						return;
					}
					
					var oldXHR = $.ajaxSettings.xhr;
					$.ajaxSettings.xhr = function() {
						var xhr = oldXHR();
						if(xhr instanceof window.XMLHttpRequest) {
							xhr.addEventListener('progress', this.progress, false);
						}
						
						if(xhr.upload) {
							xhr.upload.addEventListener('progress', this.progress, false);
						}
						
						return xhr;
					};
				})(jQuery, window);	
			});
</script>


</html>