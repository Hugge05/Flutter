<?php
#denna sida är för att kolla om användarnamnet är tillgängligt.

#input för att skapa ett användarnamn
$användarInput = $_POST["skapaAnvändarnamn"];
$db = new SQLite3('uppgifter.sq3');

$db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");
    
  
$allInputQuery = "SELECT * FROM användaruppgifter";

$användarnamnet = $db->query($allInputQuery);
$i=0;

$exists=false;
while ($row = $användarnamnet->fetchArray(SQLITE3_ASSOC))
{ 

    // kollar om det användarnamn man vill ha redan finns.
    if($användarInput == $row['användarnamn'])
    {
        $exists = true;
    }
    

}
// om användaren redan existerar
if ($exists == true)
{
    // skapar en cookie för om användarnamnet är otillgängligt.
    setcookie("free", "no", time()+2,'/');
    // skickar till skapa konto sidan.
    header("Location: skapakonto.php");
}
else 
{
    // skapar en cookie för om användarnamnet är tillgängligt
    setcookie("free", "yes", time()+60,'/');
    setcookie("uname", $_POST["skapaAnvändarnamn"], time()+6000,'/');
    // skickar till skapa konto sidan
    header("Location: skapakonto.php");

}


?>