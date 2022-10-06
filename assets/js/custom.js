		$(document).ready(function(){
			//H5_loading.show();
			$("#galleryImage").change(function(){
			$('#imagefsize').hide();
			$('#imageextension').hide();
			var packageName = $("input[name='package']:checked"). val();
			
			var fd = new FormData();
			var files = $('#galleryImage')[0].files[0];
		
			var fsize = $('#galleryImage')[0].files[0].size;
			var fname = $('#galleryImage')[0].files[0].fname;
			var ftype = $('#galleryImage')[0].files[0].type;
			var fextension = $('#galleryImage').val().split('.').pop().toLowerCase();	
			
			if($.inArray(fextension, ['gif','png','jpg','jpeg']) == -1) {
				$('#imageextension').show();
				//alert('Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, bmp');
				return false;
			}
			
			if(fsize > 1048576){/*1048576-1MB(You can change the size as you want)*/
			$('#imagefsize').show();
                   // alert("File size too large! Please upload less than 1MB");
                     return false;
         }
			
			
			fd.append('userfile',files);
			fd.append('packageName',packageName);
			var bar = $('#bar');
			var percent = $('#percent');
			$('#loading_img').show();
			$.ajax({
			   url: baseURL+'home/addImageGallary',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				beforeSend: function() {
						document.getElementById("progress_div").style.display="none";
						var percentVal = '0%';
						bar.width(percentVal)
						percent.html(percentVal);
					},
					uploadProgress: function(event, position, total, percentComplete) {
						var percentVal = percentComplete + '%';
						bar.width(percentVal)
						percent.html(percentVal);
					},
				success: function(response){
					
					var percentVal = '100%';
						bar.width(percentVal)
						percent.html(percentVal);
						var obj = JSON.parse(response);
						
					if(obj.imagename!=''){
						var imagepath =baseURL+'assets/upload/gallary/thumbnail/'+obj.imagename;
					$(".multiple-uploads").prepend( '<li id="'+obj.id+'" style="margin:10px 10px 0 0;overflow:hidden"><input type="hidden" name="gallery[]" value="'+obj.imagename+'"><img src="'+imagepath+'" style="height:100%"><div style="clear:both"></div><div class="remove-image" onclick="removeimage('+obj.id+')">X</div></li>'); 
					setTimeout(function(){ $('#loading_img').hide(); }, 3000);
						
					}else{
						//alert('file not uploaded');
						
						 $('#Modal5images').modal('show');
						 $('#alert-message-gall').html('You can only upload '+obj.imagecount+' images for gallary');
						 return false;
					}
				},
			});
		});
		


	$( "#my_form_sell_a_car" ).submit(function( event ){//on form submit       
        var proceed = true;
		 event.preventDefault();
		 var description = CKEDITOR.instances.description.getData();
		 //alert(description); return false;
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_form_sell_a_car input[required=true],textarea[required=true],#my_form_sell_a_car radio[required=true],#my_form_sell_a_car select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
        });
        
        if(description==''){
            $('#cke_description').addClass('errorType');
            }else{
            $('#cke_description').removeClass('errorType');
        }
		
        if(proceed){
			//$('#signin-modal').modal('show');
			var TypeOfAdvert = $("input[name='package']:checked"). val();
			var user_id = $('#user_id').val();
			H5_loading.show();
			var formData = $("#my_form_sell_a_car").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'home/sellACarWithAjax',
				data: {
					formdata : formData,
				    description : description

				},
				success: function(msgData) {
					H5_loading.hide();
					if(user_id==''){
						var packageName = $("input[name='package']:checked"). val();
						$('#package_id').val(packageName);
						$('#TypeOfAdvert').val(TypeOfAdvert);
						$('#TypeOfAdvert').val(TypeOfAdvert);
						$('#checkvalye').val(1);
						$('#signin-modal').modal('show');
						$('#show_id').val(1);
						$('#Sell_last_id').val(msgData);
						$('#previewwithlogin').val(1);
						 return false;
					}else{
						var packageName = $("input[name='package']:checked"). val();
						if(packageName=='basic'){
							var pageURL = $(location). attr("href");
							var baseencodeid = btoa(msgData);
							
							//window.location.href=pageURL+'?msg=success';
							window.location.href=baseURL+"preview/"+baseencodeid;
						}else{
							//alert(msgData);
							//alert(baseencodeid);
							 var baseencodeid = btoa(msgData);
							//window.location.href=baseURL+"edit-vehicle/pay/"+msgData;
							//window.location.href=baseURL+"pesapal/pay/"+msgData;
							window.location.href=baseURL+"preview/"+baseencodeid;
							
						}
					}
					
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#my_form_sell_a_car input[required=true],textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});

$("#my_form_sell_a_car select[required=true]").change(function() { 
        $(this).css('border-color',''); 
	});


// Price Value can not be zero
$('#price').on('keyup',function(){
    $('#price_val').hide();
    var price = $('#price').val();
    if(price < 1){
        $('#price_val').show();
        $('#price').val('');
        return false;
    }
    
});


// Mileage Value can not be zero
$('#mileage').on('keyup',function(){
    $('#mileage_val').hide();
    var price = $('#mileage').val();
    if(price < 1){
        $('#mileage_val').show();
        $('#mileage').val('');
        return false;
    }
    
});


// Make an Offer new amount can not be greater than old amount
$('#moamount').on('keyup',function(){
    $('#amount_val').hide();
     var oldprice = $('#oldprice').val();
    var newprice = $('#moamount').val();
    //alert(oldprice);
    //alert(newprice); 
    var myStr = oldprice.replace(/,/g, "");
           // alert(myStr); return false;
    if(parseInt(myStr) < parseInt(newprice)){
        $('#amount_val').show();
        $('#moamount').val('');
        return false;
    }
    if(parseInt(newprice) < 1){
        $('#amount_val').show();
        $('#moamount').val('');
        return false;
    }
    
});



$('body').on('click', '.savepublish', function() {
    var pageURL = baseURL + "administrator/sell-car";
		//var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
		//alert(pageURL);
		//alert(ID); //return false;
        swal({
            title: "Are you sure you want to publish this post?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Publish!',
                    text: 'Post has been successfully published!',
                    icon: 'success'
                }).then(function() {
                   
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "home/savepublish",
                        type: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                           H5_loading.hide();
							window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });



$("#featuredImage").change(function(){
	$('#imagefsize').hide();
	$('#imageextension').hide();
	var fd = new FormData();
	var files = $('#featuredImage')[0].files[0];
		var fsize = $('#featuredImage')[0].files[0].size;
			var fname = $('#featuredImage')[0].files[0].fname;
			var ftype = $('#featuredImage')[0].files[0].type;
			var fextension = $('#featuredImage').val().split('.').pop().toLowerCase();	
			
			if($.inArray(fextension, ['gif','png','jpg','jpeg']) == -1) {
				$('#imageextension').show();
				//alert('Sorry, invalid extension. Please upload  only these extension gif, png, jpg, jpeg, bmp');
				return false;
			}
			var filesz = Math.round((fsize / 1024));
			if(filesz >= 1024){/*1048576-1MB(You can change the size as you want)*/
			$('#imagefsize').show();
                    //alert("File size too large! Please upload less than 1MB");
                     return false;
             }else if(filesz < 512){
                 $('#imagefsizesm').show();
                        //alert("File size too small! Please upload more than 512 KB");
                         return false;
             }else{
                 $('#imagefsize').hide();
                 $('#imagefsizesm').hide();
             }
			/*if(fsize > 1048576){
			$('#imagefsize').show();
                     return false;
            }*/
	//alert(files.name);
	//readURL(this);
	fd.append('userfile',files);
	H5_loading.show();
	$.ajax({
			   url: baseURL+'home/fImageGallary',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					H5_loading.hide();
					var pathimage = baseURL+'assets/upload/gallary/'+response;
						$("#featured-img").attr("src",pathimage);
				$('#txtfeaturedImage').val(response);
				},
			});
	
	
	
	});
	
	$(".select-category").change(function(){
		H5_loading.show();
	 var category_id = $(this).val();
	 $.ajax({
				type: "POST",
				url: baseURL+'home/selectCategoryWithAjax',
				data: {
					category_id : category_id
				},
					success: function(msgData) {
						H5_loading.hide();
						$( "#select-brand" ).replaceWith(msgData);
						$( "#select-model" ).replaceWith('<select name="model" class="form-control" id="select-model"> <option value="">Select Model</option>');

				}
			});
	});
	
	
	$('body').on('change', '#select-brand', function() {
		H5_loading.show();
	 var brand = $(this).val();
	 $.ajax({
				type: "POST",
				url: baseURL+'home/selectBrandWithAjax',
				data: {
					brand : brand
				},
					success: function(msgData) {
						H5_loading.hide();
						$( "#select-model" ).replaceWith(msgData);

				}
			});
	});
	
	
	
		$( "#my_form_reg" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 event.preventDefault();
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_form_reg input[required=true],#my_form_reg radio[required=true],#my_form_reg select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				var pass = $('#password').val();
				var repassword = $('#repassword').val();
				
				if(pass!=repassword){
					$('#password').css('border-color','red');
					$('#repassword').css('border-color','red');
					proceed = false; 	
				}
        });
		
        if(proceed){
			
			var user_id = $('#user_id').val();
			var show_id = $('#show_id').val();
			H5_loading.show();
			var formData = $("#my_form_reg").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'user/userRegistration',
				data: {
					formdata : formData
				

				},
				success: function(msgData) {
					H5_loading.hide();
					$('input[name="first_name"]').focus();
					if(msgData==1){
						
						$('#reg-suc').hide();
						$('#reg-suc-1').hide();
						$('#reg-danger').show();
					}else{
						var package_id = $('#package_id').val();
						var Sell_last_id = $('#Sell_last_id').val();
						if(package_id=='premium'){
							var baseencodeid = btoa(Sell_last_id);
							window.location.href=baseURL+"preview/"+baseencodeid;
							return false;
						}
						$('#my_form_sell_a_car input[type="text"] ,select,textarea,input[type="email"]').val('');
						var pathimage = baseURL+'assets/img/no-image.png';
						$("#featured-img").attr("src",pathimage);
						$('.multiple-uploads li').remove();
						if(show_id=='1'){
							
							//$('#reg-suc-1').show();
							$('#signin-modal').modal('hide');
							$('#ModalForReg').modal('hide');
							$('#Modalregsuc1').modal('show');
							$('#show_id').val('');
						}else{
							
							//$('#reg-suc').show();
							$('#Modalreg-suc').modal('show');
							$('#signin-modal').modal('hide');
							$('#ModalForReg').modal('hide');
							
						}
						
						$('#reg-danger').hide();
					}
					//H5_loading.hide();
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#my_form_reg input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
		$( "#my_form_login" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 event.preventDefault();
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_form_login input[required=true],#my_form_login radio[required=true],#my_form_login select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				
        });
		
        if(proceed){
			H5_loading.show();
			var user_id = $('#user_id').val();
			//H5_loading.show();
			var formData = $("#my_form_login").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'user/userLogin',
				data: {
					formdata : formData
				

				},
				success: function(msgData) {
					H5_loading.hide();
					$('input[name="useremaillogin"]').focus();
					if(msgData==2){
						$('#login-danger').show();
					}else{
						var checkvalye = $('#checkvalye').val();
						var Sell_last_id = $('#Sell_last_id').val();
						var TypeOfAdvert = $('#TypeOfAdvert').val();
						var previewwithlogin = $('#previewwithlogin').val();
						if(previewwithlogin==1){
							$('#previewwithlogin').val('');
							var baseencodeid = btoa(Sell_last_id);
							window.location.href=baseURL+"preview/"+baseencodeid;
						}else{
							window.location.href=baseURL;
						}
						/*if(checkvalye==1){
							$('#checkvalye').val('');
							if(TypeOfAdvert=='premium'){
								window.location.href=baseURL+"pesapal/pay/"+Sell_last_id;
							}else{
								window.location.href=baseURL;
							}
						}else{
							window.location.href=baseURL;
						}*/
						
						
					}
					//H5_loading.hide();
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#my_form_login input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	$("input[name='checkboxAg']").change(function() {
			var checked = $(this).val();
			if ($(this).is(':checked')) {
				$('#adiv').show();
			}else{
				$('#adiv').hide();
			}
		});
		
		
		
	$("#home-select-brand").change(function(){
	var brand = $(this).val();
	 $.ajax({
				type: "POST",
				url: baseURL+'home/getBrandOnChange',
				data: {
					brand : brand
				},
					success: function(msgData) {
					$('#select-model').empty();
                     $('#select-model').html(msgData);

				}
			});
	});
		
	$(".filter-change").change(function(){
		$('#homeloading').show();
		$('#filter-search').prop('disabled', true);
	var formData = $("#home-search-form").serialize();
	 $.ajax({
				type: "POST",
				url: baseURL+'home/searchFilter',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					$('#filter-search').prop('disabled', false);
					$('#homeloading').hide();
					$('#countrec').text('('+msgData+')');
				}
			});
	});	
		$(".numbervalidation").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });	


	$(".filter-search").change(function(){
		$('#homeloading').show();
		$('#filter-search').prop('disabled', true);
		var formData = $("#search-form").serialize();
		$.ajax({
				type: "POST",
				url: baseURL+'vehicle/searchFilter',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					$('#filter-search').prop('disabled', false);
					$('#homeloading').hide();
					$('#countrec').text('('+msgData+')');
				}
			});
	});
	// Pagination of Searhing Page//
	
	var pageURL = $(location).attr("href");
	var advresults = baseURL+'vehicle/advresults';
		$('#pagination').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});
			if(pageURL==advresults){
			loadPagination(0);
		  }
			
			// Load pagination
			function loadPagination(pagno){
				H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseURL+'vehicle/loadRecord/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData
					},
					success: function(response){
					    //console.log(response); return false;
						H5_loading.hide();
						if(response.allcount > 0){
						    $('#pagination').html(response.pagination);
						    createTable(response.result,response.row);
						}else{
						    $("#pagination1").append('<div class="blog-one-item row advresultdata">No Data Found</div>');
						     //$('#pagination1').html("");
						}
						
						
					}
				});
			}
			
			// Create table list
			function createTable(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#postsList').empty();
				if(countTable > 0){
					for(index in result){
						var id = result[index].id;
						var title = result[index].title;
						var category = result[index].categoryName;
						var advert_type = result[index].advert_type;
						var mileage = result[index].mileage;
						var fuel_type = result[index].fuel_type;
						var description = result[index].description;
						var price = result[index].price;
						var package = result[index].package;
						var urlpath = result[index].urlpath;
						var location = result[index].location;
						var brandname = result[index].brandname;
						var modalname = result[index].modalname;
						var imagepname = result[index].featured_img;
						var unavailable = result[index].unavailable;
						var guideprice = result[index].guideprice;
						var condition = result[index].condition;
						console.log(unavailable);
						sno+=1;
						if(imagepname!=''){
							var imageurlpath =baseURL+'assets/upload/gallary/'+imagepname;
						}else{
							var imageurlpath = baseURL+'assets/img/no-image.png';
						}
						if(advert_type=='rent'){
							var background = 'background-color: #49bf49 !important; text-transform: capitalize;font-weight: 600;';
							var perprice = "Per Day";
						}else{
							var background = 'background-color: #00aff0 !important; text-transform: capitalize;font-weight: 600;';
							var perprice = "";
						}
						if(condition=='new'){
							var background1 = 'background-color: #156156 !important; text-transform: capitalize; padding:5px 10px;font-weight: 600;';
						}else{
							var background1 = 'background-color: #3286bc !important; text-transform: capitalize; padding:5px 10px;font-weight: 600;';
						}
						
						if(guideprice=='' ){
							var guideP = '';
						}else{
							var guideP = '<span class="label label-warning" style="background-color: #3286bc  !important;font-weight: 600;">'+guideprice+'</span>';
						}
						
						var urlpath =baseURL+'viechle/'+urlpath;
						var contactpath =baseURL+'contact-us/';
						var max = 70;
						var tr = '<div class="blog-one-item col-md-6 blogcolsset">';
						tr += '<div class="blog-one-img col-md-5 col-sm-3 col-xs-12">\
							<a  target="_blank" href="'+urlpath+'">\
                        <div class="image-style-one">\<span style="'
						   +background+'" class="condition-tag used_condition rent_condition" data-toggle="tooltip" data-placement="left" data-original-title="Featured">\
                           '+advert_type+'</span>\<span style="'
						   +background1+'" class="condition-tag1" data-toggle="tooltip" data-placement="left" data-original-title="Featured">\
                           '+condition+'</span>\
                           <img class="img-responsive img-thumbnail imageshadows" alt="bantely" src="'+imageurlpath+'">\
                        </div>\
                     </a></div>\
                 <div class="blog-one-content col-md-7 col-sm-9 col-xs-12">\
                     <h3 style="word-wrap:break-word;font-size:20px;"><a  target="_blank" href="'+urlpath+'">'+title+'</a>\
                     </h3><div class="div-un"><span class="price-tag price-tag-new resultcleardivs" data-toggle="tooltip" data-placement="left" data-original-title="Featured">\
                           UGX&nbsp;'+addCommas(price)+'&nbsp;'+perprice+'</span>';
						   if(unavailable==''){
						  console.log('if');
						   }else {
							   console.log('else');
							    tr += '<h3 class="text-left"><span class="label label-warning" style="background-color: #e6a636 !important;"> This post will be available after this date '+unavailable+'</span></h3>';
						   }
					 if(package=='premium'){
							 tr += '<h3 class="text-right"><span class="label label-warning" style="background-color: #e6a636 !important;">'+package+'</span></h3>';
						}else{
							tr += '<h3 class="text-right"><span class="label label-warning" style="background-color: #6f5dd2 !important;">'+package+'</span></h3>';
						}
                    
                    tr += '</div><div class="blog-meta" style="text-transform: capitalize;">\
                      <a href="'+urlpath+'">\
                        <img src="'+imageurlpath+'" class="cat-img-small-list">\
                        '+category+' </a> &nbsp;\
                        <i class="fas fa-tachometer-alt" aria-hidden="true"></i> &nbsp; '+mileage+'&nbsp;miles &nbsp;\
                        <i class="fas fa-bookmark" aria-hidden="true"></i> &nbsp;  '+brandname+ ' '+modalname+'  &nbsp;\
                       <i class="fas fa-map-marker" aria-hidden="true"></i> &nbsp; '+location+'&nbsp;\
                        <i class="fas fa-gas-pump" aria-hidden="true"></i> &nbsp; '+fuel_type+'&nbsp;\
                     </div>';
                     if ($.trim(description).length > max) {
                    var subStr = description.substring(0, max);
                   tr +='<div class="descript-advresult">'+subStr+'</div><a target="_blank" href="'+urlpath+'" class="link">View details...</a><a href="'+contactpath+'" class="finance-offer" style="color: #156156;float: right">Get Finance Offer</a>';
                     }
                    //tr +='<a href="javascript:void(0);" class="link">Read more…</a>';
                  tr +='</div>\
                  <div class="clearfix"></div>';
						$('#postsList').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row advresultdata">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsList').append(tr);
				}
				
			}
			
			
		$( "#contact-seller-form" ).submit(function( event ){ 
        var proceed = true;
		 event.preventDefault();
         $("#contact-seller-form input[required=true],#contact-seller-form radio[required=true],#contact-seller-form select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ 
                    $(this).css('border-color','red');  
					proceed = false;
                }
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				
        });
		
        if(proceed){
			H5_loading.show();
			
			var formData = $("#contact-seller-form").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'vehicle/contactseller',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					if(msgData==1){
						$('#csform').show();
					}
					H5_loading.hide();
					$('input[name="sender_name"]').focus();
					$('#contact-seller-form input[type="text"],#contact-seller-form input[type="email"]').val('');
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#contact-seller-form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});		
	

		$( "#make-offer-form" ).submit(function( event ){ 
        var proceed = true;
		 event.preventDefault();
         $("#make-offer-form input[required=true],#make-offer-form radio[required=true],#make-offer-form select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ 
                    $(this).css('border-color','red');  
					proceed = false;
                }
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				
        });
		
        if(proceed){
			H5_loading.show();
			
			var formData = $("#make-offer-form").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'vehicle/contactseller',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					if(msgData==1){
						$('#afcsform').show();
					}
					H5_loading.hide();
					$('#make-offer-form input[name="sender_name"]').focus();
					$('#make-offer-form input[type="text"],#make-offer-form input[type="email"]').val('');
					
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#make-offer-form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});	
	
	
	
	
		$( "#contact-form" ).submit(function( event ){ 
        var proceed = true;
		 event.preventDefault();
         $("#contact-form input[required=true],#contact-form radio[required=true],#contact-form select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ 
                    $(this).css('border-color','red');  
					proceed = false;
                }
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				
        });
		
        if(proceed){
			H5_loading.show();
			
			var formData = $("#contact-form").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'home/contactform',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					if(msgData==1){
						$('#msg-contact-form').show();
					}
					H5_loading.hide();
					$('#contact-form input[name="fname"]').focus();
					$('#contact-form input[type="text"],#contact-form input[type="email"]').val('');
					
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#contact-form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	$("#category_id").change(function(){
		H5_loading.show();
	var category_id = $(this).val();
	 $.ajax({
				type: "POST",
				url: baseURL+'home/selectCategoryWithAjax',
				data: {
					category_id : category_id
				},
					success: function(msgData) {
						H5_loading.hide();
					$('#home-select-brand').empty();
                     $('#home-select-brand').html(msgData);

				}
			});
	});
	$("#signin-modalclose").click(function(){
	$('#ModalForReg').modal('hide');
	$('#signin-modal').modal('show');
	return false;
	});
	$("#ModalForgotpasshrf").click(function(){
		$('#ModalForReg').modal('hide');
		$('#signin-modal').modal('hide');
		$('#ModalForgotpass').modal('show');
		return false;
	});
	
	
	$( "#my_form_forgot_pass" ).submit(function( event ){ 
        var proceed = true;
		 event.preventDefault();
         $("#my_form_forgot_pass input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ 
                    $(this).css('border-color','red');  
					proceed = false;
                }
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
				
        });
		
        if(proceed){
			H5_loading.show();
			
			var formData = $("#my_form_forgot_pass").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'home/forgotPassword',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					if(msgData==1){
						$('#reg-forgot').show();
						$('#forgot-danger').hide();
					}
					if(msgData==2){
						$('#reg-forgot').hide();
						$('#forgot-danger').show();
					}
					H5_loading.hide();
					$('#my_form_forgot_pass input[type="email"]').focus();
					$('#my_form_forgot_pass input[type="email"]').val('');
					
					return false;
					
				}
			});
				
        }
       
		return false;
	});
	
	
	
	
	
	var pageURLcarreview = $(location).attr("href");
	var carreview = baseURL+'car-review';
		$('#carreviewpagination').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationcarreview(pageno);
			});
			if(pageURLcarreview==carreview){
			loadPaginationcarreview(0);
		  }
			
			// Load pagination
			function loadPaginationcarreview(pagno){
				H5_loading.show();
				var formData = $("#carreview-form").serialize();
			   $.ajax({
					url: baseURL+'home/carreviewloadRecord/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData
					},
					success: function(response){
						H5_loading.hide();
						$('#carreviewpagination').html(response.pagination);
						carreviewcreateTable(response.result,response.row);
					}
				});
			}
			
			// Create table list
			function carreviewcreateTable(result,sno){
				var countTable =result.length;
				sno = Number(sno);
				$('#carreviewpostsList').empty();
				if(countTable > 0){
					for(index in result){
						var id = result[index].id;
						var title = result[index].title;
						var created_date = result[index].created_date;
						var imagepname = result[index].featured_img;
						var first_name = result[index].first_name;
						var description = result[index].description;
						var urlpath = result[index].urlpath;
						
						sno+=1;
						if(imagepname!=''){
							var imageurlpath =baseURL+'assets/upload/gallary/'+imagepname;
						}else{
							var imageurlpath = baseURL+'assets/img/no-image.png';
						}
					
						
						var urlpath =baseURL+'car-single-review/'+urlpath;
						
						var tr = '<div class="blog-one-item row">\
                               <div class="blog-one-img col-md-3 col-sm-3 col-xs-12">\
                                 <img src="'+imageurlpath+'" class="img-responsive img-thumbnail">\
        						</div>\
                             <div class="blog-one-content  col-md-9 col-sm-9 col-xs-12">\
                                <h3><a href="'+urlpath+'">'+title+'</a></h3>\
                                   <div class="blog-meta">\
                                       <i class="fa fa-calendar"></i> '+created_date+'\
									   <i class="fa fa-user"></i> '+first_name+'\
                                    </div>\
                                   <p>'+description+'</p>\
									<a href="'+urlpath+'"><button class="read_more"> Read More </button></a>\
									                                </div></div>';
						$('#carreviewpostsList').append(tr);
					}	
				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#carreviewpostsList').append(tr);
				}
				
			}
			
			
		$( "#carreview-form" ).submit(function( event ){ 
        var proceed = true;
		 event.preventDefault();
         $("#carreview-form input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ 
                    $(this).css('border-color','red');  
					proceed = false;
                }
               
				
        });
		if(proceed){
			
		   loadPaginationcarreview(0);
				
        }
       
		return false;
	});
	
			
			
		$( "#edit_form_sell_a_car" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 
        //loop through each field and we simply change border color to red for invalid fields       
        $("#edit_form_sell_a_car input[required=true],#edit_form_sell_a_car radio[required=true],#edit_form_sell_a_car select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
        });
		
        if(proceed){
			
			proceed = true;	
			$("#edit_form_sell_a_car").submit();
			return false;
        }
       
		event.preventDefault();
		
    });		
			
			
// End here//			
});

function removeimage($id){
	//$('#loading_img').show();
	H5_loading.show();
	var imagecount = $("#imagecount"). val();
	if(imagecount >0){
		var imagecountlenth = parseInt(imagecount)-parseInt(1);
		imagecount = $("#imagecount"). val(imagecountlenth);
	}
	$('#'+$id).remove();
	$.ajax({
		   url: baseURL+'home/removeimage',
			type: 'post',
			data: {
				id :$id
			},
			success: function(response){
				//$('#loading_img').hide();
				H5_loading.hide();	
				}
			
		});
}
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#featured-img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function readURLById(input,id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#'+id).attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
		
  /*$(window).load(function() {
    $('.mj_preloaded').hide();
  });
  */
     $(".numbervalidation").on("keypress keyup blur",function (event) {    
   $(this).val($(this).val().replace(/[^\d].+/, ""));
	if ((event.which < 48 || event.which > 57)) {
		event.preventDefault();
	}
});


$('body').on("click", ".sharebtn", function() {
    $(".sharebtn").removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function(){
    
    var count = $(".sidebar .gallery").children().length;
    if (count > 6){
        $(".gallery_img").html("View All " + count + " Images");
    }

});

