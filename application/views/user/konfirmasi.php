<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    body{
       background-color:  #DEDEDE;
       font-family:'Poppins', sans-serif ;
       padding: 100px 0;
    }
    .judul-bukti{
        font-weight: bold;
    }
    .btn{
        float: right;
    }
</style>
<body>
 
    <?php 
    $tampil = $this->db->get_where('kamar',array('jenis' => $transaksi->jenis))->row(); 
    ?>

    <div class="container">
        <div class="container-fluid">
            
            <center><h1 class="mb-5 judul-bukti">Bukti Pemesanan</h1></center>
            <?= $this->session->flashdata('emptyorder') ?>
            <table class="table table-secondary table-striped" >
                <tr style="text-align: center ;">
                    <th>Kode Transaksi</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Jenis Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Email</th>
                    <th>Status Pemesanan</th>
                </tr>
                <tr style="text-align: center ;">
                    <td><p><?= $transaksi->id ?></p></td>
                    <td><p><?= $transaksi->cek_in ?></p></td>
                    <td><p><?= $transaksi->cek_out ?></p></td>
                    <td><p><?= $transaksi->jenis ?></p></td>
                    <td><p><?= $transaksi->jumlah ?></p></td>
                    <td><p><?= $transaksi->email ?></p></td>
                    <td><p><?= $transaksi->status ?></p></td>
                </tr>
                <tr style="text-align: center ;">
                    <td><p> <b>Total:</b> </p></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><p><b>Rp. <?= $tampil->harga * $transaksi->jumlah ?></b></p> </td>
                </tr>
            </table>
            <a href="<?= base_url('mainpage') ?>" class="btn btn-danger">Kembali ke halaman utama</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>