<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
@include('includes.navstudent')

<h2>Edit student</h2>

<form action="{{route('updatestudents',[$student->id]) }}" method="post">
    @csrf
    @method('put')

    <label for="fname">studentName:</label><br>
  <input type="text" id="studentName" name="studentName"class="form-control" value="{{ $student->studentName}}" > <br>
  <label for="fname">age:</label><br>
  <input type="text" id="age" name="age"  class="form-control" value="{{ $student->age}}"  ><br>
  <input type="submit" value="Submit"class="form-control"> 
</form> 

</body> 