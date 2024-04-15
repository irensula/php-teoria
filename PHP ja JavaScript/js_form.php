<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #alert {
            color: red;
        }
    </style>
    <title>PHP ja Javascript</title>

    <script>
        // JavaScript function to validate the form
        function validateForm() {
            let name = document.getElementById('name_id').value;
            let email = document.getElementById('email_id').value;
            let empty_name;
            let empty_email;
            let valid_email;
            if (name.trim() === '') {
                empty_name = "Please enter your name.";
                document.getElementById("alert").innerHTML = empty_name;
                return false;
            }

            if (email.trim() === '') {
                empty_email = "Please enter your email.";
                document.getElementById("alert").innerHTML = empty_email;
                return false;
            }

            // Additional email validation (basic format)
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                valid_email = "Please enter a valid email address.";
                document.getElementById("alert").innerHTML = valid_email;
                return false;
            }

            return true; // Form is valid
        }
    </script>

</head>
<body>
    <h1>Palautelomake</h1>
    <h3>Javascript</h6>
    
    <form action="js_form.php" method="post" onsubmit="return validateForm()">
        
        <label for="name">Nimi: </label>
        <input type="text" name="name" id="name_id" placeholder="Nimesi"><br>
        
        <label for="emal">Sähköpostiosoite: </label>
        <input type="email" name="email" id="email_id" placeholder="Sähköpostiosoitesi"><br>

        <textarea name="feedback" id="feedback_id" cols="30" rows="10" placeholder="Palutesi"></textarea>
        <button type="submit">Lähetä</button>
    </form>
    <p id="alert"></p>
    
</body>
</html>