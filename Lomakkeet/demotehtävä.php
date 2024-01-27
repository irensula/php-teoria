<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomakkeet</title>
</head>
<body>

    <h3>How did you like our celebration?</h3>
        
    <form action="demotehtävä.php" method="get">
        
        <label for="name">Write your name:</label> 
        <input type="text" name="name" id="name" maxlength=30><br>

        <label for="opinion">Write your opinion:</label>
        <div><textarea name="opinion" rows="4" cols="50"></textarea></div>
        
        <label for="rating">Rate from 1 to 5:</label>
        <input type="number" name="rating" min="1" max="5">

        <input type="submit" value="Send">
        <input type="hidden" name="form_submitted" value="1" />

    </form>

    <?php
        if(isset($_GET['name'], $_GET['opinion'], $_GET['rating'])){
            $name = htmlspecialchars($_GET['name']);
            $opinion = htmlspecialchars($_GET['opinion']);
            $rating = htmlspecialchars($_GET['rating']);
            echo "Thank you for your feedback, $name." . "You wrote: \"$opinion\" The grade you gave us was: $rating.";
        }
    ?>
</body>
</html>