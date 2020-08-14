<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container"></div>
<div class="jumbotron">
<form method="POST" action="{{action('classsController@update', $id)}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label>Section</label>
                            <input type="text" class="form-control" name="section" id="section" value="{{ $classs->section }}" aria-describedby="emailHelp" placeholder="enter section">
                        </div>
                        <div class="form-group">
                            <label>Strength</label>
                            <input type="text" class="form-control" name="strength" id="strength" value="{{ $classs->strength }}">
                        </div>
                        <div class="form-group">
                            <label>Class_teacher_name</label>
                            <input type="text" class="form-control" name="class_teacher_name" id="class_teacher_name"value="{{ $classs->class_teacher_name }}"  >
                        </div>
                        <div class="form-group">
                            <label>No_of_desk</label>
                            <input type="text" class="form-control" name="no_of_desk" id="no_of_desk"value="{{ $classs->no_of_desk }}" >
                        </div>
                        <div class="form-group">
                            <label>Branch</label>
                            <input type="text" class="form-control" name="branch" id="branch" value="{{ $classs->branch }}" >
                        </div>
                        {{ method_field('PUT') }}
                        <button type="submit" class="btn btn-primary">update data</button>
</form>

</div>

</body>
</html>