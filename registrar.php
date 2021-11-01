<?php   

   if(isset($_POST['register'])) {
        if(strlen($_POST['name']) >= 1 &&
            strlen($_POST['lastname']) >= 1 &&
            strlen($_POST['age']) >= 1) {
                
                $name = trim($_POST['name']);
                $lastname = trim($_POST['lastname']);
                $age = trim($_POST['age']);
                $fecha = date('d/m/y');

                $query = "INSERT INTO users(name, lastname, age, role, date) VALUES ('$name', '$lastname', '$age', 'user', '$fecha')";
                $resultado = mysqli_query($conection, $query);
                if($resultado) {
                    echo "Registrado correctamente!";
                }else{
                    echo "Registro sin exito :c";
                }
        }else{
            echo "Complete todos los campos!";
        } 
    }

?> 