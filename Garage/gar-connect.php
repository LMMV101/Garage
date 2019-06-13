<?php

// gar-connect.php
// maakt een connectie met garage database
// King Luis Manuel

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try
{$conn = new PDO( "mysql:host = $servername;dbname=$dbname",$username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
// echo "connectie voltooid stage1 completed<br/>";
}

catch(PDOException $e)
{echo"connectie gefaald stage1 mislukt probeer opnieuw: ". $e->getMessage();}
?>