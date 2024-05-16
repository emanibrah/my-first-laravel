<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
  
<h2> Edit Client </h2>
<form action="{{route('updateclients',[$client->id]) }}" method="post">
    @csrf
    @method('put')

    <label for="fname">clientName:</label><br>
  <input type="text" id="clientName" name="clientName"class="form-control" value="{{ $client->clientName}}" ><br>
  <label for="lname">email:</label><br>
  <input type="email" id="email" name="email"class="form-control" value="{{ $client->email}}" ><br><br>
  <label for="fname">website:</label><br>
  <input type="text" id="website" name="website"class="form-control" value="{{ $client->website}}" ><br>
  <label for="fname">phone:</label><br>
  <input type="text" id="phone" name="phone"class="form-control"  value="{{ $client->phone}}" ><br>
  <input type="submit" value="Submit">
</form> 

</body>
