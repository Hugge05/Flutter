<?php
#skapar en ny databas.
$db = new SQLite3('uppgifter.sq3');
    # här kommer input för användarnamn
    $användarnamn = $_POST["Användarnamn"];
    #Här kommer input för Lösenord.
    $inskickatlösenord = $_POST["Lösenord"];
    #Skapar en tabell för alla användaruppgifter.
    $db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");
    $allInputQuery = "SELECT * FROM  användaruppgifter";
$uppgifter = $db->query($allInputQuery);
    while ($row = $uppgifter->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
    #lägger in användarnamnet och lösenordet.
    if ($användarnamn == $row['användarnamn'])
    {
        echo "Användarnamn korrekt!";
        #header("Location: loggain.php");
        if (hash('sha3-512', $inskickatlösenord) == ['lösenord'])
        {
            #sparar användarnamnet.
            setcookie(inlogg, $användarnamn, time()+5000, '/');
            setcookie(inloggad, true, time()+5000, '/');
            header("Location: flöde.php");
        }
        if (hash('sha3-512', $inskickatlösenord) != ['lösenord'])
        {
            setcookie(inloggad, false, time()+5000, '/');
            echo "Du har skrivit in fel lösenord.";
            header("Location: loggain.php");
        }
    }
    
}
    
    ?>