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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:  #DEDEDE;
       font-family:'Poppins', sans-serif ;
       padding: 100px 0;
    }
    .btn{
        float: right;
    }
</style>
<body>
 
  

    <div class="container">
        <div class="container-fluid">
            <h1 class="text-center" style="font-weight:bold ;">Bukti Pemesanan</h1>
            <p style=" text-align: center ;" class="alert alert-danger mt-3 mb-5"> <?= $this->session->flashdata('emptyorder') ?></p>
           
            <table class="table table-striped" >
                
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
                    <td><p><p>-</p></p></td>
                    <td><p><p>-</p></p></td>
                    <td><p><p>-</p></p></td>
                    <td><p><p>-</p></td>
                    <td><p>-</p></td>
                    <td><p>-</p></td>
                    <td><p>-</p></td>
                </tr>
                <tr style="text-align: center ;">
                    <td><p> <b>Total:</b> </p></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><p><b>Rp. <?= 0 ?></b></p> </td>
                </tr>
            </table>
        </div>
        <a href="<?= base_url('mainpage') ?>" class="btn btn-danger"> Kembali ke halaman utama</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>