<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>{{ __('messages.Clients Data')}}</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th> {{ __('messages.Client Name')}}</th>
        <th>Emil</th>
        <th>{{ __('messages.phone')}}</th>
        <th>Website</th>
        <th>active</th>
        <th>image</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
      <tr>
        <td>{{$client->clientName}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->website}}</td>
        <td><a href="{{route('editclients', $client->id)}}"> Edit</a></td>
        <td><a href="{{route('showclients', $client->id)}}"> Show </a></td>
        <td>
            <form action= "{{ route('deleteclient') }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $client->id }}">
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
