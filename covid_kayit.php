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
        $covidbaslangic = $_GET["covidbaslangic"];
        $covidbitis = $_GET["covidbitis"];
        $covid = $_GET["covid"];
        $kronik = $_GET["kronikhastalik"];
        $belirti = $_GET["covidbelirti"];
        $asi = $_GET["asi"];
        $temaslitcno = $_GET["temaslitcno"];


        $sql = "INSERT INTO coviddurumu VALUES( null, '$covidbaslangic', '$covidbitis', $covid, $kronik, '$belirti', '$asi', $temaslitcno , $tcno);";
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
                <h1> <b>COVID VERISI EKLE</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="guncelle1">
                <form action="covid_kayit.php">
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <input type="text" name="covidbaslangic" placeholder="yyyy-mm-dd">
                            <input type="text" name="covidbitis" placeholder="yyyy-mm-dd">
                            <p> covid baslangici-bitisi</p>
                            <hr>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="covid" id="covid" value="1">
                                <label class="form-check-label" for="inlineRadio1">pozitif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="covid" id="covid" value="0">
                                <label class="form-check-label" for="inlineRadio1">negatif</label>
                            </div>
                            <p> covid durumu</p>
                            <hr>
                            <input type="text" name="temaslitcno">
                            <p> temasli tcno</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kronikhastalik" id="kronikhasta" value="1">
                                <label class="form-check-label" for="inlineRadio1">kronik hastalik var</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kronikhastalik" id="kronikhastadegil" value="0">
                                <label class="form-check-label" for="inlineRadio1">kronik hastalik yok</label>
                            </div>
                            <p>kronik hastalik</p>
                            <hr>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asi" id="biontech" value="biontech">
                                <label class="form-check-label" for="inlineRadio1">biontech</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asi" id="sinovac" value="sinovac">
                                <label class="form-check-label" for="inlineRadio1">sinovac</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asi" id="yok" value="yok">
                                <label class="form-check-label" for="inlineRadio1">asi olmadi</label>
                            </div>
                            <p>asi durumu</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="tckno">
                            <p>Calisan TCNO</p>
                            <hr>
                            <input type="text" name="covidbelirti">
                            <p> covid belirti</p>
                            <hr>
                        </div>

                    </div>


                    <div class="d-flex justify-content-end">
                        <button type="submit"><b>yeni covid verisi ekle</b></button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </body>