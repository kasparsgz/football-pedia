<!DOCTYPE html>
<html>
    <head>
        <h1 class = "header">Information about players that have been added</h1>
    </head>
<body>
    <style>
        body {
    background-color:#e3eaa7;
    }
    .header {
    text-align: center;
}
    table, th, td {
      border: 6px solid ;
      border-color :#b5e7a0;
      border-collapse: collapse;
    }

    table.center {
      margin-left: auto;
      margin-right: auto;

    }
    .center {
    text-align: center;
  }
  .button {
    display: flex;
    justify-content: center;
    align-items: center;

    border: 3px solid #86af49;}
    .button:hover {background-color: #86af49}
</style>
 @if (count($players) == 0)
 <p color='red'> There is player in the database!</p>
 @else
 <table border="1" class="center">
 <tr>

 <td> Vārds </td>
 <td> Uzvārds </td>
 <td> Nacionalitāte </td>
 <td> About </td>
 @auth
 <td> Delete Player</td>
 <td> Update Player</td>
 @endauth
 </tr>
 @foreach ($players as $player)
 <tr>
 <td> {{ $player->first_name }} </td>
 <td> {{ $player->last_name }} </td>
 <td> {{ $player->country }} </td>
 <td> {{ $player->about }} </td>

 @auth<td><form method="POST"
    action="{{action([App\Http\Controllers\PlayerController::class, 'destroy'],
    $player->id) }}">
     @csrf @method('DELETE')<input type="submit" class="button"
    value="delete"></form> </td>
    <td> <form method="POST" action="{{
        action([App\Http\Controllers\PlayerController::class, 'edit'], $player->id)
        }}">@csrf @method('GET')<input type="submit"class="button" value="Update"></form> </td>
        </td>
 </td>@endauth
 @endforeach
 </table>
 <input type="button" value="Back to start"class="button"
 onclick="Back()">
 @endif @auth
 <p> <input type="button" class="button"value="New Player" onclick="newPlayer( {{ $team_id
 }}
 )"> </p> @endauth

<script>
    function Back() {
    window.location.href = "/country";
    }
    </script>
  <script>
  function newPlayer(teamID) {
  window.location.href = "/league/country/team/players/" + teamID + "/create";
  }
  </script>
</body>
</html>
