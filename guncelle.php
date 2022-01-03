<!DOCTYPE.php>
    .php>
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
        $ad = $_GET["ad"];
        $soyad = $_GET["soyad"];
        $sehir = $_GET["sehir"];
        $pozisyon = $_GET["pozisyon"];
        $okul = $_GET["okul"];
        $kan = $_GET["kanGrubu"];
        $calSaati = $_GET["calSaati"];
        $hobiler = $_GET["hobi"];
        $maas = $_GET["maas"];
        $sql = "UPDATE eleman SET isim = '$ad', soyisim = '$soyad', maas = '$maas', idsehir = '$sehir', pozisyon = '$pozisyon', idegitim = '$okul', idkangrubu = '$kan', calismasaati = '$calSaati', hobiler = '$hobiler' where tcno = $tcno;";
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
            </ul>
            <div class="text-center col-md-6">
                <h1> <b>Eleman Adi</b> Guncelle</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="guncelle1">
                <form action="guncelle.php">
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <input type="text" name="ad">
                            <input type="text" name="soyad">
                            <p>Ad Soyad</p>
                            <hr>
                        </div>
                        <div class="col-md-4">

                            <input type="text" name="tckno">

                            <p>TC Kimlik No</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio1" value="A+">
                                <label class="form-check-label" for="inlineRadio1">A +</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio2" value="A-">
                                <label class="form-check-label" for="inlineRadio2">A -</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio3" value="B+">
                                <label class="form-check-label" for="inlineRadio3">B +</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio4" value="B-">
                                <label class="form-check-label" for="inlineRadio1">B -</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio5" value="0+">
                                <label class="form-check-label" for="inlineRadio2">0 +</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio6" value="0-">
                                <label class="form-check-label" for="inlineRadio3">0 -</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio7" value="AB+">
                                <label class="form-check-label" for="inlineRadio3">AB +</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kanGrubu" id="inlineRadio8" value="AB-">
                                <label class="form-check-label" for="inlineRadio3">AB -</label>
                            </div>
                            <p>Kan Grubu</p>
                            <hr>

                        </div>
                    </div>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">

                            <input type="text" name="sehir">

                            <p>Dogdugu Sehir</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <input type="input" name="pozisyon">
                            <p>Pozisyon</p>
                            <hr>
                        </div>

                    </div>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="okul" id="inlineRadio9" value="ortaokul">
                                <label class="form-check-label" for="inlineRadio1">ortaokul</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="okul" id="inlineRadio10" value="lise">
                                <label class="form-check-label" for="inlineRadio2">lise</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="okul" id="inlineRadio11" value="universite">
                                <label class="form-check-label" for="inlineRadio3">universite</label>
                            </div>
                            <p>Egitim</p>
                            <hr>
                            <input type="text" name="hobi">
                            <p>Hobiler</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="calSaati" id="inlineRadio12" value="haftaici">
                                <label class="form-check-label" for="inlineRadio12">haftaici</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="calSaati" id="inlineRadio13" value="hergun">
                                <label class="form-check-label" for="inlineRadio13">hergun</label>
                            </div>
                            <p>Calisma Saati</p>
                            <hr>
                            <input type="text" name="maas">
                            <p>Maas</p>
                            <hr>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit"><b>Guncelle</b></button>
                    </div>
                </form>
            </div>

        </div>


        </div>




    </body>