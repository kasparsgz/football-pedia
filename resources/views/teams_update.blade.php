<!DOCTYPE html>
<html>
<head>
<title>Update leagues</title>
</head>
<body>
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
