<!DOCTYPE html>
<html>
<body>

<h2>sdd student</h2>

<form action="{{route('addstudent')}}" method="post">
    @csrf
    <label for="fname">studentName:</label><br>
  <input type="text" id="studentName" name="studentName" ><br>
  <label for="fname">age:</label><br>
  <input type="text" id="age" name="age" ><br>
  <input type="submit" value="Submit">
</form> 

</body>