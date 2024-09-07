<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h2 class="logo">Hoshino Joki</h2>
        <nav class="left-nav">
            <ul>
                <li><a href="#">FGO</a></li>
                <li><a href="hsr.php">HSR</a></li>
                <li><a href="#">DATABASE</a></li>
            </ul>
        </nav>
    </header>

    <body>
            <div class="main">
                <h2>INPUT DATA</h2>
                <form action="sent.php" method="POST">
                <div class="i nama">Nama</div>
                        <input type="text" name="name">

                    <div class="i server">Server</div>
                        <select name="servers">
                            <option value="None">None</option>
                            <option value="NA">NA</option>
                            <option value="JP">JP</option>
                        </select>
                

                <div class="i code">Transfer Code</div>
                        <input type="text" name="codes">

                <div class="i pass">Password</div>
                        <input type="text" name="password">

                <div class="i type">Kategori</div>
                        <select name="types">
                            <option value="none">None</option>
                            <option value="story">Story</option>
                            <option value="farming">Farming</option>
                            <option value="event">Event</option>
                            <option value="rawat">Rawat Akun</option>
                            <option value="lain">Lainnya</option>
                        </select>

                <div class="i detail">Details</div>

                        <select name="details">
                            <option name="none">None</option>
                            <option name="singul">Singularity</option>
                            <option name="eor">Epic of Remnant</option>
                            <option name="lb">Lostbelt</option>
                            <option name="fq">Free Quest</option>
                            <option name="exp">Amber Card</option>
                            <option name="qp">QP</option>
                            <option name="ru">Rank Up</option>
                            <option name="inter">Interlude</option>
                            <option name="mats">Materials</option>
                            <option name="clear">All Clear</option>
                            <option name="story-only">Story Only</option>
                            <option name="lotto">Lotto</option>
                            <option name="100box">Lotto (100 Box)</option>
                            <option name="rawat-akun">Rawat Akun</option>
                            <option name="lainnya">Lainnya</option>
                        </select>
                        
                <div class="i price">Harga</div>
                        <input type="text" name="prices">

                <div class="i status">Status</div>
                        <input type="text" name="stats">
                
                <div class="i button"></div>
                    <button type="submit">Kirim</button>
                </form>
            </div>
    </body>

    <footer>

    </footer>

</body>
</html>