<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skapa Konto</title>
</head>
<body>



    <form action="användarnamn.php" method="POST">
    <input type ="text" name="skapaAnvändarnamn" placeholder="skriv in din $FlutterTag"> 
    <input type="submit"> <?php
if(isset($_COOKIE['free'])) 
{
	if ($_COOKIE['free'] == "yes")
    {
        echo "Användarnamn tillgängligt";
        ?>
        <br>
        <br>
        <form action="skaparkonto.php" method="POST">
        <input type="password" name="skapaLösenord" placeholder="Skriv in ett lösenord">
        <input type="submit">
    </form>
        <?php
    } else 
    {
        echo "Användarnamn upptaget";

    }

}



?>
<style>

    </style>
</body>
</html>