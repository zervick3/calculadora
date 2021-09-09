<?php
$metros=$_POST['m'];

$planchast= ($metros/2.7) ;
$parante = (($metros/2)/0.61);
$riel= (($metros/2)/ $parante )/2;
$tornillo6x1=$metros*0.02;
$tornillowafer= $metros*0.01;
$clavo=$metros*0.02;
$fulminante=$metros*0.02;
$cinta=$metros * 0.04;
$masilla = $metros*0.06;
$lija=$metros*0.04;
$sika=$metros*0.31;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cuadro.css">
    <title>placha standar</title>
</head>
<body>
<table>
            <tr>
                <th>MATERIALES</th><th>UNIDAD</th><th>CANTIDAD</th>
            </tr>
            <tr>
                <td>SUPERBOARD 1.22X2.44M X 6MM (exterior)</td><td>PL</td><td><?php echo round ($planchast , 2 )?></td>
           </tr>
            <tr>
                <td>GYPLAC (STD) 1.22x2.44x12.7MM.(1/2¨) (INTERIOR)</td><td>PL</td><td><?php echo round ($planchast , 2 )?></td>
           </tr>
           <tr>
                <td>PARANTE 3" K-LIBRE 89x38x0.45mmx3m</td><td>PZA</td><td><?php echo round ($parante , 2)?></td>
           </tr>
           <tr>
                <td>RIEL 3" K-LIBRE 90x25x0.45mmx3m</td><td>PZA</td><td><?php echo round($riel , 2 )?></td>
           </tr>
           <tr>
                <td>TORNILLO PLANCHA METALDRYLL 6x1 P/FINA </td><td>MILL</td><td><?php echo round($tornillo6x1 , 2 )?></td>
           </tr>
           <tr>
                <td>TORNILLO METAL WAFER 8X1/2"  P/FINA</td><td>MILL</td><td><?php echo round($tornillowafer , 2 )?></td>
           </tr>
           <tr>
                <td>CLAVO 1" PARA DISPARO METALDRYLL</td><td>CTO</td><td><?php echo round($clavo,2) ?></td>
           </tr>
           <tr>
                <td>FULMINANTE CALIBRE 0.22 METALDRYLL</td><td>CTO</td><td><?php echo round($fulminante, 2 ) ?></td>
           </tr>
           <tr>
                <td>CINTA PAPEL METALDRLL 50mm x 90m</td><td>ROLL</td><td><?php echo round($cinta,2)?></td>
           </tr>
           <tr>
                <td>MASILLA GYPLAC BALDE X 27 KG</td><td>BALD</td><td><?php echo round ($masilla , 2 )?></td>
           </tr>
           <tr>
                <td>LIJA Nº120 AL AGUA</td><td>PZA</td><td><?php echo round ($lija , 2 )?></td>
           </tr>
           <tr>
                <td>SIKA FLEX AT FACHADA METALDRYLL (junta exterior 300ml)</td><td>BALD</td><td><?php echo round ($sika , 2 )?></td>
           </tr>
           


      </table>
      <div class="temas">
          <p class="importante">Consideraciones: </p>
          <p>* Cálculo realizado con parantes cada 61mm para alturas no mayores a 3.50m.</p>
          <p>* Para fachadas exteriores se recomienda la placa Superboard SQ de 12mm</p>
          <p> * Para una pared interior con junta invisible se recomienda la placa Superboard PRO de 6mm.</p>
          <p class="importante">Observaciones: </p>
          <p> * Nunca masillar las placas en exteriores, dejar la junta visible y sellar con Sika AT FACHADA</p>
          <p> * Masillar las placas Supeboard PRO en interiores, dejando una dilatación de 3 milímetros, y aplicando una masilla para interiores y una cinta de malla de fibra de vidrio.</p>
          <p> * Los cuadros de consumos son estimados.</p>
          
      </div>
</body>
</html>