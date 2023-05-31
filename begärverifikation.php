<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Begär verifikation</title>
</head>
<body>
    <!-- formulär för att ta input, för att sedan skicka in till admin för att bli verifierad. -->
    <form action="verifikation.php" method="POST">
   <?php
   #öppnar databasen
   $db = new SQLite3('uppgifter.sq3');
   # skriver ut att man är inloggad med sitt användarnamn.
   echo "logged in as: " . $_COOKIE['inlogg'];
   ?>
   <!-- här kommer input för att skicka verifikationsbegäran -->
    <h5> Förnamn: </h5>
    <input type="text" name=f1 placeholder="Förnamn">
    <h5> Efternamn: </h5>
    <input type="text" name= e1 placeholder="efternamn">
    <h5> ditt telefonnummer: </h5>
    <input type="number" name=telnum placeholder="Telefonnummer">
    <h5> Varför ska du bli verifierad? </h5>
    <input type="text" name="mot" placeholder="motivation" style="height:100px; width:300px; border-radius:20px; text-align:initial; ">
    <input type="submit">
</body>
</html>