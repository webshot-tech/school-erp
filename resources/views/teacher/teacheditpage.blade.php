<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="jumbotron">
        <form method="POST" action="{{action('TeacherController@update', $id)}}">

            @if(\Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <p> {{\Session::get('success')}} </p>
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                     Missed Out Something!!
                </div>
            @endif

            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">TEACHER UPDATE FORM</h5>
                    <p class="card-text"> You Can Update Details Here!!!.</p>
                    </div>
            </div>

            {{csrf_field() }}

             <div class="form-group">
                     <label>Teacher Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $emps->name }}" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
             </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Teacher I'd</label>
                 <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" {{ $emps->email_id }} placeholder="Enter Teacher Email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
                     <label>Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" {{ $emps->subject }} placeholder="Enter Subject">
              </div>
                <div class="form-group">
                     <label>Qualification</label>
                     <input type="text" class="form-control" name="qualification" id="qualification" {{ $emps->qualification }} placeholder="Enter qualification">
             </div>
                <div class="form-group">
                    <label>Phone_no</label>
                    <input type="text" class="form-control" name="phone" id="phone" {{ $emps->phone }} placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                    <label>Adress</label>
                    <input type="text" class="form-control" name="address" id="address" {{ $emps->address }} placeholder="Enter Adress">
                            </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" id="city" {{ $emps->city }} placeholder="Enter City">
                            </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Following Details Are Correct.</label>
                </div>
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
</body>
</html>