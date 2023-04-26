<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skapa Konto</title>
</head>
<body>


    <!-- formulär för att skapa användarnamn-->
    <form action="användarnamn.php" method="POST">
    <input type ="text" name="skapaAnvändarnamn" placeholder="skriv in din $FlutterTag"> 
    <!-- skickar användaren till användarnamn.php -->
    <input type="submit"></form> <?php
    # skapar en cookie för att kolla om användarnamnet är tillgängligt.
if(isset($_COOKIE['free'])) 
{
    # om användarnamnet är tillgängligt 
	if ($_COOKIE['free'] == "yes")
    {
        echo "Användarnamn tillgängligt";
        ?>
        <html>
        <br>
        <br>
        <!-- formulär för att skriva lösenord. -->
        <form action="startsida.php" method="POST">
        <input type="password" name="skapaLösenord" placeholder="Skriv in ett lösenord">
        <input type="submit">
       
    </form>
    </html>
        <?php
        #om användarnammnet är upptaget.
    } else 
    {
        echo "Användarnamn upptaget";

    }

}



?>
<style>

    </style>
</body>
</html>