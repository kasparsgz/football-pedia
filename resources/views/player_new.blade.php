<!DOCTYPE html>
<html>
<head>
 <title>New player</title>
</head>
<body><style>
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

        {{ __('Pievienosim jaunu spēlētāju komandai -') }} <b>{{ $team->nosaukums }}</b>:
 <br>
 <br>
 <form method="POST"
action="{{action([App\Http\Controllers\PlayerController::class, 'store']) }}">
 @csrf

 <input type="hidden" name="team_id" value="{{ $team->id }}">
 <label for="first_name">{{ __('Vārds:') }} </label>
 <input type="string" name="first_name" id="first_name">
 <br>
 <br>
 <label for="last_name">{{ __('Uzvārds:') }} </label>
 <input type="string" name="last_name" id="last_name">
 <br>
 <br>
 <label for="country">{{ __('Nacionalitāte:') }} </label>
 <input type="string" name="country" id="country">
 <br>
 <br>
 <label for="about">{{ __('Apraksts:') }} </label>
 <input type="string" name="about" id="about">
 <br>
 <br>
 <input type="submit" class ="button" value="{{ __('Add') }}">
 </form>
</body>
</html>
