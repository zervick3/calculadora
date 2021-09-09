<?php
$metros=$_POST['m'];

$baldosa=$metros*1.4;
$principal=$metros*0.23;
$secundario=$metros*1.36;

$angulo=$metros*0.27;
$alambre=$metros*0.06;
$clavo=$metros*0.91;
$fulminante=$metros*0.91;
$clavoacero=$metros*2.18;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cuadro.css">
    <title>placha baldosa 60x60</title>
</head>
<body>
<table>
            <tr>
                <th>MATERIALES</th><th>UNIDAD</th><th>CANTIDAD</th>
            </tr>
            <tr>
                <td>BALDOSA 0.61m x 1.20m ( 2’ x 4’ )</td><td>PZA</td><td><?php echo round ($baldosa , 2 )?></td>
           </tr>
           <tr>
                <td>TEE PRINCIPAL POWERGRID 3.66m</td><td>PZA</td><td><?php echo round ($principal, 2)?></td>
           </tr>
           <tr>
                <td>TEE SECUNDARIO POWERGRID 1.22m</td><td>PZA</td><td><?php echo round($secundario , 2 )?></td>
           </tr>
           
           <tr>
                <td>ANGULO PERIMETRAL POWERGRID 3.05m</td><td>PZA</td><td><?php echo round($angulo , 2 )?></td>
           </tr>
           <tr>
                <td>ALAMBRE GALVANIZADO Nº12</td><td>KG</td><td><?php echo round($alambre,2) ?></td>
           </tr>
           <tr>
                <td>CLAVO CLIP POWERFUL</td><td>CTO</td><td><?php echo round($clavo, 2 ) ?></td>
           </tr>
           <tr>
                <td>FULMINANTE TIRO x TIRO CAL 0.22 POWERFUL</td><td>CTO</td><td><?php echo round($fulminante,2)?></td>
           </tr>
           <tr>
                <td>CLAVO ACERO</td><td>CJA</td><td><?php echo round ($clavoacero , 2 )?></td>
           </tr>
           
           


      </table>
      <div class="temas">
          <p class="importante">Consideraciones: </p>
          <p>* Verifique la cantidad de ángulos perimetrales en función de las medidas del cielo a construir.</p>
          <p>* Los cuadros de consumos son estimados, recomendamos realizar un esquema del recinto con la modulación del cielo para determinar la cantidad exacta de materiales.</p>
          
          
      </div>
</body>
</html>