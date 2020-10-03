@extends('home')
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>User Registration</title>
<style>
.jumbotron{
  box-shadow: 3px 6px 10px 6px rgba(0,0,0,0.2);
 
}
#regbtn{
  background-color:#2980B9;
  width:130px;
  color: whitesmoke;
  font-weight: 600;
}
#regbtn:hover{
  background-color: #3498DB;
}
</style>
</head>

<body>
<br>
<div class="container">
<br>
<form class="form-horizontal" action="/userreg" method="post" enctype="multipart/form-data">
@csrf

<div class="jumbotron">
    <h4 style="text-align:center">Personal Details</h4>

    <br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter  Name" required>
        </div>
     </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Email id</label>
                <input type="email" class="form-control" name="email" id="email_id" aria-describedby="emailHelp" placeholder="Enter  Email" required>
            </div>
        </div>
    </div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Phone_no</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone No" required>
             </div>
     </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>D.O.B</label>
                <input type="date" class="form-control" name="DOB" id="DOB" placeholder="Enter DOB" required>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Gender:</label>
                <select class="form-control" name="gender" value="">
                    <option>Male</option>
                    <option>Female</option>
                </select>
             </div>
        </div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="form-group">
            <label for="">Upload Photo</label>
                <input type="file" class="form-control" placeholder=""  name="image" style="height:44px" required>
            </div>
    </div>
</div>
</div>
   <br>

   <div class="jumbotron">
    <h4 style="text-align:center">Login Details</h4>
    
    <br><br>
    <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
                   <label>User Name</label>
                    <input type="text" class="form-control" name="user" id="name" aria-describedby="emailHelp" placeholder="Enter User  Name" required>
                </div>
        </div>
</div>
<div class="row">
        <div class="col-sm-12">
        <div class="form-group">
                   <label>Password</label>
                    <input type="password" class="form-control" name="pass" id="name" aria-describedby="emailHelp" placeholder="Enter Password" required>
                </div>
        </div>
</div>
<div class="row">
        <div class="col-sm-12">
        <div class="form-group">
                   <label>Re-Password</label>
                    <input type="password" class="form-control" name="repass" id="name" aria-describedby="emailHelp" placeholder="Enter Re-Password" required>
                </div>
        </div>
</div>
<br>
<input type="submit" class="btn btn-primarys" id="regbtn" value="Save"></button>
  </div>
 </div>
</form>
</body>
</html>
