<!DOCTYPE html>
<html>
<head>
<title>Update countries</title>
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
    use App\Http\Controllers\CountryController;
    @endphp
    {{ __('Atjaunosim informāciju par valsti -') }}
     <b>{{ $countries->name }}</b>:
     {{ __('Ar iepriekšējo informāciju') }}
     <b>{{ $countries->name }}</b> , <b>{{ $countries->code }}</b> , <b>{{ $countries->about }}</b>
    <form method="POST" action="{{action([App\Http\Controllers\CountryController::class, 'update'], $countries->id) }}" method="post">
    @csrf
    @method('GET')

     <label for="name">{{ __('Jaunais valsts nosaukums:') }} </label>
     <input type="text" name="name" id="name" value="{{ $countries->name }}">
     <label for="code">{{ __('Jaunais valsts kods:') }} </label>
     <input type="text" name="code" id="code" value="{{ $countries->code }}">
     <label for="about">{{ __('Jaunais apraksts:') }} </label>
     <input type="text" name="about" id="about" value="{{ $countries->about }}">
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
