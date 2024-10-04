<?php
    include("connection.php");
    include("login.php");
?>

<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <span id="CompanyName"><h1>MeHungry</h1></spam>
        <div id="form">
            <form name="form" action="login.php" onsubmit="return is valid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password:</label>
                <input type="text"id="user" name="user"></br></br>
                <input type="submit" id="btn" value="Login" name="submit"/>
            </form>
    </div>
    <script>
        function isvalid()
        {
            var user=document.form.user.value;
            var pass=document.form.pass.value;
            if(user.length=="" && pass.length=="")
            {
            alert("Username and password field is empty!");
            return false;
            }
            else if(user.length=="")
            {
                alert("Username is empty!");
                return false;
            }
            else
            {
                alert("Password is empty!");
                return false;
            }

        }
    </script>
    </body>
</html>

