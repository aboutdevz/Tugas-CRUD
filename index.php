<?php
    if (isset($_POST['submit'])) {
        $host = $_POST['Host'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $database = $_POST['database'];

        

        $file = fopen('config.json','w+');
        $main = fopen('index.php','w+');
        fwrite($file,'{"host":"'.$host.'","username":"'.$username.'","password":"'.$password.'","db":"'.$database.'"}');
        
        header('location:http://localhost/CRUD/public/');
        fwrite($main,'<?php header("location:http://localhost/CRUD/public");');
        fclose($file);
        fclose($main);
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="loginCard mt-5">
        <h1 class="text-center text-primary">Config Database</h1>
        <p><b>supaya bisa jalan applikasinya</b></p>

        <ul>
            <li>import dlu crud.sql di phpmyadmin</li>
            <li>isi kolom host (biasanya "localhost")</li>
            <li>isi kolom username (biasanya root)</li>
            <li>isi kolom password (biasanya kosongin aja kolomnya)</li>
            <li>isi kolom database isi dengan "<b class="text-danger    ">crud</b>"</li>
            <li><b>submit</b></li>
        </ul>
        <small class="text-danger">halaman ini akan menghilang setelah di submit</small>  <small>normal kok:D</small> 
        <br><br>
        <p>setelah itu masukkan username dan password untuk login</p>
        <p><b>username : Admin</b></p>
        <p><b>password : Admin</b></p>
            <form class="mt-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="Host">Host</label>
                    <i class="far fa-user"></i>
                    <input type="text" class="form-control" name="Host" id="Host" placeholder="Enter Host" required>
                    <small id="emailHelp" class="form-text text-muted">Enter Host</small>
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <i class="far fa-user"></i>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                    <small id="emailHelp" class="form-text text-muted">Enter username</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                    <small id="emailHelp" class="form-text text-muted">Enter Your Password</small>
                </div>
                <div class="form-group">
                    <label for="database">database</label>
                    <i class="fas fa-unlock"></i>
                    <input type="database" class="form-control" name="database" id="database" placeholder="database" required>
                    <small id="emailHelp" class="form-text text-muted">Enter Your database</small>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>