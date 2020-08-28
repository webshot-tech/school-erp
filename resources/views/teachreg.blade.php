<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Teacher register</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">TACHER DETAILS FORM</h5>
                    <p class="card-text"> Enter The teacher Details Here!!!.</p>
                    </div>
            </div>


            <form method="POST" action="teacher_insert">
              @csrf
                <div class="form-group">
                    <label>Teachers Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Teachers Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Teachers I'd</label>
                    <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" placeholder="Enter Teachers Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>id_no</label>
                    <input type="text" class="form-control" name="id_no" id="id_no" placeholder="Enter Id_No">
                </div>
                <div class="form-group">
                    <label>Phone no</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label>class alloted</label>
                    <input type="text" class="form-control" name="class_alloted" id="class_alloted" placeholder="Enter Class_Alloted">
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
