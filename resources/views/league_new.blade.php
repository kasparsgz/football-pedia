<!DOCTYPE html>
<html>
<head>
 <title>New league</title>
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

            {{ __('Pievienosim jaunu līgu valstī -') }} <b>{{ $country->name }}</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\LeagueController::class, 'store']) }}">
 @csrf
 <input type="hidden" name="country_id" value="{{ $country->id }}">

 <label for="nosaukums">  {{ __('Nosaukums:') }} </label>
 <input type="string" name="nosaukums" id="nosaukums">
 <br>
 <br>
 <label for="about"> {{ __('Apraksts:') }}</label>
 <input type="string" name="about" id="about">
 <br>
 <br>
 <input type="submit" class ="button"value="{{ __('Add') }}">
 </form>
</body>
</html>
