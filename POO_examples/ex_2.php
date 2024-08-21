<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <div style="width: 150px; height: 150px;">
        <form action="" method="POST">
            <label for="nombre">Name:</label>
            <input type = "text" id="nombre" name="nombre">
            <br><br>

            <label for="apellido">Last-Name:</label>
            <input type = "text" id="apellido" name="apellido">
            <br><br>

            <input type="submit" value="SEND">
        </form>
    </div>


    <?php
    extract ($_POST);

    if (isset($nombre)) {

        // crear una CLASE
        class Persona {
            private $first_name;
            private $last_name;
            public function inicializar ($name, $apellido)
        {
            $this->first_name = $name;
            $this->last_name = $apellido;
        }

        public function imprimir()
        {
            echo $this->first_name;
            echo "<br>";
            echo $this->last_name;

        }
        }
    

    $pers_1 = new Persona();
    $pers_1->inicializar($nombre, $apellido);
    $pers_1->imprimir();

    }
        
    ?>

</body>
</html>
