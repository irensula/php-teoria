<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ja Javascript</title>
</head>
<body>
    <h1>Palautelomake</h1>
    <h3>PHP</h6>

    <form action="index.php" method="post">
        
        <label for="name">Nimi: </label>
        <input type="text" name="name" id="name_id" placeholder="Nimesi"><br>
        
        <label for="emal">Sähköpostiosoite: </label>
        <input type="email" name="email" id="email_id" placeholder="Sähköpostiosoitesi"><br>

        <textarea name="feedback" id="feedback_id" cols="30" rows="10" placeholder="Palutesi"></textarea>
        <button type="submit">Lähetä</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Server-side validation (additional validation can be added here)
    if (empty($name) || empty($email)) {
        // Handle validation error
        echo "Please fill out all fields.";
    } else {
        // Process the form data (e.g., save to database, send email, etc.)
        echo "<p>Form submitted successfully!<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br> </p>";
    }
}
?>