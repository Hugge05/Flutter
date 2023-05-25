
<?php
$db = new SQLite3('uppgifter.sq3');
$allProductsQuery = "SELECT * FROM verifikationsbegäran";
$productList = $db->query($allProductsQuery);
echo "<form action=\"admin.php\">"; 
$i =0; 
while ($row = $productList->fetchArray(SQLITE3_ASSOC)){
    $uname = "user".$i;
  echo $row['användarnamn'] . ': $' . $row['förnamn']. "<input type=\"checkbox\" name=\"".$uname."\">  <br>";
  $i++;
}
echo "</form>";
?>
