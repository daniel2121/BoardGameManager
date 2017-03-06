<table border="1">
  <tr>
    <td>ID</td>
    <td>name</td>
  </tr>

  @foreach($users as $user)
  <tr>
    <td><a href="{{URL::to('/')}}/user/{{$user->id}}">{{$user->id}}</a></td>
    <td><a href="{{URL::to('/')}}/user/{{$user->id}}">{{$user->name}}</a></td>
  </tr>
  @endforeach

</table>
