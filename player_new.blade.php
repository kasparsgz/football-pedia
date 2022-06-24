<!DOCTYPE html>
<html>
<head>
 <title>New player</title>
</head>
<body><style>
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
 We will add a player for <b>{{ $team->nosaukums }}</b>:
 <br>
 <br>
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
 <input type="submit" class ="button" value="Add">
 </form>
</body>
</html>
