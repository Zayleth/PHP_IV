<?php
// funcion que al tocar el boton de la cancion se reproduzca

// boton "REPRODUCIR" - se reproduzca la cancion
// boton "CAMBIAR" - se cambia la cancion 
?>

<button class="cancion_1">REPRODUCIR</button>
<button class="cancion_1">CAMBIAR</button>

<button class="cancion_2">REPRODUCIR</button>
<button class="cancion_2">CAMBIAR</button>

<button class="cancion_3">REPRODUCIR</button>
<button class="cancion_3">CAMBIAR</button>

<?php
// $r = rand(1,3);
?>

<!DOCTYPE html>
<audio controls>
  <source src="<?php $r; ?>.mp3" type="audio/mpeg">
</audio>

<?php
$r = rand(1,3);
?>


<?php
if(isset($_GET['r'])){ ?>
 <audio controls autoplay>
    <source src="<?php echo $_GET['r']; ?>.mp3" type="audio/mpeg">
</audio>  <?php } ?>

<a href="cancion.php?r=1"><button class="cancion_1">REPRODUCIR</button></a>
<a href="cancion.php?r=2"><button class="cancion_2">REPRODUCIR</button></a>
<a href="cancion.php?r=3"><button class="cancion_3">REPRODUCIR</button></a>


class Cancion {
    public $reproducir_cancion;
    public $cambiar_cancion;

    
    public function __construct($fi,$co)
    {
        $this->cantFilas=$fi;
        $this->cantColumnas=$co;
    }
    
}
?>