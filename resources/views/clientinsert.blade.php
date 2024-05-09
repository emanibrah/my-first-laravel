<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('addclient')}}" method="post">
    @csrf
    <label for="fname">clientName:</label><br>
  <input type="text" id="clientName" name="clientName" ><br>
  <label for="lname">email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <label for="fname">website:</label><br>
  <input type="text" id="website" name="website" ><br>
  <label for="fname">phone:</label><br>
  <input type="text" id="phone" name="phone" ><br>
  <input type="submit" value="Submit">
</form> 

</body>
