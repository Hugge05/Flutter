<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="Styling.css">  
<title> Flutter </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
setcookie("admin", "empty", time()-60, '/');
setcookie("inloggad", "false", time()-60, '/');
?>

<!-- loggans text. -->
<div class="LogoText">
    <a href="startsida.php" class="LogoText"> Flutter </a>


</div>
<body>

   

</form>
    <!-- här är den knapp som man ska klicka på om man ska logga in eller skapa ett konto. -->
    <button class="LoggainKnapp" style="width:200px; height:29px; position:absolute; right: 30px; border-radius:40px; top:40px;">
    <a href="loggain.php"> Logga in/skapa konto</a>
    </button>
<?php
#skapar en databas
$db = new SQLite3('uppgifter.sq3'); // Skapar ny eller öppnar existerande
#skapar en tabell 
$db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");
    #kollar om lösenordet är för kort.
  if (isset($_COOKIE['tooshort']))
  {
    setcookie("tooshort", "yes", time()-50,'/');
  }
/**/
?>
</body>
</html>