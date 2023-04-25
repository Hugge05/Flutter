<?php
$användarInput = $_POST["skapaAnvändarnamn"];
$db = new SQLite3('uppgifter.sq3');


$allInputQuery = "SELECT * FROM användaruppgifter";

$användarnamn = $db->query($allInputQuery);
$i=0;
$exists=false;
while ($row = $användarnamn->fetchArray(SQLITE3_ASSOC))
{ 
    if($användarInput == $row['användarnamn'])
    {
        $exists = true;
    }
    

}

if ($exists == true)
{
    setcookie("free", "no", time()+2,'/');

    header("Location: skapakonto.php");
}
else 
{
    setcookie("free", "yes", time()+2,'/');

    header("Location: skapakonto.php");

}


?>