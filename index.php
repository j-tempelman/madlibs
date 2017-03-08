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
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>MadLibs by JTW</title>

</head>
<body>
<div class="content">
    <div class="logo">
        <img src="img/logo.png" alt="Mad Libs">
    </div>
    <div class="balk">
        <ul>
            <li class="menu item1" onclick="panic();">Er heerst paniek</li>
            <li class="menu item2" onclick="ignorance();">Onkunde</li>
        </ul>
    </div>
    <div id="story">
        <div id="panic" >
                <form method="post" action="action.php" autocomplete="off">

                    <p><label>Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="pet" placeholder="huisdier" /></p>

                    <p><label>Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="person" placeholder="persoon" /></p>

                    <p><label>In welk land zou je graag willen wonen?</label>
                    <input type="text" name="country" placeholder="land" /></p>

                    <p><label>Wat doe je als je je verveelt?</label>
                    <input type="text" name="hobby" placeholder="verveling" /></p>

                    <p><label>Met welk speelgoed speelde jij als kind het meest?</label>
                    <input type="text" name="toy" placeholder="speelgoed" /></p>

                    <p><label>Bij welke docent spijbel jij het liefst?</label>
                    <input type="text" name="teacher" placeholder="docent" /></p>

                    <p><label>Als je €100.000,00 had, wat zou je dan kopen?</label>
                    <input type="text" name="money" placeholder="100.000 euro" /></p>

                    <p><label>Wat is je favorite bezigheid?</label>
                    <input type="text" name="activity" placeholder="bezigheid" /></p>

                    <label>&nbsp;</label>
                    <input class="sent" type="submit" value="Versturen" />
                </form>
        </div>
        <div id="ignorance" >
            <form method="post" action="money.php" autocomplete="off">

                <p><label>Wat zou je graag willen kunnen?</label>
                    <input type="text" name="een" placeholder="Talent"/></p>

                <p><label>Met welke persoon kun je goed opschieten?</label>
                    <input type="text" name="twee" placeholder="vriend"/></p>

                <p><label>Wat is je favoriete getal?</label>
                    <input type="text" name="drie" placeholder="getal"/></p>

                <p><label>Wat heb je altijd bij je op vakantie?</label>
                    <input type="text" name="vier" placeholder="vakantie"/></p>

                <p><label>Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="vijf" placeholder="goeie eigenschap"/></p>

                <p><label>Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" name="zes" placeholder="slechte eigenschap"/></p>

                <p><label>Wat is het ergste wat je kan overkomen?</label>
                    <input type="text" name="zeven" placeholder="Overkomen"/></p>


                <label>&nbsp;</label>
                <input class="sent" type="submit" value="Versturen" />
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <p>©Jelle Tempelman - 2017</p>
</div>
</body>
</html>

