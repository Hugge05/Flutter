<?php
$användarnamn = $_POST["skapaAnvändarnamn"];
$lösenord = $_POST["skapaLösenord"];
$db = new SQLite3('uppgifter.sq3');
$db->exec("INSERT INTO användaruppgifter VALUES('".$skapaAnvändarnamn."',".$skapaLösenord."')");




?>
