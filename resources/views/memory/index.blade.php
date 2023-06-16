<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Memory Game with Narasi Sejarah</title>
        <link rel="stylesheet" href="{{ asset('memory/style.css') }}">
        <script src="{{ asset('memory/script.js') }}" defer></script>
    </head>
</html>

<body>
    <div class="game">
        <div class="controls">
            <button>Start</button>
            <div class="stats">
                <div class="moves">0 moves</div>
                <div class="timer">Time: 0 sec</div>
            </div>
        </div>
        <div class="board-container">
            <div class="board" data-dimension="4"></div>
            <div class="win">You won!</div>
        </div>
    </div>
</body>
</html>
