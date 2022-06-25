<!DOCTYPE html>
<html>
    <head>
        <h1 class = "header">  {{ __('Informācija par pievienotajām līgām') }}</h1>
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

 @if (count($leagues) == 0)
 <p color='red'>  {{ __('Datubāzē nav ierakstu!') }}</p>
 @else
 <table border="1" class="center">
 <tr>

 <td>    {{ __('Līgas nosaukums') }} </td>
 <td> {{ __('Līgas apraksts') }} </td>
 <td> {{ __('Parādīt komandas') }} </td>
 @auth
 <td> {{ __('Izdzēst līgu') }}</td>
 <td> {{ __('Mainīt informāciju') }} </td>@endauth
 </tr>
 @foreach ($leagues as $league)
 <tr>

 <td> {{ $league->nosaukums }} </td>
 <td> {{ $league->about }} </td>
 <td> <input type="button" value="{{ __('Show') }}"class="button"
    onclick="showTeams({{ $league->id }})"> </td>
    @auth
 <td><form method="POST"
    action="{{action([App\Http\Controllers\LeagueController::class, 'destroy'],
    $league->id) }}">
     @csrf @method('DELETE')<input type="submit"class="button"
    value="{{ __('Delete') }}"></form> </td>
 </td>
 <td> <form method="POST" action="{{
    action([App\Http\Controllers\LeagueController::class, 'edit'], $league->id)
    }}">@csrf @method('GET')<input type="submit"class="button" value="{{ __('Update') }}"></form> </td>
    </td>@endauth
 @endforeach
 </table>
 @endif
 @auth
 <p> <input type="button" value="{{ __('New league') }}"class="button" onclick="newLeague( {{ $country_id
}}
)"> </p>@endauth


<input type="button" value="{{ __('Back') }}"class="button"
    onclick="Back()">
<script>
    function showTeams(leagueID) {
    window.location.href = "team/"+leagueID ;
    }
    </script>
<script>
    function Back() {
    window.location.href = "/country";
    }
    </script>
 <script>
 function newLeague(countryID) {
 window.location.href = "/league/country/" + countryID + "/create";
 }
 </script>

</body>
</html>
