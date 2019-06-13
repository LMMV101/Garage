<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
<h1> garage ipdate klant 3 : aflvering 3 terug keer van de update.</h1>
<p> Dit form wordt gebruikt om info the wijzigen</p>
<?php
    $klantid = $_POST["klantidvak"];
    $klantnaam = $_POST["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode =$_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];
    
    
    require_once"gar-connect.php";
    $sql = $conn->prepare
        ("update klant set 
        klantnaam =:klantnaam,
        klantadres = :klantadres,
        klantpostcode= :klantpostcode,
        klantplaats = :klantplaats
        where klantid =:klantid");
    
    $sql->execute
        ([
            "klantid" => $klantid,
            "klantnaam" => $klantnaam,
            "klantadres" => $klantadres,
            "klantpostcode" => $klantpostcode,
            "klantplaats" => $klantplaats
            
        ]);
    
    echo "De klant is gewijzigd. <br/>";
    echo "<a href='gar-menu.html'> T-RUG naar het menu</a>";
  ?>
</body>
                                      