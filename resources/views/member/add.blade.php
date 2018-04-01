@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>ĐĂNG KÝ THÀNH VIÊN!</strong> Vui lòng nhập đầy đủ thông tin</div>
    <form action="{!! route('post_add')!!}" method="POST">
    	@csrf
    	@include ('error')
	  <div class="form-group">
	    <label for="exampleInputEmail1">UserName</label>
	    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập UserName">
	    <small id="emailHelp" class="form-text text-muted">Vui lòng điền username</small>
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Email">
	  
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nhập password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection