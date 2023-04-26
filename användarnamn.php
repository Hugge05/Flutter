<?php
$användarInput = $_POST["skapaAnvändarnamn"];
$db = new SQLite3('uppgifter.sq3');


$allInputQuery = "SELECT * FROM användaruppgifter";

$användarnamn = $db->query($allInputQuery);
$i=0;
$exists=false;
while ($row = $användarnamn->fetchArray(SQLITE3_ASSOC))
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
    // skapar en cookie
    setcookie("free", "no", time()+2,'/');
    // skickar till skapa konto sidan.
    header("Location: skapakonto.php");
}
else 
{
    // skapar en cookie 
    setcookie("free", "yes", time()+2,'/');
    // skickar till skapa konto sidan
    header("Location: skapakonto.php");

}


?>