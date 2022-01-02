<!DOCTYPE.php>
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

if(isset($_GET["tckimlikbox"]) && !empty($_GET["tckimlikbox"]))
{
    $tcno = $_GET["tckimlikbox"];
}
else
{
    $tcno = 1234578907;
}

$sql = "select * from eleman where (tcno = $tcno)";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    $ad = $row["isim"];
    $soyad = $row["soyisim"];
    $kangrubu = $row["idkangrubu"];
    $idsehir = $row["idsehir"];
    $idegitim = $row["idegitim"];
    $calismasaati = $row["calismasaati"];
    $pozisyon = $row["pozisyon"];
  } else {
    echo "0 results";
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
            <h1> Eleman Bilgileri</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="eleman_bilgi">
            <div class="search-container">
                <form action="sorgular.php">
                    <input type="text" placeholder="Search.." name="tckimlikbox">
                    <button type="submit">Submit</button>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <h3><b><?php echo $ad. " " .$soyad ?></b></h3>
                            <p>ad soyad</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h3><b><?php echo $tcno ?></b></h3>
                            <p>TC Kimlik No</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h3><b><?php echo $kangrubu ?></b></h3>
                            <p>Kan Grubu</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <h3><b><?php echo $idsehir ?></b></h3>
                            <p>Dogdugu Sehir</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h3><b><?php echo $pozisyon ?></b></h3>
                            <p>Pozisyon</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <a href="Hastalik_kayit.php">
                                <h3><b>Hastalik Kaydi</b></h3>
                            </a>
                            <hr>
                        </div>
                    </div>
                    <div class="row" style="margin: 3%;">
                        <div class="col-md-4">
                            <h3><b><?php echo $idegitim ?></b></h3>
                            <p>Egitim</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h3><b><?php echo $calismasaati ?></b></h3>
                            <p>Calisma Saatleri</p>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h3><b></b>+/-</b>
                            </h3>
                            <a href="Covid.php">
                                <p> Covid Durumu</p>
                            </a>

                            <hr>
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-end">

                    <div class="guncelle">
                        <button><b><a href="guncelle.php">Guncelle</a></b></button>
                    </div>
                    <div class="sil">
                        <button><b>Elemani Sil</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>