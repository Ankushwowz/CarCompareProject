// 
var skins_path = 'assets/layerslider/skins/index.html'
    jQuery("#layerslider").layerSlider({
        responsive: false,
        responsiveUnder: 1280,
        layersContainer: 1280,
        skin: 'noskin',
        hoverPrevNext: false,
        skinsPath: skins_path
    });


var per_page = '8';
var recent_count = '8';
jQuery(document).ready(function(){
    jQuery('.list-switcher a').click(function(e){
        jQuery('.list-switcher a').removeClass('selected');
        jQuery(this).addClass('selected');
        e.preventDefault();
        var target = jQuery(this).attr('target');
        var loadUrl = jQuery(this).attr('href');
        jQuery('.recent-loading').show();
        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                jQuery('.'+target).html(responseText);
                jQuery('.recent-loading').hide();
                if(jQuery('.recent-posts > div').children().length<recent_count)
                {
                    jQuery('.load-more-recent').hide();
                }
                fix_grid_height();
                
            }
        );
    });

    jQuery('.load-more-recent').click(function(e){
        e.preventDefault();
        var next = parseInt(recent_count)+parseInt(per_page);
        jQuery('.list-switcher a').each(function(){
            var url = jQuery(this).attr('href');
            url = url.replace('/'+recent_count+'/','/'+next+'/');
            jQuery(this).attr('href',url);
        });
        recent_count = next;
        jQuery('.list-switcher > .selected').trigger('click');
    });
});

 var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");

    // added on version 1.5
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isSsl = '1';
    //end

    jQuery(window).resize(function(){
        if(!isAndroid) {
            jQuery('.chosen-select').select2({
                theme: "classic"
            });
        }
    });

    $(document).ready(function(){
        if(!isAndroid) {
            jQuery('.chosen-select').select2({
                theme: "classic"
            });
        }

        jQuery('#select-brand').change(function(){
            var val = jQuery(this).val();
            jQuery.post(
                "show/get_models_ajax/index.html",
                {brand: val},
                function(html){
                    
                    jQuery('#select-model').empty();
                    jQuery('#select-model').html(html);
                },
                "html"
            );
        }).change();

        
        var distance_unit = 'Miles';

        jQuery("#slider-price-sell").slider({

            min: 1,

            max: 500,

            value: 25,

            slide: function (event, ui) {

                jQuery("#price-slider-sell").val(ui.value);
                jQuery("#amount").html( ui.value + ' ' + distance_unit );

            }

        });
        jQuery("#amount").html(jQuery( "#slider-price-sell" ).slider( "value") + ' ' + distance_unit);

        $("#mileage_slider").ionRangeSlider({
            min: 0,
            max: 10000,
            type: 'double',
            prefix: "Miles",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        var min_price=0,max_price=500;
        $.ajax({
          dataType: "json",
          url: "https://oxeenit.com/cardealer/index.php/en/show/get_min_max_car_price_ajax/",
          success: function(data) {
              min_price = data['min_price'];
              max_price = data['max_price'];
              $("#price_slider").ionRangeSlider({
                  min: min_price,
                  max: max_price,
                  type: 'double',
                  prefix: "&#x4b;&#x73;&#x68;&#x73;",
                  maxPostfix: "+",
                  prettify: false,
                  hasGrid: true
              });
          },
          error: function() {
            $("#price_slider").ionRangeSlider({
                min: 0,
                max: 5000,
                type: 'double',
                prefix: "&#x4b;&#x73;&#x68;&#x73;",
                maxPostfix: "+",
                prettify: false,
                hasGrid: true
            });
          }
        });            
    });

    // updated on version 1.5
    function findLocation()
    {
        if(isChrome==true && isSsl==0)
        {
            var r = confirm("Location service by google is not available for non ssl sites(Only in Chrome browser). Do you want to use your ip address for getting your location ? NB- The result may not be exactly same as google");
            if(r==true)
            {
                $.get("//ipinfo.io", function(response) {
                var arr = response.loc.split(",");

                        $('#geo_lat').val(arr[0]);
                        $('#geo_lng').val(arr[1]);

                }, "jsonp");
                
            }
        }
        else
        {
            if(!!navigator.geolocation) {

                navigator.geolocation.getCurrentPosition(function(position) {

                    $('#geo_lat').val(position.coords.latitude);
                    $('#geo_lng').val(position.coords.longitude);


                });

            } else {
                alert('No Geolocation Support.');
            }            
        }
    }
    //end

    $(document).ready(function(){

        var site_url = 'index.html';
        jQuery('#country').change(function(){
            // jQuery('#city').val('');
            // jQuery('#selected_city').val('');
            var val = jQuery(this).val();
            
            var loadUrl = site_url+'/show/get_locations_by_parent_ajax/'+val;

            jQuery.post(
                loadUrl,
                {},
                function(responseText){
                                        jQuery('#state').html(responseText);
                    var sel_country = '';
                    var sel_state   = '';
                    if(val==sel_country)
                    jQuery('#state').val(sel_state);
                    else
                    jQuery('#state').val('');
                    jQuery('#state').focus();
                    jQuery('#state').trigger('change');
                    
                }
            );
         }).change();

        var city_field_type =  'dropdown' ;

            jQuery('#state').change(function(){
                                var val = jQuery(this).val();
                var sel_state   = '';
                var sel_city   = '';
                var city   = '';
                
                if(city_field_type=='dropdown')
                populate_city(val); //populate the city drop down

                if(val==sel_state)
                {
                    jQuery('#selected_city').val(sel_city);
                    jQuery('#city').val(city);
                }
                else
                {
                    jQuery('#selected_city').val('');
                    jQuery('#city').val('');            
                }
                
            }).change();

    });

function populate_city(parent) {
    var site_url = 'index.html';
    var loadUrl = site_url+'/show/get_city_val_dropdown_by_parent_ajax/'+parent;
        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                jQuery('#city_dropdown').html(responseText);
                var sel_city   = '';
                jQuery('#city_dropdown').val(sel_city);
            }
        );
}


$('.filter-change').change(function(){
    var fd = new FormData();
    if($('select[name="state"]').val() != ''){
        fd.append("state",$('select[name="state"]').val());
    }
    if($('select[name="advert_type"]').val() != ''){
        fd.append("advert_type",$('select[name="advert_type"]').val());
    }
    if($('select[name="condition"]').val() != ''){
        fd.append("condition",$('select[name="condition"]').val());
    }
    if($('select[name="brand"]').val() != ''){
        fd.append("brand",$('select[name="brand"]').val());
    }
    if($('select[name="model"]').val() != ''){
        fd.append("model",$('select[name="model"]').val());
    }
    if($('select[name="category"]').val() != 'any'){
        fd.append("category",$('select[name="category"]').val());
    }
    if($('select[name="fuel_type"]').val() != ''){
        fd.append("fuel_type",$('select[name="fuel_type"]').val());
    }
    if($('select[name="mileage_range"]').val() != ''){
        fd.append("mileage_range",$('select[name="mileage_range"]').val());
    }
    if($('select[name="price_slider1"]').val() != ''){
        fd.append("price_slider1",$('select[name="price_slider1"]').val());
    }

    
    $.ajax({
        url: 'https://oxeenit.com/cardealer/index.php/en//filter',
//      dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: fd,
        type: 'post',
        success: function(res){
            $('#filter-search').html('<i class="fa fa-search"></i>&nbsp;Search Cars ('+res+')');
        }
    });
    
});

jQuery(document).ready(function(){

    if(old_ie==1)
    {
        jQuery('#ie-msg-modal').modal('show');
    }

    jQuery('.signin').click(function(e){
        e.preventDefault();
        jQuery('#signin-modal').modal('show');
    });

});


    $(document).ready(function() {
        
        jQuery('.list-switcher').each(function(){
            var view_type = 'grid';
            var alias = 'home';
            if(view_type=='grid')
            jQuery(this).children(":first").trigger('click');           
            else if(view_type!='grid' && alias=='ad_search')
            jQuery(this).children(":nth-child(2)").trigger('click');           
            else
            jQuery(this).children(":first").trigger('click');           
        });

        jQuery('.featured-list-switcher').each(function(){
            jQuery(this).children(":first").trigger('click');
        });
      

    });


// Sell Your Page

  $(document).ready(function() {
        
        jQuery('.list-switcher').each(function(){
            var view_type = 'grid';
            var alias = '';
            if(view_type=='grid')
            jQuery(this).children(":first").trigger('click');           
            else if(view_type!='grid' && alias=='ad_search')
            jQuery(this).children(":nth-child(2)").trigger('click');           
            else
            jQuery(this).children(":first").trigger('click');           
        });

        jQuery('.featured-list-switcher').each(function(){
            jQuery(this).children(":first").trigger('click');
        });
      

    });

jQuery(document).ready(function(){

    if(old_ie==1)
    {
        jQuery('#ie-msg-modal').modal('show');
    }

    jQuery('.signin').click(function(e){
        e.preventDefault();
        jQuery('#signin-modal').modal('show');
    });

});

jQuery(document).ready(function(){

    $('input[name="title_en"]').keyup(function(){
        var val = $(this).val();
        val = val.replace(/[^a-zA-Z ]/g, "");
        val = val.replace(/\s+/g, '-').toLowerCase();
        val = val.replace(" ", '-').toLowerCase();

        var slug_val = $('input[name=url_slug]').val();
        $('input[name=url_slug]').val(val);
    });


    $('select[name=category]').change(function(){
        var cat_id = $('select[name=category] > option:selected').val();
        if(cat_id=='')
        {
            $('.custom-fields').hide();
            $('.cat-all').show();
        }
        else
        {
            $('.custom-fields').hide();
            $('.cat-all').show();
            $('.cat-'+cat_id).show();            
        }
        
    }).change();

    var sel_model = '';

    jQuery('#select-brand').change(function(){
        var val = jQuery(this).val();
        jQuery.post(
            "show/get_models_ajax/index.html",
            {brand: val},
            function(html){
                
                jQuery('#select-model').empty();
                jQuery('#select-model').html(html);
                jQuery('#select-model').val(sel_model);
                //console.log(options);
            },
            "html"
        );
    }).change();

    var city_field_type =  'dropdown' ;
    jQuery('#video_url').change(function(){
        var url = jQuery(this).val();
        showVideoPreview(url);
    }).change();

    function getUrlVars(url) {
        var vars = {};
        var parts = url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

    function showVideoPreview(url)
    {
        if(url.search("youtube.com")!=-1)
        {
            var video_id = getUrlVars(url)["v"];
            //https://www.youtube.com/watch?v=jIL0ze6_GIY
            var src = '//www.youtube.com/embed/'+video_id;
            //var src  = url.replace("watch?v=","embed/");
            var code = '<iframe class="thumbnail" width="100%" height="200" src="'+src+'" frameborder="0" allowfullscreen></iframe>';
            jQuery('#video_preview').html(code);
        }
        else if(url.search("vimeo.com")!=-1)
        {
            //http://vimeo.com/64547919
            var segments = url.split("https://oxeenit.com/");
            var length = segments.length;
            length--;
            var video_id = segments[length];
            var src  = url.replace("vimeo.com","player.vimeo.com/video");
            var code = '<iframe class="thumbnail" src="//player.vimeo.com/video/'+video_id+'" width="100%" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
            jQuery('#video_preview').html(code);
        }
        else
        {
            //alert("only youtube and video url is valid");
        }
    }

    jQuery('#contact_for_price').click(function(){
        show_hide_price();
    });
    show_hide_price();

    jQuery('.upload-button').click(function(){
        jQuery('#photoimg_featured').click();
    });

    jQuery('#featured-img-input').change(function(){
        var val = jQuery(this).val();
        if(val=='')
        {
            val = 'no-image.html';
        }

        var base_url  = '../../index.html';
        var image_url = base_url+'uploads/thumbs/'+val;
        jQuery( '#featured-img' ).attr('src',image_url);

    }).change();


    jQuery('#photoimg').attr('target','.multiple-uploads');
    jQuery('#photoimg').attr('input','gallery');
    var obj = $("#dragandrophandler");
    obj.on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border', '2px solid #0B85A1');
    });

    obj.on('dragover', function (e)
    {
         e.stopPropagation();
         e.preventDefault();
    });

    obj.on('drop', function (e)
    {
         $(this).css('border', '2px dotted #0B85A1');
         e.preventDefault();
         var files = e.originalEvent.dataTransfer.files;

         var curr_photo_count = jQuery('.multiple-uploads').children().length-1;
         var max = '5';

         if(files.length>(max-curr_photo_count))
         {
            var msg = "You can upload maximum "+max+" Gallery photos";
            alert(msg);
         }
         else
             handleFileUpload(files,obj);
    });

    $(document).on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });

    $(document).on('dragover', function (e)
    {
      e.stopPropagation();
      e.preventDefault();
      obj.css('border', '2px dotted #0B85A1');
    });
    
    $(document).on('drop', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });

    jQuery('.multiple-uploads > .add-image').click(function(){
        jQuery('#photoimg').attr('target','.multiple-uploads');
        jQuery('#photoimg').attr('input','gallery');
        jQuery('#photoimg').click();
    });

    jQuery( ".multiple-uploads" ).sortable();

    jQuery('.logo-upload-button').click(function(){
        jQuery('#photoimg_logo').click();
    });

    jQuery('#brochure-input').change(function(){
        var val = jQuery(this).val();
        if(val=='')
        {
            val = 'N/A';
        }

        var base_url  = '../../index.html';
        var image_url = base_url+'uploads/brochure/'+val;
        jQuery( '#brochure' ).html('<a href="'+image_url+'">'+val+'</a>');

    }).change();

    jQuery('.clear-brochure').click(function(e){
        e.preventDefault();
        jQuery('#brochure-input').val('');
        jQuery('#brochure-input').trigger('change');
    });

    var site_url = 'index.html';
    jQuery('#country').change(function(){
        var val = jQuery(this).val();        
        var loadUrl = site_url+'/show/get_locations_by_parent_ajax/'+val;
        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                                jQuery('#state').html(responseText);
                var sel_country = '';
                var sel_state   = '';
                if(val==sel_country)
                jQuery('#state').val(sel_state);
                else
                jQuery('#state').val('');
                jQuery('#state').focus();
                jQuery('#state').trigger('change');
                
            }
        );
     }).change();

    jQuery('#state').change(function(){
                var val = jQuery(this).val();
        var sel_state   = '';
        var sel_city   = '';
        var city   = '';
        
        if(city_field_type=='dropdown')
            populate_city(val);

        if(val==sel_state)
        {
            jQuery('#selected_city').val(sel_city);
            jQuery('#city').val(city);
        }
        else
        {
            jQuery('#selected_city').val('');
            jQuery('#city').val('');            
        }
        
    });

            var parent = '#state';
    
    if(city_field_type=='autocomplete') {
        jQuery( "#city" ).bind( "keydown", function( event ) {
            if ( event.keyCode === jQuery.ui.keyCode.TAB &&
                jQuery( this ).data( "ui-autocomplete" ).menu.active ) {
                event.preventDefault();
            }
        })
            .autocomplete({
                source: function( request, response ) {

                    jQuery.post(
                        "show/get_cities_ajax/index.html",
                        {term: request.term,parent: jQuery(parent).val()},
                        function(responseText){
                            response(responseText);
                            jQuery('#selected_city').val('');
                            jQuery('.city-loading').html('');
                        },
                        "json"
                    );
                },
                search: function() {
                    // custom minLength
                    var term = this.value ;
                    if ( term.length < 2 || jQuery(parent).val()=='') {
                        return false;
                    }
                    else
                    {
                        jQuery('.city-loading').html('Loading...');
                    }
                },
                focus: function() {
                    // prevent value inserted on focus
                    return false;
                },
                select: function( event, ui ) {
                    this.value = ui.item.value;
                    jQuery('#selected_city').val(ui.item.id);
                    jQuery('.city-loading').html('');
                    return false;
                }
            });
    }
    else if(city_field_type=='dropdown') {
        jQuery('#city_dropdown').change(function (){
            var val = jQuery('option:selected', this).attr('city_id');
            jQuery('#selected_city').val(val);
        });
    }

});
function show_hide_price()
{
    var val = jQuery('#contact_for_price').attr('checked');
    if(val=='checked')
    {
        jQuery('.price-input-holder').hide();
    }
    else
    {
        jQuery('.price-input-holder').show();        
    }
}

function populate_city(parent) {
    var site_url = 'index.html';
    var loadUrl = site_url+'/show/get_city_dropdown_by_parent_ajax/'+parent;
        jQuery.post(
            loadUrl,
            {},
            function(responseText){
                jQuery('#city_dropdown').html(responseText);
                var sel_city   = '';
                jQuery('#city_dropdown').val(sel_city);
            }
        );
}

function removeImage(e){

      var img_e =  e;
      var img = jQuery(e).attr('img');
      jQuery.post(
          "admin/content/remove_unused_gallery_img/index.html",
          {name:img},
          function(responseText){
            jQuery(img_e).parent().remove();
          },
          "html"
      );

}
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#price").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
});


function sendFileToServer(formData,status,feature_img_progress)
{
    var uploadURL = 'user/uploadgalleryfile.html'; //Upload URL
    var extraData ={}; //Extra Data.
    var jqXHR=$.ajax({
            xhr: function() {
            var xhrobj = $.ajaxSettings.xhr();
            if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = (position / total * 100);
                            //console.log(percent);
                            //alert(percent);
                            var percentVal = percent+'%';
                            jQuery('#myModal .bar').width(percentVal);
                            jQuery('#myModal .percent').html(percentVal); 
                        }
                        status.setProgress(percent);
                    }, false);
                }
            return xhrobj;
        },
    url: uploadURL,
    type: "POST",
    contentType:false,
    processData: false,
        cache: false,
        data: formData,
        beforeSend: function() {
            jQuery('#myModal').modal('show');
            var percentVal = '0%';
            jQuery('#myModal .bar').width(percentVal);
            jQuery('#myModal .percent').html(percentVal);   
        },
        success: function(data){
         
            var percentVal = '100%';
            jQuery('#myModal .bar').width(percentVal);
            jQuery('#myModal .percent').html(percentVal);

            var response = jQuery.parseJSON(data);
            if(response.error==0)
            {
                var base_url  = '../../index.html';
                var target = jQuery('#photoimg').attr('target');
                var input  = jQuery('#photoimg').attr('input');

                var image_url = base_url+'uploads/gallery/'+response.name;
                var html = '<li style="margin:10px 10px 0 0;overflow:hidden">'+
                    '<input type="hidden" name="'+input+'[]" value="'+response.name+'" />'+
                    '<image src="'+image_url+'" style="height:100%"/>'+
                    '<div style="clear:both"></div>'+
                    '<div class="remove-image" onclick="jQuery(this).parent().remove();">X</div>'+
                    '</li>';

                jQuery( target ).prepend(html);
                jQuery(target+'-input').val

            }
            else{
                alert(response.error);
            } 
            
            function show_popup(){
      jQuery('#myModal').modal('hide');
   };
   window.setTimeout( show_popup, 10000 );
       
            //alert('end upload');
        }
    });
 
    status.setAbort(jqXHR);
}
 
var rowCount=0;
function createStatusbar(obj)
{
 
    this.setFileNameSize = function(name,size)
    {
    }
    this.setProgress = function(progress)
    {      
    }
    this.setAbort = function(jqxhr)
    {
    }
}
function handleFileUpload(files,obj)
{
   // updated on version 1.7
   var max = '5';
   var limit = 0;
   if(files.length>=max)
        limit = max;
   else
        limit = files.length;

   for (var i = 0; i < limit; i++)
   {
        var fd = new FormData();
        fd.append('photoimg', files[i]);
        var feature_img_progress = 0;
        var status = new createStatusbar(obj); //Using this we can set progress.
        sendFileToServer(fd,status,feature_img_progress);
 
   }
   //end
}

jQuery(document).ready(function(){
    var feature_img_progress = 0;
    var pre_loader;
    var post_loader;

    jQuery('#photoimg').change(function(){
        var files = $("#photoimg")[0].files;
        //updated on version 1.7
        var curr_photo_count = jQuery('.multiple-uploads').children().length-1;
        var max = '5';

        if(files.length>(max-curr_photo_count))
        {
            var msg = "You can upload maximum "+max+" Gallery photos";
            alert(msg);
        }
        else
        handleFileUpload(files,$("#dragandrophandler"));
        //end
    });

    jQuery('#photoimg_featured').change(function(){
        
            var formData = new FormData();
            var files = $("#photoimg_featured")[0].files;
            formData.append('photoimg', files[0]);

            var uploadURL = 'user/uploadfeaturedfile.html'; //Upload URL
            var extraData ={}; //Extra Data.
            var jqXHR=$.ajax({
                    xhr: function() {
                    var xhrobj = $.ajaxSettings.xhr();
                    if (xhrobj.upload) {
                            xhrobj.upload.addEventListener('progress', function(event) {
                                var percent = 0;
                                var position = event.loaded || event.position;
                                var total = event.total;
                                if (event.lengthComputable) {
                                    percent = (position / total * 100);
                                    var percentVal = percent+'%';
                                    jQuery('#myModal .bar').width(percentVal);
                                    jQuery('#myModal .percent').html(percentVal); 
                                }
                                
                            }, false);
                        }
                    return xhrobj;
                },
            url: uploadURL,
            type: "POST",
            contentType:false,
            processData: false,
                cache: false,
                data: formData,
                beforeSend: function() {
                    jQuery('#myModal').modal('show');
                    var percentVal = '0%';
                    jQuery('#myModal .bar').width(percentVal);
                    jQuery('#myModal .percent').html(percentVal);   
                },
                success: function(data){
                 
                    var percentVal = '100%';
                    jQuery('#myModal .bar').width(percentVal);
                    jQuery('#myModal .percent').html(percentVal);

                    var response = jQuery.parseJSON(data);
                    if(response.error==0)
                    {
                        jQuery('#featured-img-input').val(response.name);
                        jQuery('#featured-img-input').trigger('change');
                        jQuery('#myModal').modal('hide');

                    }
                    else
                    {
                        if(response.error){
                            var massage = response.error;
                            jQuery('#myModal').modal('hide');
                            alert(massage);
                        }
                    }
                    jQuery('#myModal').modal('hide');               
                }
            });

    });


    jQuery('#photoimg_logo').change(function(){
        
            var formData = new FormData();
            var files = $("#photoimg_logo")[0].files;
            formData.append('photoimg', files[0]);

            var uploadURL = 'user/upload_brochurefile.html'; //Upload URL
            var extraData ={}; //Extra Data.
            var jqXHR=$.ajax({
                    xhr: function() {
                    var xhrobj = $.ajaxSettings.xhr();
                    if (xhrobj.upload) {
                            xhrobj.upload.addEventListener('progress', function(event) {
                                var percent = 0;
                                var position = event.loaded || event.position;
                                var total = event.total;
                                if (event.lengthComputable) {
                                    percent = (position / total * 100);
                                    var percentVal = percent+'%';
                                    jQuery('#myModal .bar').width(percentVal);
                                    jQuery('#myModal .percent').html(percentVal); 
                                }
                                
                            }, false);
                        }
                    return xhrobj;
                },
            url: uploadURL,
            type: "POST",
            contentType:false,
            processData: false,
                cache: false,
                data: formData,
                beforeSend: function() {
                    jQuery('#myModal').modal('show');
                    var percentVal = '0%';
                    jQuery('#myModal .bar').width(percentVal);
                    jQuery('#myModal .percent').html(percentVal);   
                },
                success: function(data){
                 
                    var percentVal = '100%';
                    jQuery('#myModal .bar').width(percentVal);
                    jQuery('#myModal .percent').html(percentVal);

                    var response = jQuery.parseJSON(data);
                    if(response.error==0)
                    {
                        jQuery('#brochure-input').val(response.name);
                        jQuery('#brochure-input').trigger('change');
                        jQuery('#myModal').modal('hide');

                    }
                    else
                    {
                        if(response.error){
                            var massage = response.error;
                            jQuery('#myModal').modal('hide');
                            alert(massage);
                        }
                    }
                    jQuery('#myModal').modal('hide');               
                }
            });

    });

});

