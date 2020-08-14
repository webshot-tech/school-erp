
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
<form method="POST" action="{{action('studensController@update', $id)}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label>Student name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $studens->name }}" aria-describedby="emailHelp" placeholder="enter student name">
                        </div>
                        <div class="form-group">
                            <label>fathers_name</label>
                            <input type="text" class="form-control" name="fathers_name" id="fathers_name" value="{{ $studens->fathers_name }}" placeholder="enter employee fathers name">
                        </div>
                        <div class="form-group">
                            <label>mothers_name</label>
                            <input type="text" class="form-control" name="mothers_name" id="mothers_name" value="{{ $studens->mothers_name }}" placeholder="enter employee mothers name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <td>
                            <select name="gender" id="gender" value="{{ $studens->gender }}"  >
                            <option value="-1">  </option>
                            <option value="female">female</option>
                            <option value="male">male</option>
                            <option value="others">others</option>
                            </select>
                            </td>
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="text" class="form-control" name="dob" id="dob" value="{{ $studens->dob }}"  placeholder="dd/mm/yyyy">
                        </div>
                        <div class="form-group">
                            <label>USN</label>
                            <input type="text" class="form-control" name="usn" id="usn"value="{{ $studens->usn }}"  >
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <input type="text" class="form-control" name="section" id="section"value="{{ $studens->section }}" >
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{ $studens->address }}" placeholder="enter your address">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" id="city"value="{{ $studens->city }}" >
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" class="form-control" name="district" id="district"value="{{ $studens->district }}" >
                        </div>
                        {{ method_field('PUT') }}
                        <button type="submit" class="btn btn-primary">update data</button>
</form>

</div>

</body>
</html>