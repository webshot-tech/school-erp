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
            <div class="alert alert-danger">
            <p> {{\Session::get('success')}}</p>
            </div>

            @endif()
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">STUDENT DETAILS</h5>
                    <form method="POST" action="{{action('studensController@store')}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label>Student name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="enter student name">
                        </div>
                        <div class="form-group">
                            <label>fathers_name</label>
                            <input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="enter employee fathers name">
                        </div>
                        <div class="form-group">
                            <label>mothers_name</label>
                            <input type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="enter employee mothers name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <td>
                            <select name="gender" id="gender" >
                            <option value="-1">  </option>
                            <option value="female">female</option>
                            <option value="male">male</option>
                            <option value="others">others</option>
                            </select>
                            </td>
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="text" class="form-control" name="dob" id="dob" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="form-group">
                            <label>USN</label>
                            <input type="text" class="form-control" name="usn" id="usn" >
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <input type="text" class="form-control" name="section" id="section">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="enter your address">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" class="form-control" name="district" id="district">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form> 
                        <br><br><br>





                        







                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Fathers_name </th>
                                    <th> Mothers_name </th>
                                    <th> Gender </th>
                                    <th> DOB </th>
                                    <th> USN </th>
                                    <th> Section </th>
                                    <th> Address </th>
                                    <th> City </th>
                                    <th> District </th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($studens as $row)
                            <tr>
                                <td> {{ $row->id }} </td>
                                <td> {{ $row->name }} </td>
                                <td> {{ $row->fathers_name }} </td>
                                <td> {{ $row->mothers_name }} </td>
                                <td> {{ $row->gender }} </td>
                                <td> {{ $row->dob }} </td>
                                <td> {{ $row->usn }} </td>
                                <td> {{ $row->section }} </td>
                                <td> {{ $row->address }} </td>
                                <td> {{ $row->city }} </td>
                                <td> {{ $row->district }} </td>
                                <td> <a href="{{action('studensController@edit', $row['id'])}}" class="btn btn-success"> EDIT</a>
                                </td>
                                <td>
                                    <form action= "{{ action('studensController@destroy', $row['id']) }}" method="POST">
                                    {{csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>

                                </tr>
                            
                            @endforeach
                        </tbody>
                        </table>





                       





                                  
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>