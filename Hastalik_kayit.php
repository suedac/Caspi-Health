<!DOCTYPE.php>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "caspi";
    session_start();
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $table = "hastalikkaydi";
    $tcno = $_SESSION["tcno"];
    ?>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Caspi Health</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <div class="row" style="margin-top: 5%;">
            <ul class="liste col-md-3">
                <li><a href="grafik_sayfa.php">Anasayfa</a></li>
                <li><a href="sorgular.php">Sorgulamalar</a></li>
                <li><a href="Eleman_Ekle.php">Yeni Eleman Ekle</a></li>
            </ul>
            <div class="text-center col-md-6">
                <h1> <b>Eleman Adi</b> Hastalik Kayitlari</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="hastalik">
                <table id="hastalik">
                    <tr>
                        <th>Hastalik ID</th>
                        <th>hastalik adi</th>
                        <th>semptomlar</th>
                        <th>Recete</th>
                        <th>hastalik tarihi</th>
                        <th>eleman id</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM $table where tcno='$tcno'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["idhastalikkaydi"] . "</td><td>" . $row["idhastalik"] . "</td><td>" . $row["idbelirti"] . "</td><td><a href = 'recete.php'>" . $row["idilac"] . "</a></td><td>" . $row["hastaliktarih"] . "</td><td>" . $row["ideleman"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }


                    ?>
                    <div class="d-flex justify-content-end">
                        <form action="yeni_hastalik.php">
                            <button type="submit" id="hastalikbutton"><b>Yeni Hastalik Ekle</b></button>

                    </div>
                    </form>
            </div>
        </div>
    </body>