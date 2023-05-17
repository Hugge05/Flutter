<?php
$db = new SQLite3('uppgifter.sq3');
 ?>
<form action="skapainlägg.php" method="POST">
<input type="text" name="t1" class="Flutt" placeholder="Make a noise" style="height:50px; width:400px; border-radius:20px; position:absolute; left:400px; top: 50px;">
<?php

?>

<?php
#skapar en tabell för fluttsen (inläggen) 
$db->exec("CREATE TABLE IF NOT EXISTS Flutts (Flutt text, antalord int, likes int)");
#där man skriver inlägget



# kollar om inlägget är tomt.
if(isset($_COOKIE['empty'])==true)
{
if ($_COOKIE['empty'] == "true")
{
    ?>
    <script>
        // om inlägget är tomt skickar man iväg en alert.
        alert("Du kan inte skicka en ljudlös flutt! Skriv några ord för att skicka!");
    </script>
    <?php
}
else 
{
    # skapar en tabell för alla inläggen.
    
}
}
$allInputQuery = "SELECT * FROM  Flutts order by rowid desc";
$uppgifter = $db->query($allInputQuery);
while ($row = $uppgifter->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
 ?>
<div style="border-style:dotted; width:300px; height:200px; border-radius:20px;   ">

<?php
   echo $_COOKIE['inlogg']  . $row['Flutt'] .  '  <br> <br> <br> <br> <br>  ' .  $row['likes'] .
' <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> '.  /*$row['r'].*/ '<br>'#denna skriver ut 
  ?>
 <?php
 
}

?>
</div>
<style>
.t1
{
    width:200px;
    height:300px;
}

</style>

