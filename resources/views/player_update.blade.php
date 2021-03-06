<!DOCTYPE html>
<html>
<head>
<title>Update leagues</title>
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
    @php
    use App\Http\Controllers\PlayerController;
    @endphp

 {{ __('Atjaunosim informāciju par spēlētāju -') }}  <b>{{ $players->first_name }}</b> , <b>{{ $players->last_name }}</b>:
    <br>
    {{ __('Ar iepriekšējo informāciju') }} <b>{{ $players->country }}</b> , <b>{{ $players->about }}</b>
    <form method="POST" action="{{action([App\Http\Controllers\PlayerController::class, 'update'], $players->id) }}" method="post">
    @csrf
    @method('GET')
     <label for="first_name"> {{ __('Jaunais vārds:') }} </label>
     <input type="text" name="first_name" id="first_name" value="{{ $players->first_name }}">
     <label for="last_name">{{ __('Jaunais uzvārds:') }} </label>
     <input type="text" name="last_name" id="last_name" value="{{ $players->last_name }}">
     <label for="country">{{ __('Jaunā nacionalitāte:') }} </label>
     <input type="text" name="country" id="country" value="{{ $players->country }}">
     <label for="about">{{ __('Jaunais apraksts:') }} </label>
     <input type="text" name="about" id="about" value="{{ $players->about }}">
     <input type="submit" class="button"value="{{ __('Update') }}">
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
