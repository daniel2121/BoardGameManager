<table border="1">
  <tr>
    <td>ID</td>
    <td>name</td>
    <td>designer</td>
    <td>cover</td>
  </tr>

  @foreach($board_games as $board_game)
  <tr>
    <td><a href="{{URL::to('/')}}/user/{{$board_game->id}}">{{$board_game->id}}</a></td>
    <td><a href="{{URL::to('/')}}/user/{{$board_game->id}}">{{$board_game->name}}</a></td>
    <td><a href="{{URL::to('/')}}/user/{{$board_game->id}}">{{$board_game->designer}}</a></td>
    <td><a href="{{URL::to('/')}}/user/{{$board_game->id}}">{{$board_game->cover}}</a></td>
  </tr>
  @endforeach

</table>
