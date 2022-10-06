<footer class="main-footer">
<strong>Copyright &copy; 2022 <a href="<?php echo base_url(); ?>">Arie Ventures Ltd T/A Car Compare Services</a>.</strong> All rights reserved.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>


    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>


<script>
    $('#toggle').on('click', function(e) {
      $('.main-sidebar').toggleClass("active"); //you can list several class names 
      e.preventDefault();
    });
</script>


<?php $urlLink= explode('/',$_SERVER['REQUEST_URI']); 
//echo "<pre>"; print_r($urlLink); die;
	if(in_array('sell-car',$urlLink) || in_array('users',$urlLink) || in_array('corporateusers',$urlLink) || in_array('category',$urlLink) || in_array('brand',$urlLink) || in_array('model',$urlLink) || in_array('carreview',$urlLink)) { ?>
			<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
			<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
			<script>
				$(document).ready(function() {
				$('#example').DataTable( {
					"order": [],
					"pageLength": 25,
					"oLanguage": {
                        "sEmptyTable": "No Listing Available"
                    }
				} );
				
			} );
			</script><?php 
	}
	 ?>
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/loading/loading.css">
<script src="<?php echo base_url(); ?>assets/plugins/loading/loading.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script>
        $('.amoreoptionbtn').on('click', function () {
            if ($(this).hasClass("open")){
                $('.amoreoptionbtn').removeClass('open')
                $(this).removeClass('open')
            }
            else {
                $('.amoreoptionbtn').removeClass('open')
                $(this).addClass('open')
            }
        });
    </script>
    
     <script type="text/javascript">
        $(function () {
            $("#txttgl").datepicker(
            {
                dateFormat: 'yy-mm-dd',
                hideIfNoPrevNext: true,
                minDate: '-0M',
                maxDate: '+1M'
            });
        });
    </script>
    
    <script>
    $('.fromdate').datepicker({
        dateFormat: 'yy-mm-dd',
        hideIfNoPrevNext: true,
        minDate: '-0M',
        maxDate: '0'
        //changeMonth: true,
        //changeYear: true,
        });
    $('.todate').datepicker({
        dateFormat: 'yy-mm-dd',
        hideIfNoPrevNext: true,
        minDate: '-0M',
        maxDate: '+1M'
        //changeMonth: true,
        //changeYear: true,
    });
    $('.fromdate').datepicker().bind("change", function () {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        $('.todate').datepicker("option", "minDate", minValue);
        calculate();
    });
    $('.todate').datepicker().bind("change", function () {
        var maxValue = $(this).val();
        maxValue = $.datepicker.parseDate("yy-mm-dd", maxValue);
        $('.fromdate').datepicker("option", "maxDate", maxValue);
        calculate();
    });
    
    function calculate() {
        var d1 = $('.fromdate').datepicker('getDate');
        var d2 = $('.todate').datepicker('getDate');
        var oneDay = 24*60*60*1000;
        var diff = 0;
        if (d1 && d2) {
      
          diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
        }
        $('.calculated').val(diff);
      }
    </script>
    
    <script>
    //   $("#txttgl").on("change",function(){
    //     var today   = new Date();
    //     var dd = String(today.getDate()).padStart(2, '0');
    //     var mm = String(today.getMonth() + 1).padStart(2, '0'); 
    //     var today = yyyy + '-' + mm + '-' + dd;
    //     var selected = $(this).val();
    //     var Difference_In_Time = selected.getTime() - today.getTime(); 
        
    //     var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24); 
      
    //     alert(today);
    //     alert(selected);
    //     alert(Difference_In_Days);
        
    //});
    </script>
    
<script>
$(document).ready(function() {
	//H5_loading.show();
			$("#galleryImage").change(function(){
			var post_id = $('#post_id').val();
			var packageName = $("input[name='package']:checked"). val();
			$('#loading_img').show();
			var fd = new FormData();
			var files = $('#galleryImage')[0].files[0];
			fd.append('userfile',files);
			fd.append('post_id',post_id);
			fd.append('packageName',packageName);
			
			$.ajax({
			   url: baseURL+'administrator/addImageGallary',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				
				success: function(response){
					$('#loading_img').hide();
					
						var obj = JSON.parse(response);
						
					if(obj.imagename!=''){
						var imagepath =baseURL+'assets/upload/gallary/'+obj.imagename;
					$(".multiple-uploads").prepend( '<li id="'+obj.id+'" style="margin:10px 10px 0 0;overflow:hidden"><input type="hidden" name="gallery[]" value="'+obj.imagename+'"><img src="'+imagepath+'" style=" width:100px;height:100px"><div style="clear:both"></div><div class="remove-image" onclick="removeimage('+obj.id+')">X</div></li>'); 
						
					}else{
						//alert('file not uploaded');
						
						 $('#Modal5images').modal('show');
						 return false;
					}
				},
			});
		});
		
		$("#featuredImage").change(function(){
	H5_loading.show();
	var fd = new FormData();
	var files = $('#featuredImage')[0].files[0];
	
	//alert(files.name);
	readURL(this);
	fd.append('userfile',files);
	$.ajax({
			   url: baseURL+'home/fImageGallary',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					H5_loading.hide();
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
	
	

	$(".numbervalidation").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
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
	
	  $('body').on('click', '.delete-vehicle', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this post?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Post has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletevehicle",
                        method: "POST",
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
	
	 $('body').on('click', '.delete-user', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'User has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deleteuser",
                        method: "POST",
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
	
		$( "#my_add_category" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_add_category input[required=true],#my_add_category radio[required=true],#my_add_category select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                
        });
		
        if(proceed){
			
			proceed = true;	
			$("#my_add_category").submit();
			return false;
        }
       
		event.preventDefault();
		
    });
	
		 $('body').on('click', '.delete-category', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this category?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Category has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletecategory",
                        method: "POST",
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
	
		$( "#my_add_brand" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_add_brand input[required=true],#my_add_brand radio[required=true],#my_add_brand select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                
        });
		
        if(proceed){
			
			proceed = true;	
			$("#my_add_brand").submit();
			return false;
        }
       
		event.preventDefault();
		
    });

	 $('body').on('click', '.delete-brand', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this brand?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Brand has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletebrand",
                        method: "POST",
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
	
	$( "#my_add_model" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_add_model input[required=true],#my_add_model radio[required=true],#my_add_model select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                
        });
		
        if(proceed){
			
			proceed = true;	
			$("#my_add_model").submit();
			return false;
        }
       
		event.preventDefault();
		
    });

    	 $('body').on('click', '.delete-model', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this model?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Model has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletemodel",
                        method: "POST",
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



	$( "#my_add_car_review" ).submit(function( event ){ //on form submit       
        var proceed = true;
		 
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_add_car_review input[required=true],#my_add_car_review radio[required=true],#my_add_car_review select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
					$(this).focus();
                }
                
        });
		
        if(proceed){
			
			proceed = true;	
			$("#my_add_car_review").submit();
			return false;
        }
       
		event.preventDefault();
		
    });
	
	 $('body').on('click', '.delete-catreview', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this review?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Review has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletereview",
                        method: "POST",
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
	
	
	$(".unavailable").click(function(){
	 var postid = $(this).attr('rel');
	  $('#postid').val(postid);
	});
	
	$("#saveunavailable").click(function(){
	 var postid = $('#postid').val();
	 var unavailable = $('#unavailable').val();
	 if(unavailable==''){
		 $('#unavailable').css('border-color','red');
		 return false;
	 }
	 H5_loading.show();
	 $.ajax({
				type: "POST",
				url: baseURL + "administrator/unavailable",
				data: {
					postid : postid,
					unavailable : unavailable
				},
				success: function(msgData) {
					H5_loading.hide();
					$('#unavailable').val('');
					 $( "#unavailable-success" ).show();

				}
			});
	});
	 $('body').on('click', '.available-vehicle', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to available this post?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Available!',
                    text: 'Post has been successfully availabled!',
                    icon: 'success'
                }).then(function() {
                   
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/available",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 //window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	
	
	
	
	$( "#my_corporate" ).submit(function( event ){ //on form submit       
	    var pageURL = baseURL + "administrator/corporateusers";
        var proceed = true;
		 event.preventDefault();
        //loop through each field and we simply change border color to red for invalid fields       
        $("#my_corporate input[required=true],#my_corporate radio[required=true],#my_corporate select[required=true]").each(function(){
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
			
			H5_loading.show();
			var formData = $("#my_corporate").serialize();
			$.ajax({
				type: "POST",
				url: baseURL+'administrator/addcorporate',
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
					    H5_loading.show();
					    $('#reg-suc-1').show();
						$('#reg-danger').hide();
						setTimeout(function() {
                        window.location.href = pageURL
                    }, 2000);
					    
					}
					//window.location.href = pageURL
					//H5_loading.hide();
					return false;
					
				}
			});
				
        }
       
		return false;
		
    });

$("#my_corporate input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	


// Active Corporate User	
$('body').on('click', '.deactive-corporate-user', function() {
		var pageURL = $(location).attr("href");
		//alert(pageURL);
        var ID = $(this).attr('rel');
		//alert(ID); //return false;
        swal({
            title: "Are you sure you want to enable this corporate user? ",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Enable!',
                    text: 'Corporate user has been  successfully enable!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/activeUser",
                        method: "POST",
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
	

// Deactive Corporate User
$('body').on('click', '.active-corporate-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to disable this corporate user? ",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Disable!',
                    text: 'Corporate user has been  successfully disable!',
                    icon: 'success'
                }).then(function() {
					 
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deactiveUser",
                        method: "POST",
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
	
	
	
	 $('body').on('click', '.delete-corporate-user', function() {
		  var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
		//alert(ID);
        swal({
            title: "Are you sure you want to delete this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'User has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                   //$('#lang_' + languageID).remove();
                    H5_loading.show();
                    $.ajax({
                        url: baseURL + "administrator/deletecorporateuser",
                        method: "POST",
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
	
	
	
} );
/*function removeimage($id){
	$('#loading_img').show();
	$('#'+$id).remove();
	$.ajax({
		   url: baseURL+'home/removeimage',
			type: 'post',
			data: {
				id :$id
			},
			success: function(response){
				$('#loading_img').hide();
					
				}
			
		});
}*/


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
</script>

<?php if(in_array('theme-setting',$urlLink)) { ?>
<script src="https://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
<script>
   CKEDITOR.replace( 'editor1' );
   CKEDITOR.replace( 'editor2' );
   CKEDITOR.replace( 'editor3' );
   CKEDITOR.replace( 'editor4' );
   CKEDITOR.replace( 'editor5' );
   CKEDITOR.replace( 'editor6' );
   CKEDITOR.replace( 'editor7' );
   CKEDITOR.replace( 'editor8' );
   CKEDITOR.replace( 'editor9' );
   </script>
<?php } ?>


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
								var imagecountlenth = parseInt(25)-parseInt(imagecount);
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
						formData.append('userfile[]', files[i]);
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
</body>
</html>