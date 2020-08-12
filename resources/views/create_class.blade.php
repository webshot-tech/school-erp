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
    <title>Teacher</title>
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
  <h1>CLASS</h1>
  <form  action="Class" method="post">
    @csrf
    <div class="row">
      <div class="col-sm-6">
        <label>Room no:</label>
      <input type="text" name="room" class="form-control" placeholder="Enter room no">
      @if($errors->has('room'))
    <div class="error">{{ $errors->first('room') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Section:</label>
      <input type="text" name="section" class="form-control" placeholder="Enter section">
      @if($errors->has('section'))
    <div class="error">{{ $errors->first('section') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label>Srength:</label>
      <input type="text" name="strength" class="form-control" placeholder="Enter class strength">
      @if($errors->has('strength'))
    <div class="error">{{ $errors->first('strength') }}</div>
@endif
      </div>
      <div class="col-sm-6">
        <label>Teachers:</label>
      <input type="text" name="teachers" class="form-control" placeholder="Enter teachers name">
      @if($errors->has('teachers'))
    <div class="error">{{ $errors->first('teachers') }}</div>
@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <label>Subjects:</label>
      <input type="text" name="subject" class="form-control" placeholder="Subjects">
      @if($errors->has('subject'))
    <div class="error">{{ $errors->first('subject') }}</div>
@endif
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-sm-6">
        <button type="submit"  class="btn btn-primary" name="class_submit">SUBMIT</button>
      </div>
      <div class="col-sm-6">
        <button type="reset" class="btn btn-primary" name="class_reset">RESET</button>
      </div>
    </div>
</form>
</div>
  </body>
</html>
