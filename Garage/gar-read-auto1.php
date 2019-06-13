
<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
    <h1>Garage read auts</h1>
    <p>gegevens van tabel klant</p>
    
    
<?php
    require_once "gar-connect.php";
        
    $klanten = $conn->prepare("select klantid,
                                      Autokenteken,
                                      Automerk,
                                      autotype,
                                      autokmstand
                                      from auto");
    $klanten->execute();
    echo "<table>";
    foreach($klanten as $klant){
        echo"<tr>";
        
           
        echo "<td>" . $klant["Autokenteken"] ."</td>";
            echo "<td>" . $klant["Automerk"] ."</td>";
            echo "<td>" . $klant["autotype"] ."</td>";
            echo "<td>" . $klant["autokmstand"] ."</td>";
        echo "<td>" . $klant["klantid"] ."</td>";
            echo"</tr>";
    }
    echo "</table>";
    echo"<a href ='gar-menu.html'> terug naar het Menu </a>";
    ?>
</body>