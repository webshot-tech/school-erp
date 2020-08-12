<html>
<head>
<title>Student Sign up</title>
<link rel="icon" href="logo2.jpeg" type="image/x-icon" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
label{
  
    font-weight:bold;
    font-size:18px;
   
}
.jumbotron
{
   border-radius:20px;
   background-color:skyblue;
   box-shadow:  -1px 3px 10px 8px  black;
   margin-top:10px;
}
.error{
    color:red;
    font-weight:bold;
    text-align:center;
  

}
</style>
</head>
<body style="background-color:skyblue">
<form action="/sign1" method="post">
@csrf
<div class="container">
<br>
    <div class="row">
        <div class="col-sm-12">
            <h3 style="text-align:center;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size:40px; font-weight:bold; font-style:italic;text-shadow:1px 1px black">Student Registration Form</h3>
            </div>
        </div>
</div>
<hr style="border-bottom:2px solid black;box-shadow:  2px 2px 2px 2px  black;">
<br>
<div class="container">
<div class="jumbotron">
<div style="text-align:center">
<img src="student.png" style="height:100px;width:100px;border-radius:50%;color:skyblue;margin-top:-40px">
</div>
<br>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Name:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Name" name="name">
                @if($errors->has('name'))
                <div class="error">{{$errors->first('name')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Father Name:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Father Name" name="father">
                @if($errors->has('father'))
                <div class="error">{{$errors->first('father')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>D.O.B:</label>
                <input type="date" class="form-control" id="" placeholder="Enter date of birth" name="dob">
                @if($errors->has('dob'))
                <div class="error">{{$errors->first('dob')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Mother Name:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Mother Name" name="mother">
                @if($errors->has('mother'))
                <div class="error">{{$errors->first('mother')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>E-mail:</label>
                <input type="email" class="form-control" id="" placeholder="Enter email" name="email">
                @if($errors->has('email'))
                <div class="error">{{$errors->first('email')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Blood Group:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Blood Group" name="blood">
                @if($errors->has('blood'))
                <div class="error">{{$errors->first('blood')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Mobile:</label>
                <input type="number" class="form-control" id="" placeholder="Enter Phone Number" name="mobile"> 
                @if($errors->has('mobile'))
                <div class="error">{{$errors->first('mobile')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Birth Place:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Birth Place" name="birth">
                @if($errors->has('birth'))
                <div class="error">{{$errors->first('birth')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
        <label>Gender:</label>
            <select input type="text" class="form-control" name="gender">
            @if($errors->has('gender'))
                <div class="error">{{$errors->first('gender')}}</div>
                @endif
                <option>Male</option>
                <option>Female</option>
            </select>
          </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Register No.</label>
                <input type="text" class="form-control" id="" placeholder="Enter Reg no." name="reg">
                @if($errors->has('reg'))
                <div class="error">{{$errors->first('reg')}}</div>
                @endif
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Permanent Address:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Address" name="address">
                @if($errors->has('address'))
                <div class="error">{{$errors->first('address')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>State:</label>
                <input type="text" class="form-control" id="" placeholder="Enter state" name="state">
                @if($errors->has('state'))
                <div class="error">{{$errors->first('state')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>District:</label>
                <input type="text" class="form-control" id="" placeholder="Enter District" name="district">
                @if($errors->has('district'))
                <div class="error">{{$errors->first('district')}}</div>
                @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Pincode:</label>
                <input type="number" class="form-control" id="" placeholder="Enter pincode" name="pincode">
                @if($errors->has('pincode'))
                <div class="error">{{$errors->first('pincode')}}</div>
                @endif
        </div>
    </div>
</div>

<br>

<div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-dark" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;margin-bottom:5px;">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Reset" class="btn btn-dark" name="reset" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;">
  </div>
  </div>
  </div>
</form>
</body>
</head>
</html>
