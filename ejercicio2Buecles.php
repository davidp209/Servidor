<?php $datos = explode(" ", trim(fgets(STDIN)));
$filas = $datos[0];
$columnas = $datos[1];
?>
<table border="solid 1px">
<?php for($i=0; $i < $filas; $i++) : ?>
    <tr>
<?php for($j = 0; $j < $columnas; $j++) : ?>
        <td></td>
<?php endfor; ?>
    </tr>
<?php endfor; ?></table>