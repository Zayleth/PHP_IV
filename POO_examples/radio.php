<html>
<body>
<?php
if(isset($_GET['r'])){ ?>
 <audio controls autoplay>
    <source src="<?php echo $_GET['r']; ?>.mp3" type="audio/mpeg">
</audio>  <?php } ?>
<a href="radio.php?r=1"><button>Cancion 1</button></a>
<br>
<a href="radio.php?r=2"><button>Cancion 2</button></a>
<br>
<a href="radio.php?r=3"><button>Cancion 3</button></a>
<br>

</body>
</html>