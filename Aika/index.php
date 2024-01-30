<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aika</title>
</head>
<body>

    <h3>When were you born?</h3>
        
    <form action="index.php" method="get">
        
        <label for="day">Choose your day of birth:</label> 
        <input type="number" name="day" id="_id" min=0 max=31><br>

        <label for="month">Choose your month of birth:</label>
        <input type="number" name="month" id="_id" min=1 max=12><br>
        
        <label for="year">Choose your year of birth:</label>
        <input type="number" name="year" id="_id" min=1914 max=2024>

        <input type="submit" value="Send">
        <input type="hidden" name="form_submitted" value="1" />

    </form>

    <?php
        if(isset($_GET['day'], $_GET['month'], $_GET['year'])){
            $day = htmlspecialchars($_GET['day']);
            $month = htmlspecialchars($_GET['month']);
            $year = htmlspecialchars($_GET['year']);

            // number to name of month
            $dateObj = DateTime::createFromFormat('!m', $month);
            $monthName = $dateObj->format('F');
                          
            date_default_timezone_set('Europe/Helsinki');
                
            $dayOfWeek = date("l", mktime(0, 0, 0, $month, $day, $year));
                
            echo "Result of the form: <br> Your birthday was on $day th of $monthName $year and it was " . $dayOfWeek . ".<br>"; 
        }
    ?>
</body>
</html>


<?php
function currentTime($day, $month, $year) {
    date_default_timezone_set('Europe/Helsinki');

    // number to name of month
    $dateObj = DateTime::createFromFormat('!m', $month);
    $monthName = $dateObj->format('F');

    $dayOfWeek = date("l", mktime(0, 0, 0, $month, $day, $year));
    echo "Result of the function: <br>";
    echo "Your birthday was on $day th of $monthName $year and it was " . $dayOfWeek . ".<br>"; 
}
echo currentTime(19, 2, 1986);
echo currentTime(21, 11, 2018);
echo currentTime(26, 10, 1956);
echo currentTime(19, 6, 1957);
echo currentTime(22, 3, 1979);
?>


