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

    <!-- CHECKBOXES -->

    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>

        <input type="submit">
    </form>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0]
    ?>

    <hr>
 
    <!-- Associattive Arrays -->
    <form action="site.php" method="post">
       Name:<input type="text" name="student">

        <input type="submit">
    </form>

    <?php 
        // An associative array allows you to store a series of key value pairs.

        // This example we are working for a school. Here we wants to keep track of students and their grades on a test. So we are storing 2 data values; name, test grade.
        $grades = array("Mikey"=>"A+", "Nikki"=>"C+", "Lisa"=>"B+");
        // Mikey = KEY is mapped to A+ = VALUE  -Make sure keys are unique values can be the same though.
        $grades["Mikey"] = "F";
        echo $grades["Mikey"];
        echo"<br>";
        // grabbing value of user textbox. This will render to the user the value of the key they typed in.
        echo $grades[$_POST["student"]];

    ?>
    <hr>
    <!-- FUNCTIONS -->
    <!-- A function is a single task that can be used multiple times and places throughout the program. -->
    <?php 
        // Create a function that says HI! to the user.
        function sayHi(){
            echo "Hello User <br>";
        }

        // calling function ssayHi()
        sayHi();

        // Now lets say Hello to a users name!
        function sayHiToUserName($name){
            echo "Hello $name <br>";
        }
        // Will print out any name given here so Hello Mikey
        sayHiToUserName("Mikey");
        // Now remember functions can be used multiple times so say hello to Nikki and Lisa.
        sayHiToUserName("Nikki");
        sayHiToUserName("Lisa");
        // You can pass in as many parameters($name) as you want and call them by just a comma.
    ?>
    <hr>

    <!-- Return Statements -->
    <?php 
    // Lets create a function that cubes a number.
    // Notice the return statement. This will return the cubeResult back to the user.
    // Return will break us out of the function. Anything below a return will never be read.
        function cube($num){
            return $num * $num * $num;
        }
        $cubeResult = cube(4);

        echo $cubeResult;
    ?>
    <br>

    <!-- IF Statements -->
    <!-- If a condition is TRUE then perform the action given below. If not which is FALSE then move on. -->
    I wake up
    If I'm hungry
        I eat breakfast

    I look at my phone
    If it's about to die
        I charge it

    I leave my house
    If it's cloudy
        I bring an umbrella
    Otherwise
        I bring sunglasses

        <br>
    <?php
    // Operators && this is an and operator this will check for both parameters to be true or false, If one is false they are both false though. || OR operator this will check to see if one or the other is true if so do the action below.
    // If you need another condition then that is where else if will come in.
    // Negation operator will do the opposite of what you specify. 
        $isMale = false;
        $isTall = true;
        if ($isMale && $isTall){
            echo "You are a tall male";
        } elseif($isMale && !$isTall){
            echo "You are a short male";
        } elseif(!$isMale && $isTall){
            echo "You are not male but are tall";
        } else {
            echo "You are not tall and not male";
        }
    ?>
    <hr>
    <!-- If statements Comparisons -->
    <?php
    // Figure out if num1 or num2 is bigger then return the answer back to the user.
        function getMax($num1, $num2){
            if($num1 > $num2){
                return $num1;
            } else {
                return $num2;
            }
        }

        echo getMax(110, 90);
        echo "<br>";
    // Now lets try the function with 3 parameters.
        function getMaxWithThreeParameters($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            } elseif($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            } else {
                return $num3;
            }
        }
        echo getMaxWithThreeParameters(500, 900, 400)
    ?>
    <hr>

    <!-- Building a fully functional Calculator -->

    <form action="site.php" method="post">
        <!-- Notice the input tag step. This allows us to use number 5.123. Without step you will only have whole numbers. -->
        First Number:<input type="number" step="0.001" name="num1"><br>
        Operator: <input type="text" name="op"><br>
        Second Number:<input type="number" step="0.001" name="num2"><br>

        <input type="submit">

    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        } elseif($op == "-"){
            echo $num1 - $num2;
        } elseif($op == "*" || $op == "x"){
            echo $num1 * $num2;
        } elseif($op == "/"){
            echo $num1 / $num2;
        } else {
            echo "Invalid Operator";
        }

    ?>
    <hr>

    <!-- Switch statements -->
    <!-- switch is used when comparring a bunch of values. -->
    <form action="site.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C":
                echo "You passed.";
                break;
            case "D":
                echo "You can do better.";
                break;
            case "F":
                echo "You failed.";
                break;
            default:
                echo "Invalid grade.";
        }
    ?>
    <hr>
    <!-- WHILE LOOP -->
        <?php
        // Check the condition to be true or false, if true, then exicute the loop body code.
            $index = 1;

            while($index <= 5){
                echo "$index <br>";
                $index++;
            }
            echo "<hr>";
            // Do while loop
            $doLoop = 6;

            do{
                echo "$index <br>";
                $doLoop++;
            }while($doLoop <= 5)
            // In a do loop we reverse the order. So exicute the loop body then check condition
            // So since the condition is false. We still just get the index.
        ?>
        <hr>
        <!-- FOR LOOPS -->
            <!-- Keep track of an interated variable. -->
            <?php
            // We are doing the same thing as the while loop but in fewer lines of code.
                for($i = 1; $i <= 5; $i++){
                    echo "$i <br>";
                }
                echo "<hr>";
                
            // Lucky numbers exercise.
            $luckyNumbers = array(4, 8, 14, 15, 16, 23, 42);

            for($lucky = 0; $lucky < count($luckyNumbers); $lucky++){
                echo "$luckyNumbers[$lucky] <br>";
            }
            ?>
            <hr>


            <!-- INCLUDE HTML -->
            <?php
                // In this exercise we want our website to have the same header and footer throughout our website.
                // First lets create two new files. Header file and a footer file.

                include "header.html"
            ?>
            <p>This is my super sick website!!!</p>
            <?php include "footer.html"?>

            <!-- INCLUDE PHP -->
            <?php
                $title = "My first post";
                $author = "Mikey";
                $wordCount = 400; 
                include "article-header.php";
            ?>
            <hr>
            <?php
                include "useful-tools.php";
                echo $feetInMile;
            // Note to remember: When calling a function just type the functions name and whatever parameters it needs inside. No need for a $.
                sayBye("Mikey");
            ?>
            <hr>

            <!-- CLASSES AND OBJECTS -->
            <?php
                // We are going to create a software to help a library keep track of all of there books.
                // We will start off by creating a class:
                class Book{
                    var $title;
                    var $author;
                    var $pages;

                    // Here we are learning constructors.
                    function __construct($aTitle, $aAuthor, $aPages){
                        // echo "New Book Created <br>";
                        $this->title = $aTitle;
                        $this->author = $aAuthor;
                        $this->pages = $aPages;
                    }
                }

                // Here are objects. So objects are the actual books. 
                // Lets simplify these objects!
                // $book1 = new Book();
                // $book1->title = "Harry Potter";
                // $book1->author = "JK Rowling";
                // $book1->pages = 400;
                $book1 = new Book("Harry Potter", "JK Rowling", 400);
                // Now book one title is wrong so lets update it.
                $book1->title = "Hunger Games";

                $book2 = new Book("Lord of the Rings", "Tolkien", 350);

                // $book2 = new Book();
                // $book2->title = "Lord of the Rings";
                // $book2->author = "Tolkien";
                // $book2->pages = 350;
            
                echo $book1->title;
                echo "<br>";
                echo $book2->title;
            ?>
            <hr>

            <!-- OBJECT FUNCTIONS -->
            <?php
                class Student {
                    var $name;
                    var $major;
                    var $gpa;

                    function __construct($name, $major, $gpa){
                        $this->name = $name;
                        $this->major = $major;
                        $this->gpa = $gpa;
                    }

                    // Here we are creating a new function for honor roll
                    function hasHonors(){
                        if($this->gpa >=3.5){
                            return "$this->name, Congrats on Honor Roll";
                        }
                        return "$this->name, Better luck next time.";
                    }
                }

                // By using a Object Function lets see who is on the Honor roll. Honor roll is a min of 3.5
                $student1 = new Student("Mikey", "Computer Science", 3.8);
                $student2 = new Student("Nikki", "Business", 4.0);
                $student3 = new Student("Lisa", "Nursing", 3.2);
                $student4 = new Student("Sean", "Art", 2.6);

                echo $student4->hasHonors();
            ?>
            <hr>

            <!-- GETTERS AND SETTERS -->
            <?php
                class Movie {
                    // public is open to everywhere.
                    public $title;
                    // private can only be accessed inside the function.
                    private $rating;

                    function __construct($title, $rating){
                        $this->title = $title;
                        $this->setRating($rating);
                    }

                    // Here is a getter
                    function getRating(){
                        return $this->rating;
                    }

                    // Here is a setter checkingif the rating matches actual ratings not just any random word.
                    function setRating($rating){
                        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                            $this->rating = $rating;
                        }else{
                            $this->rating = "NR";
                        }
                    }
                }

                $avengers = new Movie("Avengers", "PG-13");

                $avengers->setRating("PG");
                echo $avengers->getRating();

            ?>
            <hr>

            <!-- INHERITANCE -->
            <?php
                class Chef{
                    function makeChicken(){
                        echo "The chef makes chicken <br>";
                    }
                    function makeSalad(){
                        echo "The chef makes salad <br>";
                    }
                    function makeSpecialDish(){
                        echo "The chef makes bbq ribs <br>";
                    }
                }
                // The italian chef can do everything that the normal chef can do but also make pasta. All you have to do herer is just add extends Chef.
                class ItalianChef extends Chef{
                    function makePasta(){
                        echo "The Italian chef makes pasta <br>";
                    }
                    // Override specialDish so that the italian chef make chicken parm instead of bbq ribs.
                    function makeSpecialDish(){
                        echo "The Italian chef makes chicken parm <br>";
                    }
                }

                $chef = new Chef();
                $chef->makeChicken();

                $italianChef = new italianChef();
                $italianChef->makeSalad();

                $italianChef = new italianChef();
                $italianChef->makePasta();
                
                echo "<br><br>";

                // Override a function.
                $chef = new Chef();
                $chef->makeSpecialDish();

                $italianChef = new italianChef();
                $italianChef->makeSpecialDish();
            ?>
</body>
</html>