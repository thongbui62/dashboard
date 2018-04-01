@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>FORM!</strong> SỬA FORM TRONG CƠ SỞ DỮ LIỆU
</div>
	<form action="{!!route('post_edit_form')!!}/<?php echo $dulieu['id']; ?>" method="POST">
		@csrf
		@include ('error')
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tên Form</label>
	    <input type="text" name="form_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên form" value="{!!$dulieu['name']!!}">
	    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập tên form</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Mô tả ngắn</label>
	    <input type="text" name="form_des" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả ngắn" value="{!!$dulieu['des']!!}">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">SỬA</button>
	</form>
@endsection