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
    <th>Name</th>
    <th>Designers</th>
    <th>Cover</th>
  </tr>
  <tr>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->id}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->name}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->designers}}</a></td>
    <td><a href="{{URL::to('/')}}/images/{{$board_game->cover}}">{{$board_game->cover}}</a></td>
  </tr>
</table>

</body>
</html>
