<!DOCTYPE.php>
.php lang="en">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "select * from eleman"

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["ideleman"]. " - Name: " . $row["isim"]. " " . $row["soyisim"]. "<br>";
    }
  } else {
    echo "0 results";
  }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

    </style>
    <title>Caspi Health</title>
</head>

<body>
    <h1 class="h2 col-md-6 my-5 mt-5 text-center">WELCOME!</h1>
    <div class="row">
        <ul class="liste col-md-3">
            <li><a href="grafik_sayfa.php">Anasayfa</a></li>
            <li><a href="sorgular.php">Sorgulamalar</a></li>
            <li><a href="Eleman_Ekle.php">Yeni Eleman Ekle</a></li>
        </ul>
        <div class="d-flex justify-content-center col-md-6">
            <div class="row mx-3">
                <div class="col-md-4">
                    <div class="rapor_kutu">
                        <p class="text-center graphic-x"><b>Aktif<br> 270<!-- dinamic alinacak-->
                        <br> Calisan</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mx-3">
                <div class="col-md-4">
                    <div class="rapor_kutu">
                        <p class="text-center graphic-x"><b>Raporlu<br> 31<!-- dinamic alinacak-->
                        <br> Calisan</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mx-3">
                <div class="col-md-4">
                    <div class="rapor_kutu">
                        <p class="text-center graphic-x"><b>COVID<br> 60<!-- dinamic alinacak-->
                        <br> Calisan</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="row col-md-12 d-block">
            <div class="d-flex mt-5 justify-content-center">
                <div id="pie-chart" class="d-block row"></div>
                <div class="d-block mt-5">
                    <div class="col-md-12 mt-3 d-flex">
                        <p class="text-center col-md-12 d-block">
                            <b> Covide Yakalanma Orani</b>
                        </p>
                    </div>
                    <div class="col-md-4 d-flex">
                        <p class="text-center col-md-12 d-block">
                            <div class="kutu_mavi justify-content-end col-md-8 d-flex"></div> &nbsp;&nbsp;??lkokul Mezunu
                            <!-- 360 a gore dinamic alinacak-->
                        </p><br>
                    </div>

                    <div class="col-md-4 d-flex">
                        <p class="text-center col-md-12 d-block">
                            <div class="kutu_turuncu justify-content-end col-md-8 d-flex"></div> &nbsp;&nbsp;Lise Mezunu
                            <!-- 360 a gore dinamic alinacak-->
                        </p><br>
                    </div>

                    <div class="col-md-4 d-flex">
                        <p class="text-center col-md-12 d-block">
                            <div class="kutu_gri justify-content-end col-md-8 d-flex"></div> &nbsp;&nbsp;??niversite Mezunu
                            <!-- 360 a gore dinamic alinacak-->
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div id="bar-example"></div>

    </div>
    <div class="d-flex justify-content-center">
        <p><b>Yakalanma s??kl??????na g??re hastal??klar</b></p>
    </div>
    <div class="d-flex">
        <div class="row col-md-12 d-inline justify-content-center">
            <div class="col-md-4 d-flex">
                <p class="text-center col-md-12 d-block">
                    <div class="kutu_turuncu justify-content-end col-md-2 d-flex"></div> &nbsp;&nbsp;Covid
                </p><br>
            </div>
            <div class="col-md-4 d-flex">
                <p class="text-center col-md-12 d-block">
                    <div class="kutu_mor justify-content-end col-md-2 d-flex"></div> &nbsp;&nbsp;Depresyon
                </p><br>
            </div>
            <div class="col-md-4 d-flex">
                <p class="text-center col-md-12 d-block">
                    <div class="kutu_lila justify-content-end col-md-2 d-flex"></div> &nbsp;&nbsp;Grip
                </p><br>
            </div>
            <div class="col-md-4 d-flex">
                <p class="text-center col-md-12 d-block">
                    <div class="kutu_somon justify-content-end col-md-2 d-flex"></div> &nbsp;&nbsp;Kanser
                </p><br>
            </div>
            <div class="col-md-4 d-flex">
                <p class="text-center col-md-12 d-block">
                    <div class="kutu_gri justify-content-end col-md-2 d-flex"></div> &nbsp;&nbsp;Kabakulak
                </p><br>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="sehir">
            <div class="form-group">
                <select class="form-control form-control" style="margin-top: 5%;" onchange="myFunction">
                    <option id="form1">Large select</option><!-- dinamic alinacak-->
                    <option id="form2">Large select</option>
                    <option id="form3">Large select</option>
                    <option id="form4">Large select</option>
                  </select>
            </div>
            <ul>
                <!-- her bir sehir id si icin bir liste gorunur olacak sekilde dinamic alinacak-->
                <li>afaf</li>
                <li>asfasfd</li>
                <li>fasfasf</li>
            </ul>
            <ul>
                <!-- her bir sehir id si icin bir liste gorunur olacak sekilde dinamic alinacak-->
                <li>afaf</li>
                <li>afaf</li>
                <li>asfasfd</li>
                <li>fasfasf</li>
            </ul>
        </div>
    </div>


</body>
<script>
    Morris.Donut({
        element: 'pie-chart',
        colors: ["#F3A100 ", "#0500F9 ", "#C4C4C4 "],
        data: [{
            label: "Lise Mezunu ",
            value: 30
        }, {
            label: "Ilkokul Mezunu ",
            value: 15
        }, {
            label: "Universite Mezunu ",
            value: 45
        }, ]
    });
    Morris.Bar({
        element: 'bar-example',
        data: [{ //dinamic alinacak
            y: 'Covid',
            a: 100,

        }, {
            y: 'Depresyon',
            b: 75,

        }, {
            y: 'Grip',
            c: 50,

        }, {
            y: 'Kanser',
            d: 75,

        }, {
            y: 'Kabakulak',
            e: 50,

        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd', 'e'],
        labels: ['Series A', 'Series B', 'Series C', 'Series D', 'Series E'],
        barColors: ['#F3A100', '#918EFF', '#FDD18E', '#807FB4', '#C4C4C4']
    });

    function myFunction() {
        document.getElementById("1").show;
    }
</script>

<.php>