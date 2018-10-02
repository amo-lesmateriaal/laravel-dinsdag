<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
    <style>
        body {
            background: hotpink;
            font-family: cursive;
            text-align: center;
        }

        body.is-adult{
            background: green;
        }

        h1 {
            border-bottom: 2px solid yellow;
        }

        .container {
            width: 50%;
            margin: 0 auto;
        }

        img {
            margin-top: 20px;
        }
    </style>
</head>
@if($age > 18)
    <body class="is-adult">
@else
    <body>
@endif
    <div class="container">
        <h1 class="header"><marquee>{{ $name }}</marquee></h1>
        @if($age > 18)
            <span>Je bent volwassen</span>
        @else
            <span>Je bent NIET volwassen</span>
        @endif
        <p class="description">{{ $description }}</p>
        <div class="email">
            <p>Email: </p>
            <i>{{ $email }}</i>
        </div>
        <ul class="interests">
            @foreach($interests as $interest)
                <li>{{ $interest }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>