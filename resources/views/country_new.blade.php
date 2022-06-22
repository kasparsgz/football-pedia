<!DOCTYPE html>
<html>
<head>
<title>New country</title>
</head>
<body>
Input the information about the <b>new country:</b>
<form method="POST" action="{{
action([App\Http\Controllers\CountryController::class, 'store']) }}">
@csrf
<label for="name">Country Name: </label>
<input type="string" name="name" id="name">
<br>
<br>
<label for="code">Country Code: </label>
<input type="string" name="code" id="code">
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
