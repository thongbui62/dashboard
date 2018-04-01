@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>FORM!</strong> Thêm form vào cơ sở dữ liệu
</div>
	<form action="{!!route('add_form')!!}" method="POST">
		@csrf
		@include ('error')
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tên Form</label>
	    <input type="text" name="form_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên form">
	    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập tên form</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Mô tả ngắn</label>
	    <input type="text" name="form_des" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả ngắn">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Thêm</button>
	</form>
@endsection