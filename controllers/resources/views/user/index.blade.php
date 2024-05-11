<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
</head>
<body>
    <h1>User List:</h1>
    @if ($users->isEmpty())
        <p>
            <i>
                Users list is empty!
            </i>
        </p>
    @else
        <ul>
            @foreach ($users as $user)
                <li>{{$user->name}} - {{$user->age}}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>