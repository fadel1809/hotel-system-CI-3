<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    </head>

<style>
body{
    background-color: #DEDEDE ;
        padding: 60px 0;
        font-family: 'Poppins', 'Sans-Serif';
        color: white;
}

#header {
    background-color: #ABD9FF;
    text-align: center;
    padding: 250px 0;
}

#navbar {
    background-color: #ABD9FF;

}

#about {
    padding: 150px 0;
    text-align: center;
    background-color: #C3F8FF;
}

#fasilitas {
    padding: 150px 0;
    text-align: center;
    background-color: #ABD9FF;
}
.tombol-pesan{
    width: 100%;
}

.card-room{
    text-align: center;
    align-items: center;
    justify-content: center;
}
.box{
    justify-content: center;
    align-items: center;
}

.container{
    background-color: #002B5B;
    padding: 40px 10px;
}
.judul-booking{
    font-weight: bold;
}
.back{
    margin-left: 15px;
    margin-bottom: 5px;
}
</style>

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

<body>

    <div class="container shadow-lg rounded">
    <a href="<?= base_url('mainpage') ?>"  class="btn btn-danger back">Kembali</a>
        <div class="container-fluid">
        
            <div class="row">
          
                <h1 class="judul-booking">Booking kamar</h1>
                <div class="col-md-6">
                    <img style="width:95% ;" class="rounded" src="<?= base_url('assets/kamar') ?> /<?= $details->gambar ?>" alt="">
                </div>
                <div class="col-md-6" >
                    <h2><?= $details->jenis ?> Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptatibus reprehenderit tempore eligendi blanditiis quisquam reiciendis tenetur, vero sint, et cum rerum nulla hic architecto inventore, deleniti quis esse dolorem!</p>
                    <form action="<?= base_url('/mainpage/booked') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Check In:</label>
                                <input type="text" id="txtCheckin" class="form-control" name="cek_in" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Check Out:</label>
                                <input type="text" id="txtCheckout" class="form-control" name="cek_out">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">jumlah:</label>
                                <select name="jumlah" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Jenis:</label>
                                <input type="text" value="<?= $details->jenis ?>" readonly class="form-control" name="jenis">
                            </div>
                            <div class="col-md-12 ">
                                <input type="submit" class="tombol-pesan btn btn-success" name="pesan" value="Pesan">            
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>