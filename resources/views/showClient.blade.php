<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show {{$client->clientName}} </title>
</head>
<body>
    <h1><strong>Client:{{$client->clientName}}</strong> </h1>
    <hr>
    <h2><strong>Email:{{$client->email}}</strong> </h2>
    <hr>
    <h3><strong>Phone:{{$client->phone}}</strong></h3>
    <hr>
    <h4><strong>website:{{$client->website}}</strong></h4>

</body>
</html>