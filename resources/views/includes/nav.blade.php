 <!-- start Nav bar -->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">clints</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('addclient')}}"> addclints</a></li>
      <li><a href="{{route('clients')}}"> clints</a></li>
      <li><a href="{{route('trashclient')}}">Trash </a></li>
      <li> <a href="{{ route('facebookRedirect') }}">Login with facebook</a></li>
      

    </ul>
  </div>
</nav>