

<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>

<body>
<h1> garage create klant 2</h1>
<p>ee nklant toevoegen aan de de tabel klant in de database gererege
    </p>
     
 <?php
    
    $klantid = NULL;
    $klantnaam =$_POST["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode = $_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];
    
    require_once "gar-connect.php";
    
    $sql = $conn->prepare("
    insert into klant values
    (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)
    ");
    
    $sql->bindParam(":klantid",   $klantid);
    $sql->bindParam(":klantnaam",   $klantnaam);
    $sql->bindParam(":klantadres",   $klantadres);
    $sql->bindParam(":klantpostcode",   $klantpostcode);
    $sql->bindParam(":klantplaats",   $klantplaats);
   
    echo"De klant is gevoegd<br />";
   echo"<a href='Gar-menu.html'>T-RUG naar het menu";
        ?>
    </body>