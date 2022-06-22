<!DOCTYPE html>
<html>
<head>
<title>Update countries</title>
</head>
<body>
    @php
    use App\Http\Controllers\CountryController;
    @endphp
    Update information for country <b>{{ $countries->name }}</b>:
    With previous information <b>{{ $countries->name }}</b> , <b>{{ $countries->code }}</b> , <b>{{ $countries->about }}</b>
    <form method="POST" action="{{action([App\Http\Controllers\CountryController::class, 'update'], $countries->id) }}" method="post">
    @csrf
    @method('GET')
     <label for="name">Updated country Name: </label>
     <input type="text" name="name" id="name" value="{{ $countries->name }}">
     <label for="code">Updated country code: </label>
     <input type="text" name="code" id="code" value="{{ $countries->code }}">
     <label for="about">Updated About: </label>
     <input type="string" name="about" id="about" value="{{ $countries->about }}">
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
