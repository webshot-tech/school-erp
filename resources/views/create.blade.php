<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title></title>
    <style media="screen">
      h1{
        text-align: center;
      }

      .error{
        font-weight: bold;
        color: red;
      }
    </style>
  </head>
  <body>
<div class="container">
  <h1>STUDENT REGISTERATION</h1>
  <form  action="insert" method="post">
    @csrf
    <div class="row">
      <div class="col-sm-6">
        <label>Name:</label>
      <input type="text" name="name" class="form-control" placeholder="Enter your name">
      @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Email ID:</label>
      <input type="text" name="mail" class="form-control" placeholder="Enter your E-mail">
      @if($errors->has('mail'))
    <div class="error">{{ $errors->first('mail') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label>Phone:</label>
      <input type="text" name="phone" class="form-control" placeholder="Enter your Phone" maxlength="10">
      @if($errors->has('phone'))
    <div class="error">{{ $errors->first('phone') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Roll No:</label>
      <input type="text" name="roll" class="form-control" placeholder="Enter your Roll No">
      @if($errors->has('roll'))
    <div class="error">{{ $errors->first('roll') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label>Mother's Name:</label>
      <input type="text" name="mother" class="form-control" placeholder="Enter your Mothers Name">
      @if($errors->has('mother'))
    <div class="error">{{ $errors->first('mother') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Father's Name:</label>
      <input type="text" name="father" class="form-control" placeholder="Enter your Fathers Name">
      @if($errors->has('father'))
    <div class="error">{{ $errors->first('father') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label>D.O.B:</label>
      <input type="date" name="dob" class="form-control" placeholder="Enter your DOB">
      @if($errors->has('dob'))
    <div class="error">{{ $errors->first('dob') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Gender:</label>
      <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      @if($errors->has('gender'))
    <div class="error">{{ $errors->first('gender') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <label>Birth Place:</label>
      <input type="text" name="birth" class="form-control" placeholder="Enter your Birth place">
      @if($errors->has('birth'))
    <div class="error">{{ $errors->first('birth') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <label>Address:</label>
        <input type="text" name="add" class="form-control" placeholder="Enter your Address">
        @if($errors->has('add'))
      <div class="error">{{ $errors->first('add') }}</div>
  @endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label>District:</label>
      <input type="text" name="district" class="form-control" placeholder="Enter your District">
      @if($errors->has('district'))
    <div class="error">{{ $errors->first('district') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Blood Group:</label>
      <input type="text" name="blood" class="form-control" placeholder="Enter your Blood group">
      @if($errors->has('blood'))
    <div class="error">{{ $errors->first('blood') }}</div>
@endif
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-sm-6">
        <button type="submit"  class="btn btn-primary" name="student_submit">SUBMIT</button>
      </div>
      <div class="col-sm-6">
        <button type="reset" class="btn btn-primary" name="student_reset">RESET</button>
      </div>
    </div>
</form>
</div>
  </body>
</html>
