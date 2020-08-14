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
                    <h5 class="card-title">CLASS DETAILS</h5>
                    <form method="POST" action="{{action('classsController@store')}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label>Section</label>
                            <input type="text" class="form-control" name="section" id="section" aria-describedby="emailHelp" placeholder="enter section">
                        </div>
                        <div class="form-group">
                            <label>Strength</label>
                            <input type="text" class="form-control" name="strength" id="strength" >
                        </div>
                        <div class="form-group">
                            <label>Class_teacher_name</label>
                            <input type="text" class="form-control" name="class_teacher_name" id="class_teacher_name" >
                        </div>
                        <div class="form-group">
                            <label>No_of_desk</label>
                            <input type="text" class="form-control" name="no_of_desk" id="no_of_desk">
                        </div>
                        <div class="form-group">
                            <label>Branch</label>
                            <input type="text" class="form-control" name="branch" id="branch" >
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form> 
                        <br><br><br>





                        







                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th> ID </th>
                                    <th> Section </th>
                                    <th> Strength </th>
                                    <th> Class_teacher_name </th>
                                    <th> No_of_desk </th>
                                    <th> Branch </th>
                                   
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($classs as $row)
                            <tr>
                                <td> {{ $row->id }} </td>
                                <td> {{ $row->section }} </td>
                                <td> {{ $row->strength }} </td>
                                <td> {{ $row->class_teacher_name }} </td>
                                <td> {{ $row->no_of_desk }} </td>
                                <td> {{ $row->branch }} </td>
                                <td> <a href="{{action('classsController@edit', $row['id'])}}" class="btn btn-success"> EDIT</a>
                                </td>
                                <td>
                                    <form action= "{{ action('classsController@destroy', $row['id']) }}" method="POST">
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