<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Pantai</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
</head>

<style>


body {
    background: #DEDEDE;
    font-family: 'Poppins', 'Sans-Serif';
    color: white;
}

#header {
    color: #8FE3CF;   
    text-align: center;
    padding: 250px 0;
}

.navbar-brand {
    font-family: 'Aref Ruqaa Ink', serif;
    color: #8FE3CF;
    font-size: 20px;
}
.navbar-brand:hover {
    color: #256D85;
}
.nav-link {
    color: #8FE3CF;
}
.nav-link:hover {
    color: #256D85;
}
.pesan-skrg{
    color: #8FE3CF ;
    border-color: #8FE3CF;
}
.pesan-skrg:hover{
    background-color: #256D85;
}
.login{
    padding: 4px 10px 4px 10px;
    margin: 5px 3px ;
    color: #8FE3CF ;
    border-color: #8FE3CF;
}
.register{
    padding: 4px 10px 4px 10px;
    margin: 5px 3px ;
    color: #8FE3CF ;
    border-color: #8FE3CF;
}

#gambar-header {
    width: 100%;
    position: absolute;
    
    z-index: -50;
    top: 0;
    left: 0;
}

#about {
    padding: 150px 0;
    text-align: center;
    color: #002B5B;
}
hr{
    border: 4px solid #002B5B;
    opacity: 1;
}
#fasilitas {
    
    padding: 100px 0;
    text-align: center;
    background-color: #002B5B;
}
.carousel-caption{
    color: #002B5B ;
    font-size: 25px;
    background-color: #256D85;
    padding-left: 20px;
    padding-right: 20px;
}
.carousel-caption h5{
    font-size: 35px;
    font-weight: bold;
}

#card-hotel {
    padding: 50px 0;
   
}
.card-body{
    background-color: #002B5B ;
}
.judul-room{
    color:#002B5B ;
    font-weight: bold;
}
.card-pesan{
    color: #8FE3CF;
    border-color: #8FE3CF;
}
#footer {
    background-color: #002B5B;
    padding: 50px 0;
    text-align: center;
}

.footer-icon {
    padding: 20px 5px;
    font-size: 30px;
}
</style>

<body>

    <!-- navbar -->
    <section id="navbar" class="animate__animated animate__fadeInDown">

        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= base_url('') ?>">Hotel Pantai</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="<?= base_url('') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#fasilitas">Facility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#room">Room</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-light login" href="<?php echo base_url('/home/login') ?>"> Login </a>
                            </li>
                            <li class="nav-item">
                                <a class=" btn btn-outline-light register" href="<?php echo base_url('/home/register') ?>"> Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- mainheader -->
    <section id="header">
        <div class="container">
            <div class="container-fluid">
                <img id="gambar-header" src="assets/images/maldives.jpg" alt="">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="animate__animated animate__fadeInUp">Hotel Pantai</h1>
                        <h3 class="animate__animated animate__fadeInUp"><i>"Santai kaya dipantai"</i></h3>
                    </div>
                    <div class="col-md-6">
                        <h1 class="animate__animated animate__fadeInUp">ingin pesan?</h1>
                        <a href="<?= base_url('home/login') ?>"
                            class="btn btn-outline-light animate__animated animate__fadeInUp pesan-skrg"  >Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="container-fluid">
                <hr >
                <h1> <b>About Us</b> </h1>
                <h3> <i>"Rasakan sensai menjadi anak senja"</i> </h3>
                <hr >
            </div>
        </div>
    </section>
    <!-- facility -->
    <section id="fasilitas">
        <div class="container">
            <div class="container-fluid">
                <h1 class="mb-4"> <b>Fasilitas Hotel</b> </h1>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="100">
                            <img src="<?= base_url('assets/images/pool.jpg') ?>" class="d-block w-100 shadow-lg" alt="...">
                            <div class="carousel-caption d-none d-md-block rounded-2 shadow-lg">
                                <h5> <b>Pool</b> </h5>
                                <p>Tempat berenang untuk anak-anak dan dewasa</p>
                            </div>
                        </div>
                        <div class="carousel-item " data-bs-interval="100">
                            <img src="<?= base_url('assets/images/gym.jpg') ?>" class="d-block w-100 shadow-lg" alt="...">
                            <div class="carousel-caption d-none d-md-block rounded-2 shadow-lg">
                                <h5>Gym</h5>
                                <p>Menjaga kesehatan dan kebugaran tubuh anda</p>
                            </div>
                        </div>
                        <div class="carousel-item " data-bs-interval="100">
                            <img src="<?= base_url('assets/images/restoran.jpg') ?>" class="d-block w-100 shadow-lg" alt="...">
                            <div class="carousel-caption d-none d-md-block rounded-2 shadow-lg">
                                <h5>Restoran</h5>
                                <p>Makanan kecil, maupun makan berat siap dihidangkan. atau sekedar ngopi-ngopi</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- room -->
    <section id="card-hotel">
        <div class="container" id="room">
            <div class="container-fluid">
                <center>
                    <h1 class="mb-5 judul-room">Room</h1>
                </center>
                <div class="row mx-5">

                    <?php 
                        foreach ($kamar as $kmr){?>
                    <div class="col-md-4 text-center pt-4">

                        <div class="card d-flex" style="width: 18rem;">
                            <img src="<?= base_url('') ?>/assets/kamar/<?= $kmr->gambar ?>" class="card-img-top"
                                alt="Gambar Kamar">
                            <div class="card-body shadow-lg ">
                                <h5 class="card-title"> <b><?= $kmr->jenis ?></b> </h5>
                                <p class="card-text">Tempat tidur dan kamar yang nyaman, dengan nuansa pantai yang melekat sebagai ciri khas anak senja.</p>
                                <strong>
                                    <p>Harga Rp. <?=$kmr->harga ?></p>
                                </strong>
                                <a href="<?= base_url('/mainpage/booking') ?>/<?= $kmr->id ?>"
                                    class="btn btn-outline-primary card-pesan">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section id="footer">
        <div class="container">
            <div class="container-fluid">
                <h3>Keep contact with us</h3>
                <a href="http://facebook.com" class="footer-icon"><i class="fa-brands fa-facebook"></i></a>
                <a href="http://facebook.com" class="footer-icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="http://facebook.com" class="footer-icon"><i class="fa-brands fa-twitter"></i></a>
                <p>copyright &copy; fadel maulana 2022</p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>