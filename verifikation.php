<?php
 $db = new SQLite3('uppgifter.sq3');

$db->exec("CREATE TABLE IF NOT EXISTS verifikationsbegäran (användarnamn text, förnamn text, efternamn text, telefonnummer int,  motivation text)");

$förnamn = $_POST['f1'];
$efternamn = $_POST['e1'];
$telefonnummer = $_POST['telnum'];
$motivation = $_POST['mot'];
$username = $_COOKIE['inlogg'];
$db->exec("INSERT INTO verifikationsbegäran VALUES( '" .$username. "','".$förnamn."','".$efternamn."', ".$telefonnummer.", '".$motivation."')");






?>