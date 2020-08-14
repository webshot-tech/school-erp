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
                    <h5 class="card-title">CLASS DETAILS FORM</h5>
                    <p class="card-text"> Enter The Class Details Here!!!.</p>
                    </div>
            </div>


            <form method="POST" action="{{action('classesController@store')}}">

            {{csrf_field() }}

                <div class="form-group">
                    <label>Strength</label>
                    <input type="text" class="form-control" name="strength" id="strength" placeholder="Enter Strength">
                </div>
                <div class="form-group">
                    <label>Section</label>
                    <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
                </div>
                <div class="form-group">
                    <label>Branch</label>
                    <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Branch">
                </div>
                <div class="form-group">
                    <label>Room_No</label>
                    <input type="text" class="form-control" name="room_no" id="room_no" placeholder="Enter Room_No">
                </div>
                <div class="form-group">
                    <label>Floor</label>
                    <input type="text" class="form-control" name="floor" id="floor" placeholder="Enter Floor">
                </div>
                <div class="form-group">
                    <label>Teachers</label>
                    <input type="text" class="form-control" name="teachers" id="teachers" placeholder="Enter the Teachers">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Following Details Are Correct.</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
 
        

            </form>
        </div>
    </div>
</body>
</html>