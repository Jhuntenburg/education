<!-- resources/views/card/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $card->name }} - Genius Garden Tarot</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .card-container {
            padding: 50px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .card-image {
            width: 300px;
            height: 450px;
            background-size: cover;
            background-position: center;
            margin: 0 auto 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-description {
            font-size: 1.2em;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
            text-align: left;
        }
    </style>
</head>
<body>
<a href="/" class="back-button">Back to Home</a>

<div class="card-container">
    <h1>{{ $card->name }}</h1>
    <div class="card-image" style="background-image: url('/images/cards/card{{ $card->id }}.png');"></div>
    <div class="card-description">
        {{ $card->description }}
    </div>
</div>
</body>
</html>
