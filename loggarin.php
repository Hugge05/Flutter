<?php
#skapar en ny databas.
$db = new SQLite3('uppgifter.sq3');
    # här kommer input för användarnamn
    $användarnamn = $_POST["Användarnamn"];
    #Här kommer input för Lösenord.
    $inskickatlösenord = $_POST["Lösenord"];
    #Öppnar en tabell för alla användaruppgifter.
    $db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");
    $allInputQuery = "SELECT * FROM  användaruppgifter";
$uppgifter = $db->query($allInputQuery);
# kolla om man är inloggad.
$inloggcheck = false;
#kollar om man är admin.
$admin = false;


if($användarnamn == "Admin123")
    {
      #kollar om man har rätt användarnamn.
    
        if ($inskickatlösenord == "Administrator")
        {
            setcookie("admin", true, time()+5000, '/');
            header("Location: admin.php");
         
        }
    }


    while ($row = $uppgifter->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
    #lägger in användarnamnet och lösenordet.
    if ($användarnamn == $row['användarnamn'])
    {
        echo "Användarnamn korrekt!";
        #header("Location: loggain.php");
        if (hash('sha3-512', $inskickatlösenord) == $row['lösenord'])
        {
            #sparar användarnamnet.
            setcookie("inlogg", $användarnamn, time()+6000, '/');
            setcookie("inloggad", true, time()+5000, '/');
            $inloggcheck = true;
        }
        else if (hash('sha3-512', $inskickatlösenord) != $row['lösenord'])
        {
            setcookie("inloggad", false, time()+5000, '/');
           # echo "Du har skrivit in fel lösenord.";
            #header("Location: loggain.php");
            
        }
    
    }
}
    #om man inte blir inloggad så skickas man tillbaka till logga in sidan.
if ($inloggcheck == false)
{
    #skickar tillbaka till logga in sidan.
    echo "1";
    header("Location: loggain.php");
}
#om man blir inloggad.
else if ($inloggcheck == true)
{
    #skickas till flöde sidan.

    header("Location: flöde.php");

}

    
    ?>