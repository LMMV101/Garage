<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>

<body>
<h1> garage create aUTO 2</h1>
<p>ee nklant toevoegen aan de de tabel klant in de database gererege
    </p
     
 <?php
    // klantgegeven
     $klantid = NULL;
    $Autokenteken =$_POST["Autokentekenvak"];
    $Automerk = $_POST["Automerkvak"];
    $autotype = $_POST["autotypevak"];
    $autokmstand = $_POST["autokmstandvak"];
    
    
    require_once "gar-connect.php";
    
    $sql = $conn->prepare("
    insert into klant values
    (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)
    ");
    
    
    $sql->bindParam(":Autokenteken",   $Autokenteken);
    $sql->bindParam(":Automerk",   $Automerk);
    $sql->bindParam(":autotype",   $autotype);
    $sql->bindParam(":autokmstand",   $autokmstand);
    $sql->bindParam(":klantid",   $klantid);
    echo "de auto is toegevoegd <br/>";
        echo"<a href='Gar-menu.html'>terug naar het Menu</a>";
    ?>
</body>