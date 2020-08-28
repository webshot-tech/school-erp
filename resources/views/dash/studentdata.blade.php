<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <br>
  <h1 style="text-align:center;font-family:Comic Sans, Comic Sans MS, cursive;text-shadow:1px 1px black">Student Data</h1>
  <hr style="border-bottom:solid 2px black;box-shadow:2px 2px 2px black">
  <br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">Serial No.</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">D.O.B</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">Subject</th>
        <th scope="col">Edit</th>
          <th scope="col">Delete</th>
    </tr>
  </tbody>
  @foreach($data1 as $item)
  <tr>
      <td>{{$item->id}}</td>
    <td>{{$item->roll_no}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
      <td>{{$item->DOB}}</td>
            <td>{{$item->gender}}</td>
              <td>{{$item->phone}}</td>
                <td>{{$item->birth_place}}</td>
                  <td>{{$item->blood_group}}</td>
                    <td>{{$item->father_name}}</td>
                      <td>{{$item->mother_name}}</td>
                        <td>{{$item->address}}</td>
                          <td>{{$item->district}}</td>
                            <td>{{$item->subject}}</td>
                            <td><a href="/student/edit/{{$item->id}}"><button type="button" class="btn btn-secondary">Edit</button></td></a>
                              <td><button type="button" class="btn btn-danger">Delete</button></td>

  </tr>
  @endforeach
</table>

</body>
</html>
