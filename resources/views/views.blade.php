<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron ">
        <form>



        <table class="table table-bordered" , width="100px">
                            <thead class="thead-dark">
                            <tr>
                            <th colspan="13">STUDENT DETAILS</th>
                          
                             </tr>
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
                                    <th>Edit</th>
                                    <th>Delete</th>
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
            


                        <table class="table table-bordered">
                            <thead class="thead-dark">

                            <tr>
                            <th colspan="11">TEACHERS DETAILS</th>
                             
                             </tr>
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
                                    <th>Edit</th>
                                    <th>Delete</th>
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


                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                            <th colspan="8">CLASS DETAILS</th>
                             
                             </tr>
                                <tr>
                                    <th> ID </th>
                                    <th> Section </th>
                                    <th> Strength </th>
                                    <th> Class_teacher_name </th>
                                    <th> No_of_desk </th>
                                    <th> Branch </th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                   
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



        </form>
        </div>
    </div>
</body>
</html>