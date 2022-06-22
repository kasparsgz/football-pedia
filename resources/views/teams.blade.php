<!DOCTYPE html>
<html>
<head>
 <title>Teams</title>
</head>
<body>
 @if (count($teams) == 0)
 <p color='red'> There is no team in the database!</p>
 @else
 <table border="1">
 <tr>
 <td> League Id </td>
 <td> Team Id </td>
 <td> Nosaukums </td>
 <td> Team About </td>
 <td> Show Players </td>
 <td> Delete Team</td>
 <td> </td>
 </tr>
 @foreach ($teams as $team)
 <tr>
 <td> {{ $team->league_id }} </td>
 <td> {{ $team->id }} </td>
 <td> {{ $team->nosaukums }} </td>
 <td> {{ $team->about }} </td>
 <td> <input type="button" value="show"
    onclick="showPlayers({{ $team->id }})"> </td>
 <td><form method="POST"
    action="{{action([App\Http\Controllers\TeamController::class, 'destroy'],
    $team->id) }}">
     @csrf @method('DELETE')<input type="submit"
    value="delete"></form> </td>
 </td>
 @endforeach
 </table>
 @endif
 <p> <input type="button" value="New Team" onclick="newTeam( {{ $league_id
 }}
 )"> </p>
 <script>
     function showPlayers(teamID) {///te vel jālabo
     window.location.href = "players/" + teamID;
     }
     </script>

  <script>
  function newTeam(leagueID) {///te vel jālabo
  window.location.href = "/league/country/team/" + leagueID + "/create";
  }
  </script>
</body>
</html>
