<table border="1">
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

</table>
