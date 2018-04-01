@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>THÔNG BÁO!</strong> DANH SÁCH THÀNH VIÊN CÓ TRONG HỆ THỐNG</div>
    <table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Username</th>
	      <th scope="col">Email</th>
	      <th scope="col">Hành động</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $sothutu=0; 

	  	?>

	  	@foreach($dulieu as $v)

	  	<?php  $sothutu++ ?>
	    <tr>
	      <th scope="row">{!!$sothutu!!}</th>
	      <td>{!!$v['name']!!}</td>
	      <td>{!!$v['email']!!}</td>
	      <td>
	      	<a href="{!!route('get_edit_user')!!}/<?php echo $v['id']; ?>" class="btn btn-info fa fa-edit">Sửa</a>
	      	<a href="{!!route('delete_user')!!}/<?php echo $v['id']; ?>" class="btn btn-danger fa fa-remove">Xóa</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
@endsection