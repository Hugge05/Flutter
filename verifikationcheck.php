
<?php
#öppnar databasen, den är redan skapad och kommer inte att skapa en kopia!
$db = new SQLite3('uppgifter.sq3');
$allProductsQuery = "SELECT * FROM verifikationsbegäran";
$productList = $db->query($allProductsQuery);
#denna funktion är ej färdig.
#Här ska man kunna godkänna ansökningar om verifikation
echo "<form action=\"admin.php\">"; 
$i =0; 
while ($row = $productList->fetchArray(SQLITE3_ASSOC)){
    $uname = "user".$i;
    #printar ut användarnamnet            #deras förnamn    # Här ska admin kunna godkänna genom att använda checkbox.
  echo $row['användarnamn'] . ': $' . $row['förnamn']. "<input type=\"checkbox\" name=\"".$uname."\">  <br>";
  $i++;
}
echo "</form>";
?>
