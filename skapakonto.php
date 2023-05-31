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
    <input type="username" name="skapaAnvändarnamn" placeholder="skriv in din $FlutterTag"> 
    <!-- skickar användaren till användarnamn.php -->
    <input type="submit"></form> <?php
    # skapar en cookie för att kolla om användarnamnet är tillgängligt.
    #om användernamnet är tillgängligt.
    if(isset($_COOKIE['free'])) 
{
    # om användarnamnet är tillgängligt 
	if ($_COOKIE['free'] == "yes")
    {
        #skicka ut att användarnamnet är tllgängligt.
        echo "Användarnamn tillgängligt";
        
        ?>
        <html>
        <br>
        <br>
        <!-- formulär för att skriva lösenord. -->
        <form action="skaparkonto.php" method="POST">
        <input type="hidden" name="skapaAnvändarnamn" value="<?php echo $_COOKIE['uname']?>">
        <input type="password" name="skapaLösenord" placeholder="Skriv in ett lösenord"> 
        <input type="submit">
        <?php
        #om lösenordet är för kort.
        if (isset($_COOKIE['tooshort']))
        {

       
        if ($_COOKIE['tooshort'] == "yes")
        {
            #sickar ut att lösenordet är för kort.
            echo "Lösenordet är för kort. försök igen";
          
            
        }
    }
        ?>
        
       
    </form>
    </html>
        <?php
        #om användarnammnet är upptaget.
    } else 
    {
        #printar ut om användarnamnet är upptaget.
        #man kommer inte kunna skriva in ett lösenord förens man har hitat ett tillgängligt användarnamn.
        echo "Användarnamn upptaget";

    }

}



?>
<style>

    </style>
</body>
</html>