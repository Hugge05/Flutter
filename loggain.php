<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="Styling.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logga in/Skapa konto</title>
</head>
<body>
    <style>
        body
        {
            display:flex;
            top:200px;
            justify-content:center;
            align-items:center;
            height: 75vh;
        }
        
        *{
            box-sizing:border-box;
        }

        </style>
    <form> 
        <h2> Logga in </h2>
        <label> Användarnamn </label>
        <h2>
        <input type="text" name="användarnamn" placeholder="Användarnamn">
        <h2>
        <label> Lösenord </label>
        <h2>
        <input type="password" name="Lösenord" placeholder="Lösenord">
        <button type="Submit"> Log in </button>
    </form>
    <!--<div class="Login">
        <form action="inloggad.php" method="POST">
        <input type="text" name="andändarnamn" placeholder="Användarnamn">
        <br>
        <input type="password" name="Lösenord" placeholder="Lösenord"> 
        <input type="submit"> -->
</div>
</body>
</html>