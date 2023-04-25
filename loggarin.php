<?php
#skapar en ny databas.
$db = new SQLite3('uppgifter.sq3');
    # här kommer input för användarnamn
    $användarnamn = $_POST["Användarnamn"];
    #Här kommer input för Lösenord.
    $lösenord = $_POST["Lösenord"];
    #Skapar en tabell för alla användaruppgifter.
    $db->exec("CREATE TABLE IF NOT EXISTS användaruppgifter (användarnamn text, lösenord text)");
    #lägger in användarnamnet och lösenordet.
    $db->exec("INSERT INTO användaruppgifter VALUES('".$användarnamn."','".$lösenord."')");
    

    
    ?>