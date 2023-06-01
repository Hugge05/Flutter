<?php
#öppnar databasen
$db = new SQLite3('uppgifter.sq3');
 ?>
 <!-- form för att skapa ett inlägg. POST för att ha det säkert! -->
<form action="skapainlägg.php" method="POST">
<input type="text" name="t1" class="Flutt" placeholder="Make a noise" style="height:50px; width:400px; border-radius:20px; position:absolute; left:400px; top: 50px;">
</form>
<?php
if (!isset($_COOKIE['inloggad']))
{
    setcookie("inloggad", false, time()+5000, '/');
    header("Location: loggain.php");
}
?>
<form action="begärverifikation.php" method="POST">
<button style="position:absolute; right:20px; border-radius:20px;"> begär verifikation </button>
</form>
<?php
#skapar en tabell för fluttsen (inläggen) 
#lägger in inlägget i tabellen för inlägg.
$db->exec("CREATE TABLE IF NOT EXISTS Flutts (Flutt text, antalord int, likes int)");
#där man skriver inlägget

?>
<form action="loggaut.php" method="POST">
<button> Logga ut </button>

<?php
$shack = "Jag vill spela shack";

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
<div style="border-style:dotted; width:300px; height:250px; border-radius:20px;  ">

<?php
#printar ut användarnamnet på den som skickade inlägget.
   echo $_COOKIE['inlogg']. '<br> <br> <br> '
   . $row['Flutt'] .  '  <br> <br> <br> <br> <br>  ' .  $row['likes'] .
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

