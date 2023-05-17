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
   <?php
    $LoggedIn = false;
   ?>
       
    <form action="loggarin.php" method="POST"> 
        <!-- här ska man kunna logga in-->
        <h2> Logga in </h2>
        <label> Användarnamn </label>
        <h2>
        <input type="text" name="Användarnamn" placeholder="Användarnamn">
        <h2>
        <label> Lösenord </label>
        </h2>
            
        <input type="password" name="Lösenord" placeholder="Lösenord">
        <?php
            if(ISSET($_COOKIE["inloggad"]) == false)
            {
            
               echo "Lösenordet var fel! försök igen!";
            
            }
            ?>
        <button type="Submit"> Log in </button>
        <a href="skapakonto.php" name="skapaKonto"> Inget konto? Skapa ett här. </a>
    </form>
    
    
    <!--<div class="Login">
        <form action="inloggad.php" method="POST">
        <input type="text" name="andändarnamn" placeholder="Användarnamn">
        <br>
        <input type="password" name="Lösenord" placeholder="Lösenord"> 
        <input type="submit"> -->
</div>
<style>
     body
        {
            display:flex;
            top:200px;
            justify-content:center;
            align-items:center;
            height: 75vh;
        }
        
        *
        {
            box-sizing:border-box;
        }
        form
        {
            width: 500px;
            border: 2px solid #ccc;
            padding-top:20px;
            padding-left:50px;
            padding-right:2px;
            background: #fff;
            border-radius: 15px;
        }
        .skapaKonto
        {
            font-size:20px;

        }
        </style>
</body>
</html>