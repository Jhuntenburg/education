<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Garden Tarot</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        .reading-container {
    margin-top: 50px; /* Add space between the div above */
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.question-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.question-container label {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.question-container input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    word-wrap: break-word; /* Allow text to wrap to a new line */
}

.question-container button {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.question-container button:hover {
    background-color: #0056b3;
}
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
<div class="reading-container">

    <form action="/generate-reading" method="POST">
        @csrf
        <div class="question-container">
            <label for="question">Ask your question:</label>
            <input type="text" id="question" name="question" required>
            <button id="getReadingButton">Get Reading</button>
        </div>
    </form>
</div>

{{--user modal--}}
<div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Enter Your Information</h2>
        <form id="userForm">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Submit</button>
        </form>
    </div>
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

    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('userModal');
        var btn = document.getElementById('getReadingButton');
        var span = document.getElementsByClassName('close')[0];
        var form = document.getElementById('userForm');
        var questionForm = document.querySelector('form[action="/generate-reading"]'); // Select the reading form

        // Show the modal when the Get Reading button is clicked
        btn.onclick = function(event) {
            event.preventDefault(); // Prevent the default form submission
            modal.style.display = 'block';
        }

        // Close the modal when the close button is clicked
        span.onclick = function() {
            modal.style.display = 'none';
        }

        // Close the modal if the user clicks outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Handle the form submission inside the modal
        form.onsubmit = function(event) {
            event.preventDefault();

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            const password = 'testing123';


            // Send an AJAX request to save user data
            fetch('/save-user', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({name: name, email: email, password: password})
            }).then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Close the modal after successful user data submission
                        modal.style.display = 'none';

                        // Now submit the question form to generate the reading
                        questionForm.submit();
                    } else {
                        alert('There was an error saving your information. Please try again.');
                    }
                });
        }
    });
</script>
</body>
</html>
