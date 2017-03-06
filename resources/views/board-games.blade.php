<table border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Designers</td>
    <td>Cover</td>
  </tr>

  @foreach($board_games as $board_game)
  <tr>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->id}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->name}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->designers}}</a></td>
    <td><a href="{{URL::to('/')}}/board-game/{{$board_game->id}}">{{$board_game->cover}}</a></td>
  </tr>
  @endforeach

</table>
