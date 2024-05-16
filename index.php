<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webová Stránka</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="js/projekt.js" rel="movesheet">
    <link rel="icon" href="images/SPECTRAWEB.png">
</head>
<body>
<div class="blok1">
    <header>
            <div class="box">
            <div class="logo">
                <img src="images/spectra.png" alt="Spectra" height="85" width="130">
            </div>
            <a href="blok2">Models</a>
        </div>
    </header>
    <div class="auto">
            <marquee scrollamount="12">
                <img src="images/auto.gif" alt="auto">
            </marquee>
        </div>
</div>
<div class="blok2">
    <div clas="images-container">
        <div class="image">
            <img src="images/car_red.png" alt="" onclick="window.open('index2.php?type=element')">

            <div class="description">
                <a href="index2.php?type=element">Element</a>
                <p href="index2.php?type=element"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellat.</p>
            </div>
        </div>

        <div class="image">
            <img src="images/car_right.png" alt=""onclick="window.open('index3.php?type=enigma')" >

            <div class="description">
                <a href="index3.php?type=enigma">Enigma</a>
                <p href="index3.php?type=enigma"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellat.</p>
            </div>

        </div>
    </div>
</div>


<div class="blok5">
<h1>Dotazník</h1>
<form action="#" method="POST">
    <label for="jmeno">Jméno:</label><br>

    <input type="text" id="jmeno" name="jmeno" required><br><br>



    <label for="prijmeni">Příjmení:</label><br>

    <input type="text" id="prijmeni" name="prijmeni" required><br><br>



    <label for="email">E-mail:</label><br>

    <input type="email" id="email" name="email" required><br><br>


    <label for="number">Telefonní číslo:</label><br>

    <input type="number" id="number" name="number" required><br><br>



    <label for="smlouva1">Souhlasím se smluvními podmínkami:</label>

    <input type="checkbox" id="smlouva1" name="smlouva1" required><br><br>



    <label for="smlouva2">Souhlasím s GDPR:</label>

    <input type="checkbox" id="smlouva2" name="smlouva2" required><br><br>



    <input type="submit" value="Odeslat">

</form>

</div>
</body>
</html>