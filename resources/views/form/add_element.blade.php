<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{!!asset('public/ht97_template/template/css/bootstrap.css')!!}">
	<link rel="stylesheet" href="{!!asset('public/ht97_template/1.css')!!}">
</head>
<body>
	<div class="wrapper">
		<!-- start-header -->
		<div class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-warning" role="alert">
						    <strong>THÔNG BÁO!</strong>ĐĂNG KÝ FORM
						</div>
					</div>
					</div>
					
				</div>
			</div>
		</div>
		 <!-- end-header -->
		<!-- start-form -->
		<div class="form">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 form_1">
						<p>Các thông tin cần lấy:</p>
					</div>
					<div class="col-sm-6 form_1">
						<p>Option form của bạn sẽ hiển thị như sau:</p>
					</div>
				</div>
				<div class="row getform">
					<div class="col-sm-6">
						<form>
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th style="width: 15px">#</th>
						      <th scope="col">Trường dữ liệu</th>
						      <th scope="col" class="text-center">Sử dụng</th>
						      <th scope="col" class="text-center">Bắt buộc nhập</th>
						      <th scope="col" class="text-center">Placeholder</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Tên khách hàng</td>
						      <td class="text-center"><input type="checkbox" name="fullname" class="fullname"></td>
						      <td class="text-center"><input type="checkbox" name="check" ></td>
						      <td><input type="text" placeholder="Tên khách hàng" name="getfullname"></td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Địa chỉ</td>
						      <td class="text-center"><input type="checkbox" name="add" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Địa chỉ" name="getadd"></td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td >Điện thoại</td>
						      <td class="text-center"><input type="checkbox" name="tel" ></td>
						     <td class="text-center"><input type="checkbox" name="check" ></td>
						     <td><input type="number" placeholder="Điện thoại" name="gettel"></td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>Email</td>
						      <td class="text-center"><input type="checkbox" name="email" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="text" placeholder="Email" name="getemail"></td>
						    </tr>
						    <tr>
						      <th scope="row">5</th>
						      <td>Người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox"  name="name_main"></td>
						      <td class="text-center"><input type="checkbox" name="check" ></td>
						      <td><input type="text" placeholder="Người liên hệ chính" name="get_name_main"></td>
						    </tr>
						    <tr>
						      <th scope="row">6</th>
						      <td>Điện thoại người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox" name="tel_name_main"></td>
						     <td class="text-center"><input type="checkbox" ></td>
						     <td><input type="number" placeholder="Điện thoại người liên hệ chính" name="get_tel_name_main" ></td>
						    </tr>
						    <tr>
						      <th scope="row">7</th>
						      <td>Email người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox" name="email_main" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Email người liên hệ chính" name="get_email_main"></td>
						    </tr>
						    <tr>
						      <th scope="row">8</th>
						      <td>Nhóm khách hàng</td>
						      <td colspan="3">  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mới chọn" ></td>
						     
						    </tr>
						    <tr>
						      <th scope="row">9</th>
						      <td>Sinh nhật</td>
						     <td class="text-center"><input type="checkbox" name="birth" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="date" placeholder="Sinh nhật" name="get_birth"></td>
						    </tr>
						    <tr>
						      <th scope="row">10</th>
						      <td>Ngành kinh doanh</td>
						      <td class="text-center"><input type="checkbox" name="job"></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Ngành kinh doanh" name="get_job"></td>
						    </tr>
						    <tr>
						      <th scope="row">11</th>
						      <td>Tỉnh/Thành phố</td>
						      <td class="text-center"><input type="checkbox" name="contry" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="text" placeholder="Tỉnh/Thành phố" name="get_contry"></td>
						    </tr>
						    <tr>
						      <th scope="row">12</th>
						      <td>Quận/huyện</td>
						      <td class="text-center"><input type="checkbox" name="provice"></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Quận/huyện" name="get_provice"></td>
						    </tr>
						    <tr>
						      <th scope="row">13</th>
						      <td>Giới tính</td>
						     <td class="text-center"><input type="checkbox" name="gender"></td>
						     <td class="text-center"><input type="checkbox" ></td>
						     <td class="text-center">
						     	<select name="gioitinh" id="gioitinh">
									<option value="nam">Nam</option>
									<option value="nu">Nữ</option>
						     	</select>
						     </td>
						    </tr>
						    <tr>
						      <th scope="row">14</th>
						      <td>Mô tả</td>
						      <td class="text-center"><input type="checkbox" name="content" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Mô tả" name="get_content"></td>
						    </tr>
						    <tr>
						    	<td>
						    		<a href="{!!route('dashboard')!!}" class="btn btn-secondary">Quay lại</a>
									
						    	</td>
						    	
						    	
						    	
						    </tr>
						  </tbody>
						</table>
					</form>
					</div>
					<div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
						    <form action="{!!route('post_add_element')!!}" method="POST">
						    	@csrf
						    	<select name="title" id="tieude" style="width: 100%;height: 40px">
						    		<option value=''>Tiêu đề Option form:</option>
									@foreach($dulieu as $v)
									<option value="{!!$v['id']!!}">{!!$v['name']!!}</option>
									@endforeach
								</select>
						    		<div class="add">	
										<div class="form-group">
								    		<label for="exampleInputEmail1">Tên khách hàng<span>*</span></label>
								    		<input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
								    		<input type="hidden" name="full_name_input_type" value="">
								    		<input type="hidden" name="full_name_input_name" value="">
								  		</div>
								  		<div class="form-group">
								    		<label for="exampleInputEmail1">Điện thoại<span>*</span></label>
								    		<input type="text" class="form-control" name="full_tel" id="exampleInputEmail1" aria-describedby="emailHelp" >
								    		<input type="hidden" name="full_tel_input_type" value="">
								    		<input type="hidden" name="full_tel_input_name" value="">
								  		</div>
								  		<div class="form-group">
								    		<label for="exampleInputEmail1">Người liên hệ chính<span>*</span></label>
								    		<input type="text" class="form-control" name="full_main_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
								    		<input type="hidden" name="full_main_name_input_type" value="">
								    		<input type="hidden" name="full_main_name_input_name" value="">

								  		</div>
						    		</div>
							  
							  <button type="submit" class="btn btn-warning">Đăng ký</button>
							</form>
						  </div>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
		</div>
		<!-- end-form -->
	</div>







<script src="{!!asset('public/ht97_template/template/jquery-3.3.1.js')!!}"></script>
<script src="{!!asset('public/ht97_template/template/js/bootstrap.js')!!}"></script>
<script src="{!!asset('public/ht97_template/1.js')!!}"></script>
</body>
</html>