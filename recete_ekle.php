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
        $ilacadi = $_GET["ilacadi"];
        $doz = $_GET["doz"];


        $sql = "INSERT INTO recete VALUES( null, '$ilacadi', $doz , $tcno);";
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
                <h1><b>Recete Ekle</b></h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="guncelle1">
                <form action="recete_ekle.php">
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <input type="text" name="ilacadi">
                            <p> ilac Adi</p>
                            <hr>
                        </div>
                        <div class="col-md-4">

                            <input type="text" name="doz">
                            <p>ilac Dozu (mg)</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="tckno">
                            <p>Calisan TCNO</p>

                            <hr>
                        </div>
                    </div>


                    <div class="d-flex justify-content-end">
                        <button type="submit"><b>yeni recete ekle</b></button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </body>