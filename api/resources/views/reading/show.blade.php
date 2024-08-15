<!-- resources/views/reading/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Three-Card Reading</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .reading-container {
            padding: 50px;
        }

        .cards {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .card-face {
            width: 150px;
            height: 225px;
            margin: 0 15px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .reading-text {
            font-size: 1.2em;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="reading-container">
    <h1>Your Three-Card Reading</h1>
    <div class="cards">
        @foreach ($cards as $index => $card)
            <div class="card-face" style="background-image: url('/images/cards/card{{ $card->id }}.png');"
                 onclick="window.open('/card/{{ $card->id }}', '_blank')"></div>
        @endforeach
    </div>
    <div class="reading-text">
        <p><strong>Question:</strong> {{ $question }}</p>
        <p><strong>Reading:</strong></p>
        <p>{!! nl2br(e($reading)) !!}</p>
    </div>
</div>
</body>
</html>
