<html>
<head>
<title>Class Details</title>
<link rel="icon" href="chalkboard.png" type="image/x-icon" />
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
<form action="/sign3" method="post">
@csrf
<div class="container">
<br>
    <div class="row">
        <div class="col-sm-12">
            <h3 style="text-align:center;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size:40px; font-weight:bold; font-style:italic;text-shadow:1px 1px black">Class Details</h3>
            </div>
        </div>
</div>
<hr style="border-bottom:2px solid black; box-shadow:  2px 2px 2px 2px  black;">
<br>
<div class="container">
<div class="jumbotron" >
<div style="text-align:center">
<img src="chalkboard.png" style="height:100px;width:100px;border-radius:10%;color:skyblue;margin-top:-40px">
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Room No.:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Room Number" name="room">
                @if($errors->has('room'))
                <div class="error">{{$errors->first('room')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Section:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Section" name="sec">
                @if($errors->has('sec'))
                <div class="error">{{$errors->first('sec')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Strength:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Number of Student" name="sterngth">
                @if($errors->has('sterngth'))
                <div class="error">{{$errors->first('sterngth')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Teachers:</label>
                <input type="text" class="form-control" id="" placeholder="Enter the Teachers" name="teach">
                @if($errors->has('teach'))
                <div class="error">{{$errors->first('teach')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Subjects:</label>
                <input type="text" class="form-control" id="" placeholder="Enter the Subjects" name="sub">
                @if($errors->has('sub'))
                <div class="error">{{$errors->first('sub')}}</div>
                @endif
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-dark" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Reset" class="btn btn-dark" name="reset" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;">
  </div>
  </div>
  </div>
</form>
</body>
</head>
</html>

