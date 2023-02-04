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
   
   .gambar-kamar{
    width: 20%;
   }
   .table{
    text-align: center;
   }
</style>

<body>
    
<section id="navbar-admin">
        <div class="container">
           
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
</section>
    <section id="kamar">
        <div class="container">
        <div class="container-fluid">
                <a href="<?= base_url('mainpage') ?>" class="btn btn-danger mt-3 mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke dahsboard</a>
                <table class="table text-center table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=1;
                            foreach($result as $kmr){
                                $tampil = $this->db->get_where('transaksi',array('jenis' => $kmr->jenis))->row(); 
                            ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td> <img class="gambar-kamar" src="<?= base_url('/assets/kamar') ?>/<?= $kmr->gambar ?>" > </td>
                            <td><?= $kmr->jenis ?></td>
                            <?php 
                            if ($tampil == true) {
                                $tampil = $kmr->jumlah - $tampil->jumlah;
                            }else{
                                $tampil = $kmr->jumlah;
                            } 
                            ?>
                            <td><?=  $tampil ?></td>
                            <td> <?= $kmr->harga ?> </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                    
                    </table>
                    
                    </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>