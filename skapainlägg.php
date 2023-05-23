<?php
$db = new SQLite3('uppgifter.sq3');
$Flutt = $_POST["t1"];
$likes = 0;
$db->exec("CREATE TABLE IF NOT EXISTS Flutts (Flutt text, antalord int, likes int)");

if(strlen($Flutt) == 0)
{
    setcookie("empty", "true", time()+30,'/');
    header("Location: flöde.php");
   
}
else 
{
    if (ISSET($_COOKIE["admin"]) == true)
    {
    $db->exec("INSERT INTO Flutts (Flutt, antalord, likes) VALUES('".$Flutt."'," .strlen($Flutt).", ".$likes.")");
    setcookie("empty", "false", time()+30, '/');
    header("Location: admin.php");
    }
    else 
    {
        $db->exec("INSERT INTO Flutts (Flutt, antalord, likes) VALUES('".$Flutt."'," .strlen($Flutt).", ".$likes.")");
    setcookie("empty", "false", time()+30, '/');
    header("Location: flöde.php");
    }
}



?>