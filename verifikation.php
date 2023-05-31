<?php
 $db = new SQLite3('uppgifter.sq3');

 #öppnar tabellen verifikationsbegäran
$db->exec("CREATE TABLE IF NOT EXISTS verifikationsbegäran (användarnamn text, förnamn text, efternamn text, telefonnummer int,  motivation text)");

#input för förnamn
$förnamn = $_POST['f1'];
#input för efternamn
$efternamn = $_POST['e1'];
#input för telefonnummer
$telefonnummer = $_POST['telnum'];
#input för motivation till att man ska bli verifierad.
$motivation = $_POST['mot'];
#cookien för användarnamnet.
$username = $_COOKIE['inlogg'];
#sätter in värderna i tabellen "verifikationsbegäran
$db->exec("INSERT INTO verifikationsbegäran VALUES( '" .$username. "','".$förnamn."','".$efternamn."', ".$telefonnummer.", '".$motivation."')");






?>