<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
  
<h2> Add Client </h2>
<form action="{{route('insetclient')}}" method="post">
    @csrf
    
          <p style="color: red">
            @error('clientName')
              {{ $message }}
            @enderror
  </p><label for="fname">clientName:</label><br>
  <input type="text" id="clientName" name="clientName"class="form-control"  ><br>
  <label for="lname">email:</label><br>
  <input type="email" id="email" name="email"class="form-control"><br><br>
  <label for="fname">website:</label><br>
  <input type="text" id="website" name="website"class="form-control" ><br>
  <label for="fname">phone:</label><br>
  <input type="text" id="phone" name="phone"class="form-control" ><br>
  <input type="submit" value="Submit">
</form> 

</body>
