<html>
<head>
<title>Dinamic Table</title>
<style>
    table {
        font-size: 40px;
    }
</style>

</head>
<body>
    <?php
    class Tabla {
    private $mat=array();
    private $cantFilas;
    private $cantColumnas;
    public function __construct($fi,$co)
    {
        $this->cantFilas=$fi;
        $this->cantColumnas=$co;
    }
    
    // para meter datos a la celda
    public function cargar($fila,$columna,$valor)
    {
        $this->mat[$fila][$columna]=$valor;
    }

    // metodo para crear la tabla
    private function inicioTabla()
    {
        echo '<table border="1">';
    }

    // metodo para establecer el inicio de la fila
    private function inicioFila()
    {
        echo '<tr>';
    }
    
    // lo que se mostrara
    private function mostrar($fi,$co)
    {
        echo '<td>'.$this->mat[$fi][$co].'</td>';
    }

    // cierra de la fila
    private function finFila()
    {
        echo '</tr>';
    }

    // fin de la tabla
    private function finTabla()
    {
        echo '</table>';
    }

    public function graficar()
    {
        $this->inicioTabla();
        for($f=1; $f<=$this->cantFilas; $f++)
        {
        $this->inicioFila();
        for($c=1;$c<=$this->cantColumnas;$c++)
        {
            $this->mostrar($f,$c);
        } 
        $this->finFila();
        }
        $this->finTabla();
    }
    }

    $tabla1=new Tabla(2,3);
    $tabla1->cargar(1,1,"1");
    $tabla1->cargar(1,2,"2");
    $tabla1->cargar(1,3,"3");
    $tabla1->cargar(2,1,"4");
    $tabla1->cargar(2,2,"5");
    $tabla1->cargar(2,3,"6");
    $tabla1->graficar();
    ?>
</body>
</html>