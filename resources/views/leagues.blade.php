<!DOCTYPE html>
<html>
<head>
 <title>Leagues</title>
</head>
<body>
 @if (count($leagues) == 0)
 <p color='red'> There is no league in the database!</p>
 @else
 <table border="1">
 <tr>
 <td> Country Id </td>
 <td> League Id </td>
 <td> League Name </td>
 <td> League About </td>
 <td> Show Teams </td>
 <td> Delete League</td>
 </tr>
 @foreach ($leagues as $league)
 <tr>
 <td> {{ $league->country_id }} </td>
 <td> {{ $league->id }} </td>
 <td> {{ $league->nosaukums }} </td>
 <td> {{ $league->about }} </td>
 <td> <input type="button" value="show"
    onclick="showTeams({{$league->id }})"> </td>
 <td><form method="POST"
    action="{{action([App\Http\Controllers\LeagueController::class, 'destroy'],
    $league->id) }}">
     @csrf @method('DELETE')<input type="submit"
    value="delete"></form> </td>
 </td>
 @endforeach
 </table>
 @endif
 <p> <input type="button" value="New League" onclick="newLeague( {{ $country_id
}}
)"> </p>
<script>
    function showTeams(leagueID ) {
    window.location.href = "team/"+ leagueID;
    }
    </script>

 <script>
 function newLeague(countryID) {
 window.location.href = "/league/country/" + countryID + "/create";
 }
 </script>

</body>
</html>
