<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
</head>
<body>
<h1> Delete klant 2</h1>
<p>Delete klant</p>
<?php
    
    $klantid =$_POST["klantidvak"];
    require_once "gar-connect.php";
    
     $klanten = $conn->prepare("
                               select klantid,
                                      Autokenteken,
                                      autotype,
                                      Automerk,
                                      autokmstand
                               from   auto
                               where  klantid = :klantid
                               ");
    $klanten->execute(["klantid" => $klantid]);
    
    echo "<table>";
foreach($KLANTEN AS $KLANT)
{
      echo"<tr>";
        echo "<td>" . $klant["klantid"] ."</td>";
           
        echo "<td>" . $klant["Autokenteken"] ."</td>";
            echo "<td>" . $klant["autotype"] ."</td>";
            echo "<td>" . $klant["Automerk"] ."</td>";
            echo "<td>" . $klant["autokmstand"] ."</td>";
            echo"</tr>";
            
    }
    echo "</table><br/>";
    
    echo"<form action='gar-delete-auto3.php' method='post'>";
    
    echo"<input type='hidden' name='klantidvak' value =$klantid>";
    echo"<input type='hidden' name'verwijdervak' value='0'>";
    echo"<input type='checkbox' name= 'verwijdervak' value ='1'>";
    
    echo "verwijder deze Autin. <br/>";
    echo "<input type ='submit'>";
    echo"</form>"
    ?>
    </body>
        