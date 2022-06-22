<!DOCTYPE html>
<html>
<head>
 <title>New team</title>
</head>
<body>
 We will add a team for <b>{{ $league->nosaukums }}</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\TeamController::class, 'store']) }}">
 @csrf
 <input type="hidden" name="league_id" value="{{ $league->id }}">
 <label for="nosaukums">Nosaukums: </label>
 <input type="string" name="nosaukums" id="nosaukums">
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
