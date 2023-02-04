<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Register</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
</head>
<style>
    body{
        background-color: #DEDEDE ;
        padding: 120px 0;
        font-family: 'Poppins', 'Sans-Serif';
        color: white;
    }
    .form-register{
        background-color: #002B5B;
        padding: 20px 30px;
        
    }
    .form-register h1{
        font-weight: bold;
        
    }
    
</style>
<body>
    <div class="container register">
        <div class="container-fluid">
            <form action="<?php echo base_url('/home/registered') ?>" method="POST" >
                <div class="row form-register">
                <h1>Register</h1>
                <p style="color:red ;"><?= $this->session->flashdata('msg'); ?></p>
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
                        <label for="">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3 mb-3">
                        <label for="">Nomor Telepon:</label>
                        <input type="text" name="notelp" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" name="register" class="btn btn-success" value="Register" >
                       

                        <a href="<?= base_url('home') ?>" class="btn btn-danger" style="float:right ;" > <i class="fa-solid fa-arrow-left"></i> Home</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>