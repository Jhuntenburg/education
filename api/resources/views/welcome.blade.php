<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Garden Tarot</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .welcome-container {
            padding: 50px;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .card-back {
            width: 100px;
            height: 150px;
            margin: 0 10px;
            background-image: url('/images/cards/card79.png');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform: rotate(calc(var(--i) * 10deg));
        }

        .selector-container {
            margin-top: 50px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .search-box {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .dropdown {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #view-card-button {
            display: none; /* Hide the button initially */
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #view-card-button:hover {
            background-color: #0056b3;
        }

        #random-card-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #random-card-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="welcome-container">
    <h1>Welcome to the Genius Garden Tarot</h1>
    <div class="cards">
        @for ($i = -2; $i <= 2; $i++)
            <div class="card-back" style="--i: {{ $i }}"></div>
        @endfor
    </div>

    <div class="selector-container">
        <h2>Select a Card</h2>
{{--        <input type="text" id="search-box" class="search-box" placeholder="Search cards...">--}}
        <select id="card-selector" class="dropdown">
            <option value="">Select a card...</option>
            <!-- Options will be populated via AJAX -->
        </select>

        <button id="view-card-button">View Card</button>
    </div>
</div>
<div>
    <button id="random-card-button" onclick=generateRandomCard()>Pull A Card</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch card names via AJAX and populate the dropdown
        fetch('/get-card-names')
            .then(response => response.json())
            .then(data => {
                const cardSelector = document.getElementById('card-selector');
                data.forEach(function(card) {
                    const option = document.createElement('option');
                    option.value = card.id;
                    option.textContent = card.name;
                    cardSelector.appendChild(option);
                });
            });

        // Implement search functionality
        // const searchBox = document.getElementById('search-box');
        // searchBox.addEventListener('input', function() {
        //     const filter = searchBox.value.toLowerCase();
        //     const options = document.getElementById('card-selector').options;
        //
        //     for (let i = 1; i < options.length; i++) { // Start at 1 to skip "Select a card..." option
        //         const text = options[i].textContent.toLowerCase();
        //         options[i].style.display = text.includes(filter) ? '' : 'none';
        //     }
        // });

        const cardSelector = document.getElementById('card-selector');
        const viewCardButton = document.getElementById('view-card-button');

        // Show button when a card is selected
        cardSelector.addEventListener('change', function() {
            if (cardSelector.value) {
                viewCardButton.style.display = 'inline-block';
                viewCardButton.onclick = function() {
                    window.location.href = '/card/' + cardSelector.value;
                };
            } else {
                viewCardButton.style.display = 'none';
            }
        });
    });

    function generateRandomCard() {
        const randomCardId = Math.floor(Math.random() * 78) + 1;
        window.location.href = '/card/' + randomCardId;
    }
</script>
</body>
</html>
