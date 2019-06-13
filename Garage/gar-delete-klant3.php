<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
<h1>del garage klant 3</h1>
    <p> dele klant 3</p>
    <?php
    $klantid = $_POST["klantidvak"];
    $verwijder = $_POST["verwijdervak"];
    
    if($verwijder)
    {require_once"gar-connect.php";
    $sql = $conn->prepare("delete from klant where klantid = :klantid");
    $sql->execute(["klantid"=>$klantid]);
    echo"de gegevens zijn verwijdered. <br/>";
    }
    else
    {
        echo "de gegevens zijn niet verwijderd. <br/>";
        
    }
echo"<a href='gar-menu.html'>terug naar het menu.</a>";
    ?>
</body>