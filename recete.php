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
    $table = "recete";
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
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="sorgular.php">Sorgulamalar</a></li>
                <li><a href="Eleman_Ekle.php">Yeni Eleman Ekle</a></li>
                <li><a href="eleman_bilgi.php">Eleman Bilgileri</a></li>
            </ul>
            <div class="text-center col-md-6">
                <h1> <b>Eleman Adi</b> recete bilgisi</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="hastalik">
                <table id="hastalik">
                    <tr>
                        <th>idilac</th>
                        <th>ilac ismi</th>
                        <th>ilac dozu(mg)</th>
                        <th>recete id</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM $table where tcno='$tcno';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["idrecete"] . "</td><td>" . $row["ilacisim"] . "</td><td>" . $row["ilacdoz"] . "</td><td>" . $row["idrecete"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }

                    ?>
                    <div class="d-flex justify-content-end">
                        <form action="recete_ekle.php">
                            <button type="submit" id="hastalikbutton"><b>Recete Ekle</b></button>
                        </form>
                    </div>
                </table>
            </div>
        </div>





    </body>