$(document).ready(function() {
	$('.nav1').addClass('nav_click');
	$('.nav1').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('.nav2').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('.nav3').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('input[name="check"]').attr('checked',true);
	 $('input[name="fullname"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_name"]').attr({
                	value: $('input[name="getfullname"]').val(),
       
                });
                 $('input[name="full_name_input_type"]').attr({
                    value: $('input[name="getfullname"]').attr('type'),
       
                });
                 $('input[name="full_name_input_name"]').attr({
                    value: $('input[name="getfullname"]').attr('name'),
       
                });
                
            }
            else{
            	$('input[name="full_name"]').attr({
                	value:'',
       
                });
            }
        });
	  $('input[name="add"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group address">';
					x+='<label for="exampleInputEmail1">Địa chỉ</label>';
					x+='<input type="text" name="full_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >';
                    x+='<input type="hidden" name="full_add_input_type" value="" />';
                    x+='<input type="hidden" name="full_add_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_add"]').attr({
                	value: $('input[name="getadd"]').val(),
       
                });
                $('input[name="full_add_input_type"]').attr({
                    value: $('input[name="getadd"]').attr('type'),
       
                });
                 $('input[name="full_add_input_name"]').attr({
                    value: $('input[name="getadd"]').attr('name'),
       
                });
                
            }
            else
            {
            	
            	$('.address').remove();
            }
        });
	  $('input[name="tel"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_tel"]').attr({
                	value: $('input[name="gettel"]').val(),
       
                });
                $('input[name="full_tel_input_type"]').attr({
                    value: $('input[name="gettel"]').attr('type'),
       
                });
                 $('input[name="full_tel_input_name"]').attr({
                    value: $('input[name="gettel"]').attr('name'),
       
                });

            }
            else
            {
            	$('input[name="full_tel"]').attr({
                	value:'',
       
                });

            }
        });
	  $('input[name="email"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group email">';
					x+='<label for="exampleInputEmail1">Email</label>';
					x+='<input type="text" name="full_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_email_input_type" value="" />';
                    x+='<input type="hidden" name="full_email_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_email"]').attr({
                	value: $('input[name="getemail"]').val(),
       
                });
                $('input[name="full_email_input_type"]').attr({
                    value: $('input[name="getemail"]').attr('type'),
       
                });
                 $('input[name="full_email_input_name"]').attr({
                    value: $('input[name="getemail"]').attr('name'),
       
                });

            }
            else
            {
            	$('.email').remove();

            }
        });
	  $('input[name="name_main"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_main_name"]').attr({
                	value: $('input[name="get_name_main"]').val(),
       
                });
                $('input[name="full_main_name_input_type"]').attr({
                    value: $('input[name="get_name_main"]').attr('type'),
       
                });
                $('input[name="full_main_name_input_name"]').attr({
                    value: $('input[name="get_name_main"]').attr('name'),
       
                });

            }
            else
            {
            	$('input[name="full_main_name"]').attr({
                	value:'',
       
                });

            }
        });
	  $('input[name="tel_name_main"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group tel_name_main">';
					x+='<label for="exampleInputEmail1">Điện thoại người liên hệ chính</label>';
					x+='<input type="text" name="full_tel_main_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_tel_main_name_input_type" value="" />';
                    x+='<input type="hidden" name="full_tel_main_name_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_tel_main_name"]').attr({
                	value: $('input[name="get_tel_name_main"]').val(),
       
                });
                 $('input[name="full_tel_main_name_input_type"]').attr({
                    value: $('input[name="get_tel_name_main"]').attr('type'),
       
                });
                 $('input[name="full_tel_main_name_input_name"]').attr({
                    value: $('input[name="get_tel_name_main"]').attr('name'),
       
                });

            }
             else
            {
            	$('.tel_name_main').remove();

            }
        });
	  $('input[name="email_main"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group email_main">';
					x+='<label for="exampleInputEmail1">Email người liên hệ chính</label>';
					x+='<input type="text" name="full_email_main" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_email_main_input_type" value="" />';
                    x+='<input type="hidden" name="full_email_main_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_email_main"]').attr({
                	value: $('input[name="get_email_main"]').val(),
       
                });
                $('input[name="full_email_main_input_type"]').attr({
                    value: $('input[name="get_email_main"]').attr('type'),
       
                });
                 $('input[name="full_email_main_input_name"]').attr({
                    value: $('input[name="get_email_main"]').attr('name'),
       
                });

            }
            else
            {
            	$('.email_main').remove();

            }
        });
	  $('input[name="birth"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group birth">';
					x+='<label for="exampleInputEmail1">Sinh nhật</label>';
					x+='<input type="text" name="full_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_birth_input_type" value="" />';
                    x+='<input type="hidden" name="full_birth_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_birth"]').attr({
                	value: $('input[name="get_birth"]').val(),
       
                });
                 $('input[name="full_birth_input_type"]').attr({
                    value: $('input[name="get_birth"]').attr('type'),
       
                });
                 $('input[name="full_birth_input_name"]').attr({
                    value: $('input[name="get_birth"]').attr('name'),
       
                });

            }
            else
            {
            	$('.birth').remove();

            }
        });
	  $('input[name="job"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group job">';
					x+='<label for="exampleInputEmail1">Ngành kinh doanh</label>';
					x+='<input type="text" name="full_job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_job_input_type" value="" />';
                    x+='<input type="hidden" name="full_job_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_job"]').attr({
                	value: $('input[name="get_job"]').val(),
       
                });
                $('input[name="full_job_input_type"]').attr({
                    value: $('input[name="get_job"]').attr('type'),
       
                });
                 $('input[name="full_job_input_name"]').attr({
                    value: $('input[name="get_job"]').attr('name'),
       
                });

            }
            else
            {
            	$('.job').remove();

            }
        });
	  $('input[name="contry"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group contry">';
					x+='<label for="exampleInputEmail1">Tỉnh/thành phố</label>';
					x+='<input type="text"  name="full_contry" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_contry_input_type" value="" />';
                    x+='<input type="hidden" name="full_contry_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_contry"]').attr({
                	value: $('input[name="get_contry"]').val(),
       
                });
                 $('input[name="full_contry_input_type"]').attr({
                    value: $('input[name="get_contry"]').attr('type'),
       
                });
                 $('input[name="full_contry_input_name"]').attr({
                    value: $('input[name="get_contry"]').attr('name'),
                });
       

            }
             else
            {
            	$('.contry').remove();

            }
        });
	  $('input[name="provice"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group provice">';
					x+='<label for="exampleInputEmail1">Quận/huyện</label>';
					x+='<input type="text"  name="full_provice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_provice_input_type" value="" />';
                    x+='<input type="hidden" name="full_provice_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_provice"]').attr({
                	value: $('input[name="get_provice"]').val(),
       
                });
                $('input[name="full_provice_input_type"]').attr({
                    value: $('input[name="get_provice"]').attr('type'),
       
                });
                 $('input[name="full_provice_input_name"]').attr({
                    value: $('input[name="get_provice"]').attr('name'),
                });
       

            }
            else
            {
            	$('.provice').remove();

            }
        });
	  $('input[name="gender"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group gender">';
					x+='<label for="exampleInputEmail1">Giới tính</label>';
					x+='<input type="text"  name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="gender_input_type" value="option" />';
                    x+='<input type="hidden" name="gender_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="gender"]').attr({
                	value: $('#gioitinh').val(),
       
                });
                 $('input[name="gender_input_name"]').attr({
                    value: $('#gioitinh').attr('name'),

                });
       

            }
             else
            {
            	$('.gender').remove();

            }
        });
	  $('input[name="content"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group content">';
					x+='<label for="exampleInputEmail1">Mô tả</label>';
					x+='<input type="text"  name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="content_input_type" value="" />';
                    x+='<input type="hidden" name="content_input_name" value="" />';
					x+='</div>';

                $('.add').append(x);
                $('input[name="content"]').attr({
                	value: $('input[name="get_content"]').val(),
       
                });
                $('input[name="content_input_type"]').attr({
                    value: $('input[name="get_content"]').attr('type'),
       
                });
                 $('input[name="content_input_name"]').attr({
                    value: $('input[name="get_content"]').attr('name'),

                });


            }
            else
            {
            	$('.content').remove();

            }
        });
	  $('button').click(function(event) {
	  	if($('input[name="full_name"]').val()==''||$('input[name="full_tel"]').val()==''||$('input[name="full_main_name"]').val()==''){
	  		alert('Cần nhập đầy đủ thông tin ');

	  	}
        if($('input[name="title"]').val()==''){
            alert('Cần chọn form')

        }
	  
	  });
});