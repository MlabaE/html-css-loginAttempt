<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>register user</title>
        <link rel="stylesheet" type="text/css" href="css/registerpage.css">
    </head>
    <body>
         <header>
            
        </header>
        <div class="registerbox">   
             <h1>Register</h1>
             <form action="server.php" method="post">
                <p>Username</p>
                <input type="text" name="Username" placeholder="Enter Username" required>
                <p>Email</p>
                <input type="text" name="Email" placeholder="Enter Email" required>
                <p>Password</p>
                <input type="text" name="Password" placeholder="Enter Password" required>   
                <input type="submit" name="Register" value="Register">
            </form>
        </div>
    </body>
</html>

