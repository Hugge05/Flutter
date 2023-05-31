<?php
#input för skapa användarnamn
$användarnamn = $_POST["skapaAnvändarnamn"];
#input för att skapa lösenord.
$lösenord = $_POST["skapaLösenord"];
#öppnar databasen
$db = new SQLite3('uppgifter.sq3');
#skapar tabell.
$db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");

for($i = 0; $i < 3; $i++)
{
    #kollar om längden på lösenordet har mindre än 6 bokstäver/siffror
if (strlen($lösenord) <6 )
{
    #skriver ut om man har för kort lösenord.
    echo "Ditt lösenord är för kort skriv in ett nytt lösenord.";
    #skapar en cookie för att lösenordet är för kort.
    setcookie("tooshort", "yes", time()+50,'/');
    #skickar användaren tillbaka till skapa konto sidan.
    header("Location: skapakonto.php");
        
} else 
{
    #skapar cookie för att man inte har för kort lösenord.
    setcookie("tooshort", "no", time()+50,'/');
    #skapar en cookie för att spara användarnamnet.
    setcookie("inlogg", $användarnamn, time()+5000, '/');
    #skapar en cookie för att man nu är inloggad.
    setcookie("inloggad", "true", time()+5000, '/');
    ?>
    <h1> Skapar konto... </h1>

    <?php
    $db->exec("INSERT INTO användaruppgifter VALUES('".$användarnamn."','".hash('sha3-512',$lösenord)."')");
    header("Location: flöde.php");
    break;
   
    
}



}

?>
