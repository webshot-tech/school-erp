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
        <a class="navbar-brand" href="role-register">Registered Roles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/views">Admin</a>
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
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>

<div class="container">
        <div class="jumbotron">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">REGSTEE DETAILS</h5>
                    <p class="card-text">Your Can Decide The Role Here!!!.</p>
                </div>
        </div><br><br>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <form>
        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th> ID </th>
                                    <th> NAME </th>
                                    <th> Phone </th>
                                    <th> EMAIL-ID </th>
                                    <th> UserType </th>
                                    <th> EDIT </th>
                                    <th> DELETE </th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->phone_no }} </td>
                                        <td> {{ $row->email }} </td>
                                        <td> {{ $row->usertype }} </td>
                                        <td> 
                                            <a href="/role-edit/{{ $row->id }}"><button type="button" class="btn btn-secondary">Edit</button></a>
                                        </td>
                                        <td> 
                                        <form action="/role-delete/{{ $row->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-secondary">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
        </table><br><br>
        </form>
    </div>
</div>                
    
</body>
</html>