<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<!-- http://localhost:4000/site.php -->
<!-- This will give you the outcome of the echo. -->
    <?php
    // echo will render aanything inside of the "" onto the webpage. () are not needed but look better.
        echo("Hello World");

        echo("<h1>PHP HTML HEADER</h1>");
        
        echo("<hr>");

        // Next lesson (VARIABLES)
        // This variables allow us to store and manage items easier.
        $characterName = "Nikki";
        $characterAge = 22;

        echo("The Elder Scrolls online is a amazing game! -says Mikey, age 24.<br>");
        echo("The Elder Scrolls online is a amazing game! -says $characterName, age $characterAge.<br>");

        echo("I am very excited for the new years content DLC HIGH ISLE -says Mikey, age 24.<br>");
        echo("I am very excited for the new years content DLC HIGH ISLE -says $characterName, age $characterAge.<br>");

        echo("I am also very excited for tiny tina's wonderland! -says Mikey, age 24.");
        echo("I am also very excited for tiny tina's wonderland! -says $characterName, age $characterAge.");

        echo("<hr>");

        $phrase = "My name is Michael Ryan Wooldridge.";

        // return phrase
        echo($phrase);
        echo("<br>");
        
        // return phrase with all lower casing
        echo strtolower($phrase);
        echo("<br>");

        // return phrase with all upper casing
        echo strtoupper($phrase);
        echo("<br>");

        // return a count of all characters used in the string
        echo strlen($phrase);
        echo("<br>");

        // return index result. For example index 0 is the first letter(character) in the string (M). 4 = a.
        echo $phrase[0];
        echo("<br>");
        // changing a character at an index number:
        $phrase[34] = "!";
        echo $phrase;
    ?>
</body>
</html>