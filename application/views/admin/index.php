<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    body{
        font-family: 'Poppins',sans-serif;
        background-color: #F8F9FA;
    }
   .user{
    color: white;
    padding: 5px 8px 5px 8px;
   }
   .info-user{
        padding: 5px 0 5px 0;
   }
</style>
<?php 
$queryKamarTerpakai = $this->db->get_where('transaksi',['status'=>'confirm'])->result();
$kamarTerpakai = count($queryKamarTerpakai);
$total = 0;
$jumlahKamar = 0;
foreach($queryKamarTerpakai as $hitungKamar){
    $jumlahKamar = $hitungKamar->jumlah +$jumlahKamar; 
}

foreach($kamar as $kmr){
    $total = ($total + $kmr->jumlah) ;
}
$totalKamar = $total - $jumlahKamar;

$queryTransaksiPending = $this->db->get_where('transaksi',['status'=>'pending'])->result();
$jumlahTransaksiPending = count($queryTransaksiPending);
?>
<body>
    
    <section id="navbar-admin">
        <div class="container">
           <div class="contaianer-fluid">
                <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand" href="<?= base_url('mainpage') ?>">Admin Hotel Pantai</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Halo , Admin <?= $this->session->userdata('firstname') ?>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= base_url('mainpage/logout') ?>">Logout</a></li>
                                        
                                    </ul>
                                </div>
                                </li>
                            </ul>
                        </div>
                    
                </nav>
            
                </div>
        </div>
    </section>
    <section id="dashboard">
        <div class="container ">
            <div class="container-fluid">
                <div class="row text-center">
                    <h1> <b>Admin</b> </h1>
                   <?php 
                   if($this->session->flashdata('nama')){
                   ?>
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            Selamat datang admin <b><?= $this->session->flashdata('nama') ?></b> anda berhasil login
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-3 user ">
                        <div class="info-user bg-primary rounded">
                            <h5>Data Pengguna</h5>
                            <h5><b><?= $this->db->count_all('user'); ?></b></h5>
                            <a href="<?= base_url('User/data') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 user">
                    <div class="info-user bg-secondary rounded">
                            <h5>Total Kamar</h5>
                            <h5><b><?= $totalKamar ?></b></h5>
                            <a href="<?= base_url('Kamar/data') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 user">
                    <div class="info-user bg-warning rounded">
                            <h5>Transaksi Pending</h5>
                            <h5><b><?= $jumlahTransaksiPending ?></b></h5>
                            <a href="<?= base_url('Transaksi/pending') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                   
                    <div class="col-md-3 user">
                    <div class="info-user bg-info rounded">
                            <h5>Transaksi Confirmed</h5>
                            <h5><b><?= $kamarTerpakai ?></b></h5>
                            <a href="<?= base_url('/Transaksi/confirmed') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 user">
                            <div class="info-user bg-success rounded ">
                                <h5>Checkin Customer</h5>
                                <a href="<?= base_url('guest/index') ?>" id="checkin" style="color: white; font-size:30px ;"><i class="fa-solid fa-door-open"></i></a>
                            </div>
                    </div>
                    <div class="col-md-6 user">
                    <div class="info-user bg-danger rounded" >
                            <h5>Checkout Customer</h5>
                            <a id=checkout href="<?= base_url('guest/checkout') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-door-open"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 user">
                    <div class="info-user bg-dark rounded" >
                            <h5>Inventaris Tamu</h5>
                            <a id=checkout href="<?= base_url('guest/inventaristamu') ?>" class="" style="color: white; font-size:30px ;"><i class="fa-solid fa-server"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>