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
    #kolla om man är admin.
    else if($användarnamn == "Admin123")
    {
      #kollar om man har rätt användarnamn.
      $inloggcheck = true;
        if ($inskickatlösenord == "Administrator")
        {
           
            $admin = true;
            break;
        }
    }
}
    #om man inte blir inloggad så skickas man tillbaka till logga in sidan.
if ($inloggcheck == false && $admin==false)
{
    #skickar tillbaka till logga in sidan.
    echo "1";
   # header("Location: loggain.php");
}
#om man blir inloggad.
else if ($inloggcheck == true && $admin == false)
{
    #skickas till flöde sidan.
    echo "2";
   # header("Location: flöde.php");

}
#om man loggar in som admin.
else if ($admin == true)
{
    #skapar en cookie för att man är admin. 
    #denna har just nu inte en funktion på grund utav tidsbrist för att få den att funka.
    setcookie("admin", true, time()+5000, '/');
    #skcickar en till admin sidan.
    echo "3";
   # header("Location: admin.php");
}
else 
{
    #om man inte lyckas logga in som admin så kommer man tillbaka till logga in sidan.
    echo "4";
    # header("Location: loggain.php");
}

    
    ?>