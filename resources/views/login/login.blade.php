<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="{!!asset('public/ht97_template/template/css/bootstrap.min.css')!!}">
  <style>
    .container{
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 text-center">
        <h3>Đăng nhập hệ thống</h3>
        <form action="{!!route('post_login')!!}" method="POST">
          @csrf
          @include ('error')
          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập username">
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nhập password">
          </div>
         
          <button type="submit" class="btn btn-primary">Đăng nhập</button>
      </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>
</html>