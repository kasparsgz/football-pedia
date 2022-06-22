<!DOCTYPE html>
<html>
<head>
 <title>New player</title>
</head>
<body>
 We will add a player for <b>{{ $team->nosaukums }}</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\PlayerController::class, 'store']) }}">
 @csrf
 <input type="hidden" name="team_id" value="{{ $team->id }}">
 <label for="first_name">Vārds: </label>
 <input type="string" name="first_name" id="first_name">
 <br>
 <br>
 <label for="last_name">Uzvārds: </label>
 <input type="string" name="last_name" id="last_name">
 <br>
 <br>
 <label for="country">Nacionalitāte: </label>
 <input type="string" name="country" id="country">
 <br>
 <br>
 <label for="about">About: </label>
 <input type="string" name="about" id="about">
 <br>
 <br>
 <input type="submit" value="add">
 </form>
</body>
</html>
