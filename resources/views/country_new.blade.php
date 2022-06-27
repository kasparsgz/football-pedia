<!DOCTYPE html>
<html>
<head>
<title>New country</title>
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

                {{ __('Ievadiet informāciju par') }} <b> {{ __('jauno valsti:') }}</b>
<form method="POST" action="{{
action([App\Http\Controllers\CountryController::class, 'store']) }}">
@csrf
<label for="name">{{ __('Valsts nosaukums:') }} </label>
<input type="string" name="name" id="name">
<br>
<br>
<label for="code">    {{ __('Valsts kods:') }} </label>
<input type="string" name="code" id="code">
<br>
<br>
<label for="about"> {{ __('Apraksts:') }} </label>
<input type="text" name="about" id="about">
<br>
<br>
<input type="submit" class="button" value="{{ __('Add') }}">

</form>
</body>
</html>
