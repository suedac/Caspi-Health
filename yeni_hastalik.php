<!DOCTYPE.html>
    <?php

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




    if (isset($_GET["tckno"]) && !empty($_GET["tckno"])) {
        $tcno = $_GET["tckno"];
        $hastalikadi = $_GET["hastalikadi"];
        $hastaliktarih = $_GET["hastaliktarih"];
        $belirti = $_GET["belirti"];
        $ilac = $_GET["ilac"];

        $sql = "INSERT INTO hastalikkaydi VALUES(null, '$belirti', '$hastalikadi', '$ilac' , '$hastaliktarih', null, $tcno);";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $tcno = 1234578907;
    }


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
                <h1> <b>Hastalik Ekle</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="guncelle1">
                <form action="yeni_hastalik.php">
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <input type="text" name="hastalikadi">
                            <p>Hastalik Adi</p>
                            <hr>
                        </div>
                        <div class="col-md-4">

                            <input type="text" name="tckno">
                            <p>TC Kimlik No</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="hastaliktarih" placeholder="yyyy-mm-dd">
                            <p>Hastalik Tarihi</p>

                            <hr>
                        </div>
                    </div>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">

                            <input type="text" name="belirti">
                            <p>Belirti</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <input type="input" name="ilac">
                            <p>Ilac</p>
                            <hr>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit"><b>yeni hastalik ekle</b></button>
                    </div>

                </form>
            </div>

        </div>
        </div>
    </body>