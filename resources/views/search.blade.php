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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/views">ADMIN DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="role-register">Roles</a>
            </li>
            <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search">
        <button class="btn btn-outline-light my-2 my-2 my-sm-0" type="submit">Seaech</button>
    </form>
        </div>
        </nav>
    </div>



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
                    <h5 class="card-title">STUDENT DETAILS</h5>
                    <p class="card-text">Your Student Details Are Here!!!.</p>
                </div>
        </div><br><br>
        <form>
        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th> ID </th>
                                    <th> NAME </th>
                                    <th> EMAIL-ID </th>
                                    <th> BRANCH </th>
                                    <th> SEM </th>
                                    <th> PHONE </th>
                                    <th> ADDRESS </th>
                                    <th> CITY </th>
                                    <th> EDIT </th>
                                    <th> DELETE </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->email_id }} </td>
                                        <td> {{ $row->branch }} </td>
                                        <td> {{ $row->sem }} </td>
                                        <td> {{ $row->phone }} </td>
                                        <td> {{ $row->address }} </td>
                                        <td> {{ $row->city }} </td>
                                        <td> <a href="{{action('StudentController@edit', $row['id'])}}"> <button type="button" class="btn btn-secondary">EDIT</button> </a></td>
                                        <td>
                                            <form action="{{ action('StudentController@destroy', $row['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-secondary">DELETE</button>
                                            </form>
                                        </td>
                                    
                                    </tr>

                                @endforeach

                            </tbody>
        </table><br><br>
        <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">TEACHER DETAILS </h5>
                    <p class="card-text"> Your Teacher Details Are Here!!!.</p>
                    </div>
            </div><br><br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th> ID </th>
                            <th> NAME </th>
                            <th> EMAIL-ID </th>
                            <th> SUBJECT </th>
                            <th> QUALIFICATION </th>
                            <th> PHONE </th>
                            <th> ADDRESS </th>
                            <th> CITY </th>
                            <th> EDIT </th>
                            <th> DELETE </th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $row)
                            <tr>
                                <td> {{ $row->id }} </td>
                                <td> {{ $row->name }} </td>
                                <td> {{ $row->email_id }} </td>
                                <td> {{ $row->subject }} </td>
                                <td> {{ $row->qualification }} </td>
                                <td> {{ $row->phone }} </td>
                                <td> {{ $row->address }} </td>
                                <td> {{ $row->city }} </td>
                                <td> <a href="{{action('TeacherController@edit', $row['id'])}}"> <button type="button" class="btn btn-secondary">EDIT</button> </a></td>
                                <td>
                                            <form action="{{ action('TeacherController@destroy', $row['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-secondary">DELETE</button>
                                            </form>
                                        </td>
                            </tr>
                        


                        @endforeach

                    </tbody>
                </table>

                <br><br>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">CLASS DETAILS</h5>
                    <p class="card-text"> Your Class Details Are Here!!!.</p>
                    </div>
            </div><br><br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th> ID </th>
                            <th> STRENGTH </th>
                            <th> SECTION </th>
                            <th> BRANCH </th>
                            <th> ROOM_NO </th>
                            <th> FLOOR </th>
                            <th> TEACHERS </th>
                            <th> EDIT </th>
                            <th> DELETE </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $row)
                            <tr>
                                <td> {{ $row->id }} </td>
                                <td> {{ $row->strength }} </td>
                                <td> {{ $row->section }} </td>
                                <td> {{ $row->branch }} </td>
                                <td> {{ $row->room_no }} </td>
                                <td> {{ $row->floor }} </td>
                                <td> {{ $row->teachers }} </td>
                                <td> <a href="{{action('classesController@edit', $row['id'])}}"> <button type="button" class="btn btn-secondary">EDIT</button> </a></td>
                                <td>
                                            <form action="{{ action('classesController@destroy', $row['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-secondary">DELETE</button>
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