<!DOCTYPE.php>

    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "caspi";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $table = "covid";
    $tcno = $_SESSION["tcno"];
    ?>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <div class="row" style="margin-top: 5%;">
            <ul class="liste col-md-3">
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="sorgular.php">Sorgulamalar</a></li>
                <li><a href="Eleman_Ekle.php">Yeni Eleman Ekle</a></li>
            </ul>
            <div class="text-center col-md-6">
                <h1> <b>Eleman Adi</b> Covid Kayitlari</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="covid">
                <table id="covid">
                    <tr>
                        <th>tcno</th>
                        <th>Belirtiler</th>
                        <th>Temaslilar</th>
                        <th>Kronik Hastalik</th>
                        <th>pozitif olma tarihi</th>
                        <th>Negatif olma tarihi</th>
                        <th>asi durumu</th>
                    </tr>
                    <?php
                    $table = 'coviddurumu';
                    $sql = "SELECT * FROM $table where tcno='$tcno'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["tcno"] . "</td><td>" . $row["idbelirti"] . "</td><td>" . $row["temaslitcno"] . "</td><td>" . $row["kronikhastalik"] . "</td><td>" . $row["covidbaslangic"] . "</td><td>" . $row["covidbitis"] . "</td><td>" . $row["idasi"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }


                    ?>
                    <div class="d-flex justify-content-end">
                        <form action="covid_kayit.php">
                            <button type="submit" id="hastalikbutton"><b>Covid Kaydi Ekle</b></button>
                    </div>
                </table>
            </div>
        </div>




    </body>