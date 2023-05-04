<?php

$användarnamn = $_POST["skapaAnvändarnamn"];
$lösenord = $_POST["skapaLösenord"];
$db = new SQLite3('uppgifter.sq3');
 

for($i = 0; $i < 3; $i++)
{
if (strlen($lösenord) <6 )
{
    echo "Ditt lösenord är för kort skriv in ett nytt lösenord.";
    setcookie("tooshort", "yes", time()+50,'/');
    header("Location: skapakonto.php");
        
} else 
{
    setcookie("tooshort", "no", time()+50,'/');
    ?>
    <h1> Skapar konto... </h1>

    <?php
    $db->exec("INSERT INTO användaruppgifter VALUES('".$användarnamn."','".hash('sha3-512',$lösenord)."')");
    header("Location: flöde.php");
    break;
   
    
}



}

?>
