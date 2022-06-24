<!DOCTYPE html>
<html>
<head>
    <h1 class = "header">Information about countries that have been added </h1>
</head>
<body>
    <link rel="stylesheet" href="css\cssTT2.css" />
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

 @if (count($countries) == 0)
 <p color='red'> There are no records in the database!</p>
 @else
 <table class="center">
    <tr>
    <td> Country Name </td>
    <td> Country Code </td>
    <td> About </td>
    <td> Show Leagues </td>
    @auth<td> Delete country </td>
    <td> Update country </td>@endauth

    </tr>
 @foreach ($countries as $country)
 <tr>
            <td> {{ $country->name }} </td>
            <td> {{ $country->code }} </td>
            <td> {{ $country->about }} </td>
            <td>
                <input type="button" value="show" class="button"
onclick="showLeagues({{ $country->id }})"> </td>


@auth
<td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id)
    }}">@csrf @method('DELETE')<input type="submit"class="button" value="delete"></form> </td>
    </td>

    <td> <form method="POST" action="{{
        action([App\Http\Controllers\CountryController::class, 'edit'], $country->id)
        }}">@csrf @method('GET')<input type="submit"class="button" value="Update"></form> </td>
        </td>

        @endauth


</td>
 @endforeach
 </table>
 @endif
 @auth
 <td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'create'])
    }}">@csrf @method('GET')
    <input type="submit"class="button" value="New Country"></form> </td>
    </td>@endauth
 <script>
 function showLeagues(countryID) {
 window.location.href = "/league/country/" + countryID;
 }
 </script>
</body>
</html>
