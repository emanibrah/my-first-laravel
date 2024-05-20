<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navstudent')
<div class="container">
  <h2>Clients Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>age</th>
        <th>Restore</th>
        <th>show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($trashed as $student)
      <tr>
        <td>{{$student->studentName}}</td>
        <td>{{$student->age}}</td>
        <td><a href="{{route('restorestudent', $student->id)}}"> restore</a></td>
        <td><a href="{{route('showstudents', $student->id)}}"> Show </a></td>
        <td>
            <form action="{{ route('deletestudent') }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="id" value="{{ $student->id }}">
                  <input type="submit" value="delete">
            </form>
        </td>


      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>