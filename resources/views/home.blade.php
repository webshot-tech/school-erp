<html>
<head>
<title>Student Sign up</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body style="background-color:white">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Reg No.</th>
      <th scope="col">Name</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data1 as $item)
    <tr>
    
      <td>{{$item->reg_no}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->dob}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->mobile}}</td>
      <td>{{$item->gender}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>