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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    </head>
<script language="javascript">
         $(document).ready(function () {
            $("#txtCheckin").datepicker({
                minDate:0,
                dateFormat: "dd-M-yy",
                onSelect: function (date) {
                    var date2 = $('#txtCheckin').datepicker('getDate');
                    date2.setDate(date2.getDate()+1);
                    $('#txtCheckout').datepicker('setDate', date2);
                    //sets minDate to dateofbirth date + 1
                    $('#txtCheckout').datepicker('option', 'minDate', date2);
                }
            });
            $('#txtCheckout').datepicker({
                minDate:1,
                dateFormat: "dd-M-yy",
                onClose: function () {
                    var dt1 = $('#txtCheckin').datepicker('getDate');
                    console.log(dt1);
                    var dt2 = $('#txtCheckout').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                        $('#txtCheckout').datepicker('setDate', minDate);
                    }
                }
            });
        });

    </script>
<style>
    body{
        font-family: 'Poppins',sans-serif;
        background-color: #F8F9FA;
    }
.user {
    color: white;
    padding: 5px 8px 5px 8px;
}

.info-user {
    padding: 5px 0 5px 0;
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
    <section id="data-pengguna">
        <div class="container">
            <div class="container-fluid">
                <a href="<?= base_url('mainpage') ?>" class="btn btn-danger mb-3 mt-3"><i class="fa-solid fa-arrow-left"></i>
                    Kembali ke dahsboard</a>
                <form action="<?php echo base_url('guest/checkin') ?>" method="POST">
                    <div class="row form-register">
                        <div class="col-md-6 mb-3">
                            <label for="">Firstname:</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lastname:</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Nomor Telepon:</label>
                            <input type="text" name="notelp" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Check In:</label>
                            <input type="text" id="txtCheckin" class="form-control" name="cek_in">
                        </div>
                        <div class="col-md-6">
                            <label for="">Check Out:</label>
                            <input type="text" id="txtCheckout" class="form-control" name="cek_out">
                        </div>
                        <div class="col-md-6">
                            <label for="">jumlah:</label>
                            <select name="jumlah" id="" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="">Jenis:</label>
                            <select name="jenis" id="" class="form-control">
                                <option value="Single">Single</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Twin">Twin</option>
                            </select>
                        </div>
                        <div class="col-md-12 ">
                            <input type="submit" class="tombol-pesan btn btn-success" name="checkin" value="Pesan">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>