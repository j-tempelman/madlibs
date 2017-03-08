<?php
/**
 * Created by PhpStorm.
 * User: Jelle
 * Date: 3-3-2017
 * Time: 13:45
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
            Er zijn veel mensen die niet kunnen <?php echo $_POST["een"]; ?>. Neem nou <?php echo $_POST["twee"]; ?>.
            Zelfs met de hulp van een <?php echo $_POST["vier"]; ?> of zelfs <?php echo $_POST["drie"]; ?>
            kan <?php echo $_POST["twee"]; ?> niet <?php echo $_POST["een"]; ?>.
            Dat heeft niet te maken met een gebrek aan <?php echo $_POST["vijf"]; ?>, maar met een te veel aan <?php echo $_POST["zes"]; ?>.
            Te veel <?php echo $_POST["zes"]; ?> leidt tot <?php echo $_POST["zeven"]; ?>
            en dat is niet goed als je wilt <?php echo $_POST["een"]; ?>. Helaas voor <?php echo $_POST["twee"]; ?>.
        </div>
    </div>
</div>
<div class="footer">
    <p>©Jelle Tempelman - 2017</p>
</div>
</body>
</html>


