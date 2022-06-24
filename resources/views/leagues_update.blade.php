<!DOCTYPE html>
<html>
<head>
<title>Update leagues</title>
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
    @php
    use App\Http\Controllers\LeagueController;
    @endphp
    Update information for league <b>{{ $leagues->nosaukums }}</b>:
    With previous information <b>{{ $leagues->nosaukums }}</b> , <b>{{ $leagues->about }}</b>
    <form method="POST" action="{{action([App\Http\Controllers\LeagueController::class, 'update'], $leagues->id) }}" method="post">
    @csrf
    @method('GET')
     <label for="nosaukums">Updated līgas nosaukums: </label>
     <input type="text" name="nosaukums" id="nosaukums" value="{{ $leagues->nosaukums }}">
     <label for="about">Updated About: </label>
     <input type="text" name="about" id="about" value="{{ $leagues->about }}">
     <input type="submit" value="update">
    </form>
     @if (count($errors) > 0)
     <div>
     <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
     </ul>
     </div>
     @endif


    </body>
    </html>
