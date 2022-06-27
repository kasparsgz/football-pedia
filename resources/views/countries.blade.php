<!DOCTYPE html>
<html>
<head>
    <h1 class = "header">{{ __('Informācija par pievienotajām valstīm') }}</h1>
</head>
<body>
    <link rel="stylesheet" href="css\cssTT2.css" />
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

 @if (count($countries) == 0)
 <p color='red'>{{ __('Datubāzē nav ierakstu!') }}</p>
 @else
 <table class="center">
    <tr>
    <td>    {{ __('Valsts nosaukums') }}</td>
    <td>   {{ __('Valsts kods') }} </td>
    <td>   {{ __('Apraksts') }}</td>
    <td> {{ __('Parādīt līgas') }} </td>
    @auth<td>  {{ __('Izdzēst valsti') }} </td>
    <td>  {{ __('Mainīt informāciju') }} </td>@endauth

    </tr>
 @foreach ($countries as $country)
 <tr>
            <td> {{ $country->name }} </td>
            <td> {{ $country->code }} </td>
            <td> {{ $country->about }} </td>
            <td>
                <input type="button" value="{{ __('Show') }}" class="button"
onclick="showLeagues({{ $country->id }})"> </td>


@auth
<td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id)
    }}">@csrf @method('DELETE')<input type="submit"class="button" value="{{ __('Delete') }}"></form> </td>
    </td>

    <td> <form method="POST" action="{{
        action([App\Http\Controllers\CountryController::class, 'edit'], $country->id)
        }}">@csrf @method('GET')<input type="submit"class="button" value="{{ __('Update') }}"></form> </td>
        </td>

        @endauth


</td>

 @endforeach
 </table>
 <a  class="underline text-sm text-gray-600 hover:text-gray-900" href ="/dashboard">{{ __('Atpakaļ uz sākumu!') }} </a>
 @endif
 @auth
 <td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'create'])
    }}">@csrf @method('GET')
    <input type="submit"class="button" value="{{ __('New country') }}"></form> </td>
    </td>@endauth
 <script>
 function showLeagues(countryID) {
 window.location.href = "/league/country/" + countryID;
 }
 </script>
</body>
</html>
