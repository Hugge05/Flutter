<?php
$db = new SQLite3('uppgifter.sq3');
 ?>
<form action="" method="POST">
<input type="text" name="t1" class="Flutt" placeholder="Make a noise" style="height:50px; width:400px; border-radius:20px; position:absolute; left:400px; top: 50px;">


<?php
#skapar en tabell för fluttsen (inläggen) 
$db->exec("CREATE TABLE IF NOT EXISTS Flutts (Flutt text, antalord int, likes int)");

$Flutt = $_POST["t1"];
$likes = 0;
if(strlen($Flutt) == 0)
{
    ?>
    <script>
        alert("Du måste ha skrivit något för att skicka!");
    </script>
        <?php
}
else 
{
    $db->exec("INSERT INTO Flutts (Flutt, antalord, likes) VALUES('".$Flutt."'," .strlen($Flutt).", ".$likes.")");
}

?>
<style>
.t1
{
    width:200px;
    height:300px;
}

</style>

<?php

?>