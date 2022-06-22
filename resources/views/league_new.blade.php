<!DOCTYPE html>
<html>
<head>
 <title>New league</title>
</head>
<body>
 We will add a new league for <b>{{ $country->country_name }}</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\LeagueController::class, 'store']) }}">
 @csrf
 <input type="hidden" name="country_id" value="{{ $country->id }}">

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
