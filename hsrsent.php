<?php 
    $nama = $_POST["name"];
    $server = $_POST["servers"];
    $code = $_POST["codes"];
    $pass = $_POST["password"];
    $type = $_POST["types"];
    $detail = $_POST["details"];
    $price = $_POST["prices"];
    $stat = $_POST["stats"];

    $connect = mysqli_connect('localhost', 'root', '', 'data_pelanggan');

    mysqli_query($connect, "INSERT INTO fgo (Nama, Server, Code, Pass, Type, Detail, Price, Status) 
    VALUES ('$nama', '$server', '$code', '$pass', '$type', '$detail', '$price', '$stat')");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylehsr.css">
</head>
<body>
    
    <header>
        <h2 class="logo">Hoshino Joki</h2>
        <nav class="left-nav">
            <ul>
                <li><a href="#">FGO</a></li>
                <li><a href="#">HSR</a></li>
                <li><a href="#">DATABASE</a></li>
            </ul>
        </nav>
    </header>

    <body>
            <div class="main">
                <h2>DATA TERKIRIM</h2>
                <div class="thank">TERIMA KASIH</div>

                <div class="back"></div>
                <button onclick="history.back()">Kembali</button>
                
            </div>
    </body>

    <footer>

    </footer>

</body>
</html>

