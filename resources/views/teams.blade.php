<!DOCTYPE html>
<html>
    <head>
        <h1 class = "header">{{ __('Informācija par pievienotajām komandām') }}</h1>
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
 @if (count($teams) == 0)

 <p color='red'> {{ __('Datubāzē nav ierakstu!') }}</p>
 @else
 <table border="1" class="center">
 <tr>
 <td> {{ __('Nosaukums') }} </td>
 <td> {{ __('Apraksts') }} </td>
 <td>{{ __('Parādīt spēlētājus') }} </td>
@auth
<td> {{ __('Izdzēst komandu') }}</td>
<td> {{ __('Atjaunot informāciju') }}</td>
@endauth
 </tr>
 @foreach ($teams as $team)
 <tr>
 <td> {{ $team->nosaukums }} </td>
 <td> {{ $team->about }} </td>
 <td> <input type="button" value="{{ __('Show') }}"class="button"
    onclick="showPlayers({{ $team->id }})"> </td>@auth
 <td><form method="POST"
    action="{{action([App\Http\Controllers\TeamController::class, 'destroy'],
    $team->id) }}">
     @csrf @method('DELETE')<input type="submit"class="button"value="{{ __('Delete') }}"></form> </td>
    <td> <form method="POST" action="{{
        action([App\Http\Controllers\TeamController::class, 'edit'], $team->id)
        }}">@csrf @method('GET')<input type="submit"class="button" value="{{ __('Update') }}"></form> </td>
        </td>
 </td>
@endauth
 @php
 // function valsts()
//{
 //   $intance = $this->hasMany(Team::class);
 //   $intance->join('league', 'team.league_id', '=', 'league.id')
  //      ->get(['country_id','value']);
 //return $intance;
//}

@endphp


 @endforeach

 </table>
 <input type="button" value="{{ __('Back to start') }}"class="button"
 onclick="Back()">
 @endif @auth
 <p> <input type="button" class="button"value="{{ __('New team') }}" onclick="newTeam( {{ $league_id
 }}
 )"> </p> @endauth


 <script>
     function showPlayers(teamID) {///te vel jālabo
     window.location.href = "players/" + teamID;
     }
     </script>
<script>
    function Back() {
    window.location.href = "/country";
    }
    </script>

  <script>
  function newTeam(leagueID) {///te vel jālabo
  window.location.href = "/league/country/team/" + leagueID + "/create";
  }
  </script>


</body>
</html>
