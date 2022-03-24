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
        echo("<br>");

        // Replacing SubString
        echo str_replace("Michael Ryan", "Nikki Leigh", $phrase);
        echo("<br>");
        // Grabbing SubString
        // - This is grabbing the 11th index and after.
        echo substr($phrase, 11);
        echo("<br>");
        // This substr will grab Michael Ryan at index 11, The number after is how many characters you want after that index.
        echo substr($phrase, 11, 23);
        echo("<br>");

        echo("<hr>");
        // Lesson (NUMBERS)
        echo 12;
        echo("<br>");
        // PHP will not just echo 5 + 9 it will add up and give the answer to the math equaions.
        // Addition
        echo 5 + 9;
        echo("<br>");
        // Division
        echo 10 / 2;
        echo("<br>");
        // Multiplication
        echo 5 * 9;
        echo("<br>");
        // Subtraction
        echo 5 - 9;
        echo("<br>");
        // Modulus Operator "Modulus operator will give you the remander of a division."
        echo 10 % 3;
        echo("<br>");
        // PHP also has order of operations (PEMDAS)
        echo 4 + 5 * 10;
        echo("<br>");
        echo (4 + 5) * 10;
        echo("<br>");

        // Number in variables
        $num = 10;
        // ++ will just add 1 to the number variable. Same wil -- will minus 1.
        $num++;
        echo $num;
        echo("<br>");
        // This is short hand for saying $number equals something.
        $num += 20;
        echo $num;
        echo("<br>");
        // multiplation
        $num += 20;
        echo $num;
        echo("<br>");
        // This can be done with all equations. This is the short hand code for $num = $num + 20

        // FUNCTIONS!!! (MATH)
        // Raising 2 to the 4th power.
        echo pow(2, 4);
        echo("<br>");
        // Square roots.
        echo sqrt(144);
        echo("<br>");
        // max / min. These functions will return the biggest or smallest number.
        echo max(100, 20, 10, 30);
        echo("<br>");
        echo min(1, 2, 3, 4, 5);
        echo("<br>");
        // Rounds number up or down
        echo round(3.2);
        echo ("<br>");
        echo("<hr>");
    ?>

<!-- USER INPUT!!! -->

    <!-- This Form is for USER INPUT -->
    <!-- This is step 1 "Let user put name into box." -->
    <!-- action is set to the doc name at the top for example site.php -->
    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    Hello <?php 
        // First you need a HTML form.
        // This is step 2 (Hold onto the data / access the users info.)
        // Here we grabbing the name="name"
        echo  $_GET["name"]
    ?>
    <br>
    Your age is <?php 
        // Here we are doing the same thing but grabbing the age.
        // If you get an error about unidentified Array this just means no data so enter in your age and the error will go away.
        echo $_GET["age"];

        echo("<hr>");
    ?>

    <!-- CALCULATOR -->
    <form action="site.php" method="get">
        <!-- Inthis foorm we are grabbing num1 and num2. These will be added up for our calculator. -->
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>
        <br>
    Answer: <?php 
        echo $_GET["num1"] + $_GET["num2"]
        // CHECK URL! Notice the url has the math equation. You can change the values and it will work.
    ?>
    <hr>

    <!-- Mad lib -->
    <form action="site.php" method="get">
        <!-- In this form we need to grab a color, plural noun, and a person. -->
        Color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pluralNoun"> <br>
        Person: <input type="text" name="person"> <br>
        <input type="submit">
    </form>
    <br><br>
    <?php 
        // Lets set a variable equal to the get method to grab the user input and place it in the story.
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $person = $_GET["person"];

        // Here is the story with the variable in use.
        echo "Roses are $color <br>";
        echo "$pluralNoun are bule <br>";
        echo "I love $person <br>";
    ?>

    <!-- GET and POST! -->
    <!-- GET When to use: 
            GET will show all user info in the URL parameter. EVEN PASSWORDS!!!
            GET is not secure-->
    <!-- POST When to use: When using a password or wanting security.
            POST is secure.
            POST is more common but not always needed for example, Google. When your search something up on google notice everything in the URL parameter. This is a GET method. "Google may not be using php but it is an example of unsecure work. Easy for user to relook up what they may want." -->

            <!-- POST METHOD -->
    <form action="site.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php 
        echo $_POST["password"];
    ?>
    <hr>

    <!-- ARRAYS!!! -->

    <?php
        $names = array("Mikey", "Nikki", "Lisa", "Sean");

        // Updating array
        $names[0] = "Arox";
        // add array elements
        $names[4] = "Tina";
        // Show array on webpage.
        echo $names[4];
        echo "<br>";
        // Count how many elements are in an array. This answewr is 5 because we are NOT counting index we are counting normally.
        echo count($names)
    ?>
</body>
</html>