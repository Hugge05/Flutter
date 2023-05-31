<?php
#öppnar databasen
$db = new SQLite3('uppgifter.sq3');
#input för att skapa ett inlägg,
$Flutt = $_POST["t1"];
#antalet likes (ingen funktion än)
$likes = 0;
#öppnar tabellen med alla inlägg.
$db->exec("CREATE TABLE IF NOT EXISTS Flutts (Flutt text, antalord int, likes int)");
#kollar om inlägget är tomt. 
if(strlen($Flutt) == 0)
{
    #skapar en cookie för att inlägget är tomt.
    setcookie("empty", "true", time()+30,'/');
    #skickar tillbaka användaren till flödet.
    header("Location: flöde.php");
   
}
else 
{
    #om man är admin 
    if (ISSET($_COOKIE["admin"]) == true)
    {
    $db->exec("INSERT INTO Flutts (Flutt, antalord, likes) VALUES('".$Flutt."'," .strlen($Flutt).", ".$likes.")");
    #cookien för om inlägget inte är tomt.
    setcookie("empty", "false", time()+30, '/');
    #skickar användaren till admin sidan. 
    #denna fungerar
    header("Location: admin.php");
    }
    #om man inte är admin
    else 
    {
        #skickar in inlägget till tabellen
        $db->exec("INSERT INTO Flutts (Flutt, antalord, likes) VALUES('".$Flutt."'," .strlen($Flutt).", ".$likes.")");
        #cookien för om inlägget inte är tomt.
        setcookie("empty", "false", time()+30, '/');
        #skickar användaren till flöde sidan.
        header("Location: flöde.php");
    }
}



?>