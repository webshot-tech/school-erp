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
                    <h5 class="card-title">TEACHER DETAILS</h5>
                    <form method="POST" action="{{action('teachersController@store')}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label>Teacher name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="enter teacher name">
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
                            <label>Branch</label>
                            <input type="text" class="form-control" name="branch" id="branch" >
                        </div>
                        <div class="form-group">
                            <label>Education</label>
                            <input type="text" class="form-control" name="education" id="education">
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
                                    <th> Gender </th>
                                    <th> DOB </th>
                                    <th> Branch </th>
                                    <th> Education </th>
                                    <th> Address </th>
                                    <th> City </th>
                                    <th> District </th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $row)
                            <tr>
                                <td> {{ $row->id }} </td>
                                <td> {{ $row->name }} </td>
                                <td> {{ $row->gender }} </td>
                                <td> {{ $row->dob }} </td>
                                <td> {{ $row->branch }} </td>
                                <td> {{ $row->education }} </td>
                                <td> {{ $row->address }} </td>
                                <td> {{ $row->city }} </td>
                                <td> {{ $row->district }} </td>
                                <td> <a href="{{action('teachersController@edit', $row['id'])}}" class="btn btn-success"> EDIT</a>
                                </td>
                                <td>
                                    <form action= "{{ action('teachersController@destroy', $row['id']) }}" method="POST">
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