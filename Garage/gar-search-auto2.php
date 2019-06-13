<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
<h1> garage zoek autinid episode 2</h1>
<p>
    Op klant id info zoeken uit database garage</p>
<?php
     $klantid = $_POST["klantidvak"];
    require_once "gar-connect.php";
        
    $klanten = $conn->prepare("select klantid,
                                      Autokenteken,
                                      autotype,
                                      Automerk,
                                      autokmstand
                                      from auto");
                                      
$klanten->execute(["klantid" => $klantid]);

 echo "<table>";
    foreach($klanten as $klant){
        echo"<tr>";
        echo "<td>" . $klant["klantid"] ."</td>";
           
        echo "<td>" . $klant["Autokenteken"] ."</td>";
            echo "<td>" . $klant["autotype"] ."</td>";
            echo "<td>" . $klant["Automerk"] ."</td>";
            echo "<td>" . $klant["autokmstand"] ."</td>";
            echo"</tr>";
    }
             echo "</table><br />";
    echo"<a href ='gar-menu.html'> terug naar het Menu </a>";
    ?></body>