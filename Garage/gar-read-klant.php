
<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
    <h1>Garage read klant</h1>
    <p>gegevens van tabel klant</p>
    
    
<?php
    require_once "gar-connect.php";
        
    $klanten = $conn->prepare("select klantid,
                                      klantnaam,
                                      klantadres,
                                      klantpostcode,
                                      klantplaats
                                      from klant");
    $klanten->execute();
    echo "<table>";
    foreach($klanten as $klant){
        echo"<tr>";
        echo "<td>" . $klant["klantid"] ."</td>";
           
        echo "<td>" . $klant["klantnaam"] ."</td>";
            echo "<td>" . $klant["klantadres"] ."</td>";
            echo "<td>" . $klant["klantpostcode"] ."</td>";
            echo "<td>" . $klant["klantplaats"] ."</td>";
            echo"</tr>";
    }
    echo "</table>";
    echo"<a href ='Gar-menu.html'> terug naar het Menu </a>";
    ?>
</body>