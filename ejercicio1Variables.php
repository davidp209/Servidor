<?php 
 $datos = explode(" ", trim(fgets(STDIN)));?>
Se han introducido <?php echo count($datos); ?> numeros
<?php if (count($datos)<2):?>
Argumentos insuficientes 
<?php else: 
    $numero1 = $datos[0];
    $numero2 = $datos[1];
    $resultado = $numero1 + $numero2 ;
    echo $resultado; ?>
<?php endif; ?>
