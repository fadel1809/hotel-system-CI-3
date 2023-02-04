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
    <title>Login</title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon/beach.png')?>" type="image/x-icon">
</head>
<style>
    body{
        background-color: #DEDEDE ;
        padding: 150px 0;
        font-family: 'Poppins', 'Sans-Serif';
        color: white;
    }
    .login{
        background-color: #002B5B;
        padding: 20px 30px;
    }
    .login h1{
        font-weight: bold;
    }
</style>
<body>


    <div class="container" >
   
        <div class="container-fluid">
        
            <form action="<?php echo base_url('home/ceklogin') ?>" class="login rounded-1 shadow-lg " method="POST">
            
            <h1>Login</h1>
            <p style="color:red ;"><?= $this->session->flashdata('msg'); ?></p>
               <div class="mb-3">
               <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?= $this->session->flashdata('email'); ?>">
               </div>
               <div class="mb-3">
               <label for="">Password</label>
                <input type="password" name="password" class="form-control" >
               </div>
               <a href="<?= base_url('home') ?>" class="btn btn-danger" style="float:right ;" > <i class="fa-solid fa-arrow-left"></i> Home</a>
               <input type="submit" name="login" class="btn btn-success" value="login">
               <p>Do you have an account? <a href="<?= base_url('home/register') ?>" > Register</a></p>
               
               
            </form>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>