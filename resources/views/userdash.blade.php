<!DOCTYPE html>
<html>
<head>
    <title>user dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
  <header>USER</header>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><button class="btn btn-infos" id="close"><i class="fa fa-times"></i></button></a></a>

  <ul class="list-unstyled components mb-5">
  <li class="active">
      <a href="/" class="a" style="background-color:#21618C"><span class="fa fa-qrcode"></span>Dashboard</a>
    </li>
    <li class="active">
      <a href="/" class="a"><span class="fa fa-home"></span>Home</a>
    </li>
    <li>
      <a href="" class="a"><span class="fa fa-user"></span>My Profile</a>
    </li>
    <li>
        <a href="" class="a"><span class="fas fa-sign-out-alt"></span>Logout</a>
    </li>
    </ul>
</div>


<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color:#042331;height:60px;">
  <a class="navbar-brand" href="#"><h3 id="text1">User <span>Dashboard</span></h3></a>

  <button type="button" id="sidebarCollapse" class="btn btn-darks" onclick="openNav()">
    <i class="fa fa-bars" aria-hidden="true"></i>

    </button>
</nav>
<br>

<div class="row justify-content-center">
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Enter Location" aria-label="Search" style="height:40px">
      <button class="btn btn-primary" type="submit">Search</button>
</form>
</div>
<br>
@foreach($dis as $item)
<div class="row justify-content-center">
<div class="card" style="width:50rem">
  <h5 class="card-header">Doctor Details</h5>
  <div class="card-body">
      <div style="text-align:left">
        <img src="test.jpg" class="card-img-top" alt="My Profile" style="height:70px;width:70px;border-radius:10px">
     </div>
  </div>
</div>
</div><br>
@endforeach

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "260px";
  document.getElementById("main").style.marginLeft = "260px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

</body>
</html>
