<!DOCTYPE html>
<html>
<head>
<title>Update leagues</title>
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
    @php
    use App\Http\Controllers\TeamController;
    @endphp
    Update information for league <b>{{ $teams->nosaukums }}</b>:
    With previous information <b>{{ $teams->nosaukums }}</b> , <b>{{ $teams->about }}</b>
    <form method="POST" action="{{action([App\Http\Controllers\TeamController::class, 'update'], $teams->id) }}" method="post">
    @csrf
    @method('GET')
     <label for="nosaukums">Updated team nosaukums: </label>
     <input type="text" name="nosaukums" id="nosaukums" value="{{ $teams->nosaukums }}">
     <label for="about">Updated About: </label>
     <input type="text" name="about" id="about" value="{{ $teams->about }}">
     <input type="submit" class="button"value="Update">
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
