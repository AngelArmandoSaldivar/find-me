<?php   

    include("conection.php");

    session_start();
    $correo = $_SESSION['email'];


   if(isset($_POST['registerContact'])) {
        if(strlen($_POST['name']) >= 1 &&
            strlen($_POST['lastname']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['password']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['age']) >= 1) {
                
                $name = trim($_POST['name']);
                $lastname = trim($_POST['lastname']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $phone = trim($_POST['phone']);
                $age = trim($_POST['age']);
                $fecha = date('d/m/y');

                $query = "INSERT INTO contact(name, lastname, email, password, phone, age, role, date, idUser, emailUser) VALUES ('$name', '$lastname', '$email', '$password', '$phone', '$age', 'user', '$fecha', 1, '$correo')";
                $resultado = mysqli_query($conection, $query);
                if($resultado) {
                    echo "<script> window.location='contact.php'; </script>";
                }else{
                    echo "Registro sin exito :c";
                }
        }else{
            echo "Complete todos los campos!";
        } 
    }

?> 