<?php 

    include 'conection.php';

    $correo = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conection, "SELECT * FROM users WHERE email='$correo' and password='$password'");

    if(mysqli_num_rows($validar_login) > 0) {
        header("location: user.php");
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe, verifique sus datos!");
                window.location = "login.php";
            </script>
        ';
        exit;
    }

?>