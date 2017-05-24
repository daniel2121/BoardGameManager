<!-- <table border="1">
  <tr>
    <td>ID</td>
    <td>User ID</td>
    <td>Board Game ID</td>
    <td>Date</td>
  </tr>
  @foreach($plays as $play)
  <tr>
    <td><a href="{{URL::to('/')}}/play/{{$play->id}}">{{$play->id}}</a></td>
    <td><a href="{{URL::to('/')}}/user/{{$play->user_id}}">{{$play->user_id}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$play->bgame_id}}">{{$play->bgame_id}}</a></td>
    <td><a href="{{URL::to('/')}}/play/{{$play->id}}">{{$play->date}}</a></td>
  </tr>
  @endforeach
</table> -->
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>User ID</th>
    <th>Board Game ID</th>
    <th>Date</th>
  </tr>
  @foreach($plays as $play)
  <tr>
    <!-- <td><a href="{{URL::to('/')}}/play/{{$play->id}}">{{$play->id}}</a></td> -->
    <td>{{$play->id}}</td>
    <td><a href="{{URL::to('/')}}/users/{{$play->user_id}}">{{$play->user_id}}</a></td>
    <td><a href="{{URL::to('/')}}/board-games/{{$play->bgame_id}}">{{$play->bgame_id}}</a></td>
    <!-- <td><a href="{{URL::to('/')}}/play/{{$play->id}}">{{$play->date}}</a></td> -->
    <td>{{$play->date}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>
