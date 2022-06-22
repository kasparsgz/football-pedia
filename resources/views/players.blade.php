<!DOCTYPE html>
<html>
<head>
 <title>Players</title>
</head>
<body>
 @if (count($players) == 0)
 <p color='red'> There is player in the database!</p>
 @else
 <table border="1">
 <tr>
 <td> Team Id </td>
 <td> Player Id </td>
 <td> Vārds </td>
 <td> Uzvārds </td>
 <td> Nacionalitāte </td>
 <td> About </td>
 <td> Delete Player</td>
 <td> </td>
 </tr>
 @foreach ($players as $player)
 <tr>
 <td> {{ $player->team_id }} </td>
 <td> {{ $player->id }} </td>
 <td> {{ $player->first_name }} </td>
 <td> {{ $player->last_name }} </td>
 <td> {{ $player->country }} </td>
 <td> {{ $player->about }} </td>
 <td><form method="POST"
    action="{{action([App\Http\Controllers\PlayerController::class, 'destroy'],
    $player->id) }}">
     @csrf @method('DELETE')<input type="submit"
    value="delete"></form> </td>
 </td>
 @endforeach
 </table>
 @endif
 <p> <input type="button" value="New Player" onclick="newPlayer( {{ $team_id
 }}
 )"> </p>
  <script>
  function newPlayer(teamID) {///te vel jālabo
  window.location.href = "/league/country/team/players/" + teamID + "/create";
  }
  </script>
</body>
</html>
