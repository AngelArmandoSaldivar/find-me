<?php   

    include("conection.php");

   if(isset($_POST['register'])) {
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

                $query = "INSERT INTO users(name, lastname, email, password, phone, age, role, date) VALUES ('$name', '$lastname', '$email', '$password', '$phone', '$age', 'user', '$fecha')";
                $resultado = mysqli_query($conection, $query);
                if($resultado) {
                    echo "<script> window.location='login.php'; </script>";
                }else{
                    echo "Registro sin exito :c";
                }
        }else{
            echo "Complete todos los campos!";
        } 
    }

?> 