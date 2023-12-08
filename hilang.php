<?php
include_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan</title>
    <link rel="stylesheet" type="text/css" href="css/style_yohana.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style_yohana.css">
    <link rel="stylesheet" href="css/styleP.css">
    <!-- Customized Bootstrap Stylesheet -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery library -->
    <link rel = "stylesheet" href="js/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel = "stylesheet" href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <script src="js/filejs/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#tabs" ).tabs({
            collapsible: true
            });
        } );
        </script>
</head>
<body>
<div class="container-xxl py-5">
    <div class="container">
        <center>
            <h1><b>Laporkan Barang Hilang</b></h1>
            </center> <br><br><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum debitis pariatur fugiat soluta voluptatum ab ea voluptate, deserunt porro rerum eaque quidem laudantium delectus quis incidunt architecto exercitationem quasi ratione doloribus mollitia totam tenetur. Tenetur fugit fuga obcaecati. Vero, ipsum cupiditate iste sequi, quidem vitae pariatur laboriosam, quas magni voluptatum quo quae commodi dolore! Placeat eveniet atque porro voluptas qui optio molestiae ipsum accusamus laudantium voluptatibus doloremque ad fugit ipsam commodi rem aliquam dolores facilis, autem nostrum. Perferendis ex dignissimos adipisci aperiam dicta quis tenetur ea porro iure sequi perspiciatis dolorem, atque dolore accusamus quos ipsa maiores quaerat obcaecati harum, consectetur, reprehenderit debitis eligendi illum. Minima nemo adipisci esse et pariatur accusamus ad ea ab sint, praesentium laboriosam doloribus expedita atque facilis non recusandae mollitia doloremque numquam accusantium cupiditate? Quas obcaecati natus autem minus eos vitae laudantium voluptas ea? Voluptas velit beatae quaerat omnis eveniet illo, consequatur harum est officiis minima corporis deserunt aspernatur distinctio quo. Maxime at ut nemo exercitationem neque distinctio possimus, error iure sit ducimus quis atque itaque officia perspiciatis. Provident temporibus eum labore ipsam magnam optio natus possimus voluptatem fuga quam, voluptatibus fugit. Dignissimos, impedit tempore pariatur nam quis, nihil dicta neque aliquam labore esse ut voluptates asperiores, maiores praesentium rerum commodi corrupti totam? Sed maxime iste autem modi sapiente doloribus quisquam vitae error necessitatibus, incidunt, tempore beatae, dolorum atque hic? Eum rerum ex accusamus, expedita laudantium pariatur quam perspiciatis a ab commodi odit aperiam rem beatae. Iure, aut velit eum facere repudiandae ex ducimus facilis dolore asperiores deleniti, tempore ut reprehenderit, sequi ipsam iusto ipsum! Repudiandae fugiat ad rem cum nisi placeat voluptatibus provident voluptates quae maxime temporibus aliquid distinctio aliquam ut nesciunt nostrum dolore officia accusantium, alias voluptate neque. Debitis officia ducimus dolorem tenetur veniam corrupti ut eaque, nesciunt facilis eos ab iste sint?</p>
    </div>
</div>

<div class="container">
    <div class="table-wrapper">
        <form>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="noHp" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="noHp" name="noHp">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="location" class="col-sm-2 col-form-label">Lokasi Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="time" class="col-sm-2 col-form-label">Waktu Kehilangan</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="time" name="time">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ciri - ciri</label>
                    <div class="col-sm-10">
                        <textarea name="detail" id="detail" name="detail" cols="108" rows="5" style="border-radius:10px;"></textarea>
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Poto barang</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="image">
                    </div>
            </div><br>
            <div class="form-group row">
                <label for="photo" class="col-sm-2 col-form-label">Kategori Barang</label>
                <div class="radio-inline">
                    <label><input type="radio" name="posradio1">Uang &nbsp &nbsp &nbsp &nbsp </label>
                    </div>
                    <div class="radio-inline">
                    <label><input type="radio" name="posradio2">Sehari-hari &nbsp &nbsp &nbsp &nbsp</label>
                    </div>
                    <div class="radio-inline">
                    <label><input type="radio" name="posradio3">Elektronik &nbsp &nbsp &nbsp &nbsp</label>
                    </div>
                    <div class="radio-inline">
                    <label><input type="radio" name="posradio3">Buku &nbsp &nbsp &nbsp &nbsp</label>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary" style="border-radius:15px ;">Submit</button>
        </form>
			
        </div>
    </div>



 <!-- Footer Start -->
 <div class="container-fluid bg-dark  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8 col-md-8">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Jl. P.I. Del, Sitoluama, Kec. Laguboti, Toba, Sumatera Utara 22381</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 12 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>team10@gmail.com</p>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3664472833148!2d99.14619961493582!3d2.383525458046004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sDel%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1638024922607!5m2!1sen!2sid"
                            width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Menu Cepat</h5>
                    <a class="btn btn-link" href="index.php">Beranda</a>
                    <a class="btn btn-link" href="temukan.php">Temukan</a>
                    <a class="btn btn-link" href="laporkan.php">Laporkan</a>
                    <a class="btn btn-link" href="grafik.php">Grafik</a>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>

