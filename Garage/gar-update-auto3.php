<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
<h1> garage ipdate Autin 3 : aflvering 3.5 terug keer van de update.</h1>
<p> Dit form wordt gebruikt om info the wijzigen</p>
<?php
    $klantid = $_POST["klantidvak"];
    $Autokenteken = $_POST["Autokentekenvak"];
    $autotype = $_POST["autotypevak"];
    $klantpostcode =$_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];
    
    
    require_once"gar-connect.php";
    $sql = $conn->prepare
        ("update klant set 
        Autokenteken =:Autokenteken,
        autotype = :autotype,
        klantpostcode= :klantpostcode,
        klantplaats = :klantplaats
        where klantid =:klantid");
    
    $sql->execute
        ([
            "klantid" => $klantid,
            "Autokenteken" => $Autokenteken,
            "autotype" => $autotype,
            "Automerk" => $Automerk,
            "autokmstand" => $autokmstand
            
        ]);
    
    echo "De Autin is gewijzigd. 
    Aflevering 3.5 fin<br/>";
    echo "<a href='gar-menu.html'> T-RUG naar het menu</a>";
  ?></body>
                                      