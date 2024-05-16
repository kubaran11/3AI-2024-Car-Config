<?php
require "db/generateButtons.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden;
            background-color: #000; /* Černé pozadí */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .button {
            width: 75px; /* Původní šířka 50px + 50% */
            height: 75px; /* Původní výška 50px + 50% */
            margin: 10px; /* Zvýšený margin pro větší mezery */
            cursor: pointer; /* Když najedete myší, kurzor se změní na ukazatel */
            clip-path: polygon(50% 0%, 95% 35%, 77% 90%, 23% 90%, 5% 35%); /* Tvar pětiúhelníku */
            border: none;
        }

        .button:hover {
            transform: scale(1.1); /* Při najetí myši tlačítko zvětší */
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            width: 100%; /* Ensure container takes full width */
            margin-bottom: 2vh; /* Add minimal bottom margin */
        }

        .image-container img {
            max-height: 60vh; /* Adjusted to be responsive */
            max-width: 80vw; /* Adjusted to be responsive */
            transform: scale(1.2); /* Zvětšení o 20 % */
        }

        .title {
            color: #FFF;
            font-size: 36px;
            margin-bottom: 10px; /* 10px above the buttons */
            text-align: center; /* Center align the title */
            width: 100%; /* Ensure the title takes full width */
        }

        .buttons-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-bottom: 10vh; /* 10% from bottom */
        }

        .controls-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* 10px above the buttons */
            justify-content: flex-end; /* Align controls to the right */
            width: 100%;
        }

        .label {
            color: #FFF;
            font-size: 24px;
            margin-right: 10px;
        }

        .checkbox-label {
            color: #FFF;
            margin: 0 10px;
        }

        .checkbox-container input[type="radio"] {
            margin: 5px 10px;
        }

        /* Media queries for responsive adjustments */
        @media (max-width: 1200px) {
            .button {
                width: 60px; /* Původní šířka 40px + 50% */
                height: 60px; /* Původní výška 40px + 50% */
            }
            .title, .label {
                font-size: 30px;
            }
        }

        @media (max-width: 800px) {
            .container {
                flex-direction: column; /* Stack elements vertically on small screens */
            }

            .button {
                width: 45px; /* Původní šířka 30px + 50% */
                height: 45px; /* Původní výška 30px + 50% */
            }

            .label {
                font-size: 18px;
            }

            .title {
                font-size: 24px;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.button');
            const svetlometyRadios = document.querySelectorAll('input[name="svetlomety"]');
            let selectedColorId = null;
            let selectedSvetlometyId = 2; // Default to 'off' id

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    selectedColorId = this.getAttribute('data-color-id');
                    updateImage();
                });
            });

            svetlometyRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    selectedSvetlometyId = this.value === 'on' ? 1 : 2;
                    updateImage();
                });
            });
        });

    function updateImage() {
        if (selectedColorId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var imageUrl = JSON.parse(xhr.responseText)["url"]; // Získáme relativní cestu k obrázku
                        /*var baseUrl = window.location.origin; // Získáme základní URL našeho serveru
                        var absoluteUrl = baseUrl + "/" + JSON.parse(imageUrl)["url"]; // Spojíme relativní cestu k obrázku s URL adresou serveru*/
                        var image = document.querySelector('#picture');
                        image.src = imageUrl; 
                        
                    } else {
                        console.error("Error fetching image:", xhr.statusText);
                    }
                }
            };
            xhr.open("GET", `/db/getImage.php?colorId=${selectedColorId}&addonsId=${selectedSvetlometyId}`, true);
            xhr.send();
        }
    }
    </script>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="" alt="Váš obrázek" id="picture">
        </div>
        <div class="buttons-container">
            <div class="title">Color</div>
            <div class="controls-container">
                <div class="label">Světlomety</div>
                <input type="radio" id="on" name="svetlomety" value="on">
                <label for="on" class="checkbox-label">On</label>
                <input type="radio" id="off" name="svetlomety" value="off" checked>
                <label for="off" class="checkbox-label">Off</label>
            </div>
            <div class="row">
                <?php generateColorButtons(); ?>
            </div>
        </div>
    </div>
</body>
</html>
