
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Doctor login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <br><br><br>
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Doctor Sign In</h5>
            @if(Session::has('msg'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{Session::get('msg')}}!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(Session::has('msg1'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Session::get('msg1')}}!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
            <form class="form-signin" method="post" action="admin_login">
              @csrf
              <div class="form-label-group">
                <input type="text" id="admin_email" class="form-control" name="mail" placeholder="Admin_email" required autofocus>
                <label for="admin_email">User Name</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass"class="form-control" placeholder="Password" required>
                <label for="inputPassword">password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
