<?php
/**
 * Created by PhpStorm.
 * User: Jelle
 * Date: 23-2-2017
 * Time: 09:05
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/story.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>Formulier</title>

</head>
<body>
<div class="content">
    <div class="logo">
        <img src="img/logo.png" alt="Mad Libs">
    </div>
    <div class="balk">
        <ul>
            <li class="menu item1" onclick="back();">Back</li>

        </ul>
    </div>
    <div id="story">
        <div class="verhaaltje">
            Er heerst paniek in <?php echo $_POST["country"]; ?>. Koning <?php echo $_POST["teacher"]; ?> is ten einde raad en als koning <?php echo $_POST["teacher"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["person"]; ?>.
            <br>
            <br>
            <p>"<?php echo $_POST["person"]; ?>! Het is een ramp! Het is een schande!"</p>
            <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
            <p>"Mijn <?php echo $_POST["pet"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["toy"]; ?> voor hem gekocht!"</p>
            <p>"Majesteit, uw <?php echo $_POST["pet"]; ?> komt vast vanzelf weer terug?"</p>
            <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["activity"]; ?> leren?"</p>
            <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["money"]; ?> voor gebruiken."</p>
            <p>"<?php echo $_POST["person"]; ?>, je hebt helemaal gelijk!
            Wat zou ik toch moeten als ik jou niet had."</p>
            <p>"<?php echo $_POST["hobby"]; ?>, Sire."</p>
        </div>
    </div>
</div>
<div class="footer">
    <p>©Jelle Tempelman - 2017</p>
</div>
</body>
</html>


