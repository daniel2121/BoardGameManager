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
  </tr>
  <tr>
    <td><a href="{{URL::to('/')}}/users/{{$user->id}}">{{$user->id}}</a></td>
    <td><a href="{{URL::to('/')}}/users/{{$user->id}}">{{$user->name}}</a></td>
  </tr>
</table>

</body>
</html>
