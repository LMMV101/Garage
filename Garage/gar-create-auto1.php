<head>
    <meta name
    "autoher" content = "King Luis Manuel">
    <meta charset="utf-8">
    file_uploads = On
</head>
<body>
<h1> garage create Autin</h1>
<p>
    Dit form wordt gebruikt om klantGegevens in te voeren.
</p>
<form action="gar-create-auto2.php" method="post">
    Autokenteken: <input type="text" name=" Autokentekenvak"> <br/>
    autotype: <input type="text" name="autotypevak"><br/>
    Automerk: <input type="text" name="Automerkvak"><br/>
    autokmstand: <input type="text" name="autokmstandvak"><br/>
    <input type="submit">

</form>
    
file_uploads = On

<form action="foto.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>