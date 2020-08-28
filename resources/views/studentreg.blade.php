<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student Register</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">STUDENT DETAILS FORM</h5>
                    <p class="card-text"> Enter The Student Details Here!!!.</p>
                    </div>
            </div>


            <form method="POST" action="student_insert">
              @csrf
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email id</label>
                    <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" placeholder="Enter Student Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>Phone_no</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                    <label>Roll no</label>
                    <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter USN">
                </div>
                <div class="form-group">
                    <label>mother name</label>
                    <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Enter Mother Name">
                </div>

                <div class="form-group">
                    <label>father name</label>
                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Father Name">
                </div>
                <div class="form-group">
                    <label>DOB</label>
                    <input type="text" class="form-control" name="DOB" id="DOB" placeholder="Enter DOB">
                </div>
                <div class="form-group">
                    <label>gender</label>
                    <input type="text" class="form-control" name="gender" id="gender" placeholder="Enter Gender">
                </div>
                <div class="form-group">
                    <label>birth place</label>
                    <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Enter City">
                </div>
                <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label>district</label>
                    <input type="text" class="form-control" name="district" id="district" placeholder="Enter District">
                </div>
                <div class="form-group">
                    <label>subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label>blood group</label>
                    <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="Enter Blood_Group">
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
