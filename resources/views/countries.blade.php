<!DOCTYPE html>
<html>
<head>
 <title>Countries</title>
</head>
<body>
 @if (count($countries) == 0)
 <p color='red'> There are no records in the database!</p>
 @else
 <table style="border: 1px solid black">
    <tr>
    <td> Country Id </td>
    <td> Country Name </td>
    <td> Country Code </td>
    <td> About </td>
    <td> Show Leagues </td>
    <td> Delete country </td>
    </tr>
 @foreach ($countries as $country)
 <tr>
            <td> {{ $country->id }} </td>
            <td> {{ $country->name }} </td>
            <td> {{ $country->code }} </td>
            <td> {{ $country->about }} </td>
            <td> <input type="button" value="show"
onclick="showLeagues({{ $country->id }})"> </td>
<td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id)
    }}">@csrf @method('DELETE')<input type="submit" value="delete"></form> </td>
    </td>
</td>
 @endforeach
 </table>
 @endif
 <td> <form method="POST" action="{{
    action([App\Http\Controllers\CountryController::class, 'create'])
    }}">@csrf @method('GET')
    <input type="submit" value="New Country"></form> </td>
    </td>
 <script>
 function showLeagues(countryID) {
 window.location.href = "/league/country/" + countryID;
 }
 </script>
</body>
</html>
