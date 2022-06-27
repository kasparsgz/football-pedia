<!DOCTYPE html>
<html>

    <head>
        <h1 class = "header">{{ __('Informācija par pievienotajiem spēlētājiem') }} </h1>
    </head>
<body>
    <style>
          body {
 background-image: url("https://img.freepik.com/free-vector/soccer-ball-grass-background_1284-8507.jpg?t=st=1656276311~exp=1656276911~hmac=3e07db6860581779cbc0dbdbfdf6f1f5f0da14e9cc61ae8a344eeaf1bb5f5360&w=826") ;
 background-image: no-repeat ;
 background-size: auto;
 background-color: #e3eaa7;
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

 <p color='red'> {{ __('Datubāzē nav ierakstu!') }}</p>
 @else
 <table border="1" class="center">
 <tr>

 <td>  {{ __('Vārds') }} </td>
 <td> {{ __('Uzvārds') }} </td>
 <td> {{ __('Nacionalitāte') }} </td>
 <td> {{ __('Apraksts') }} </td>
 @auth
 <td> {{ __('Izdzēst spēlētāju') }}</td>
 <td> {{ __('Izmainīt informāciju') }}</td>
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
    value="{{ __('Delete') }}"></form> </td>
    <td> <form method="POST" action="{{
        action([App\Http\Controllers\PlayerController::class, 'edit'], $player->id)
        }}">@csrf @method('GET')<input type="submit"class="button" value="{{ __('Update') }}"></form> </td>
        </td>
 </td>@endauth
 @endforeach
 </table>

 @endif @auth
 <p> <input type="button" class="button"value="{{ __('New player') }}" onclick="newPlayer( {{ $team_id
 }}
 )"> </p> @endauth
<input type="button" value="{{ __('Back to start') }}"class="button"
onclick="Back()">
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
