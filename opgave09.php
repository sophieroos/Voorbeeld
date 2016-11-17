<!DOCTYPE html>
<!-- Sophie Roos, 1102579 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <h1>Opgave 9</h1>
        <?php
        /* Begin uitwerking */

        function terugOfDoor($getal1, $getal2) {
            if ($getal2 / 2 > $getal1) {
                print ($getal1 . " km teruglopen");
            } else {
                print ("Nog " . ($getal2 - $getal1) . " km doorlopentry");
            }
        }

        terugOfDoor(5, 10)
        /* Einde uitwerking */
        ?>
    </body>
</html>