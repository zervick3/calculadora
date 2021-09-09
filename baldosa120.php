<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title></title>
</head>
<body> 

    <header class="titulo header">
       <div class="img"><img src="img/logo.jpg" ></div>
       <nav class="menu">
           <ul>
               <li><a class="fab fa-whatsapp" > 994322867</a></li>
               <li><a class="fas fa-phone-volume" href="#"> 43 635431</a></li>
           </ul>

       </nav>
    </header>

    <section class="cajas">

       <div class="c1 caja1">
     <div class="t1">


       <i class="fas fa-calculator"></i>
       <p> TIPOS DE CALCULOS</p>

     </div>
       
           <ul class="ul">
               <li><a class="fab fa-steam" href="index.php"> TABIQUE STANDAR METALDRYLL(INTERIOR)</a></li>
               <li><a class="fab fa-steam" href="placharh.php"> TABIQUE SANITARIO RH METALDRYLL (INTERIOR)</a></li>
               <li><a class="fab fa-steam" href="fibrocemento.php"> TABIQUE SUPERBOARD EXTERIOR – INTERIOR</a></li>
               <li><a class="fab fa-steam" href="cieloraso.php"> CIELO RASO METALDRYLL </a></li>
               <li><a class="fab fa-steam" href="baldosa60.php"> TECHO CON BALDOSA 0.61M X 0.61M </a></li>
               <li><a class="fab fa-steam" href="baldosa120.php"> TECHO  CON BALDOSA 0.61M X 1.22M </a></li>
           </ul>
    </div>




       <div class="c1 caja2">
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
               <input type="text" name="m" id="" class="input" placeholder=" " >
               <input type="submit" value="Calcular" class="submit" name="submit">
           </form>
            
           <?php 
           
           if(isset($_POST['submit'])){
  
           
            $metros=$_POST['m'];
            
            if($metros == ""){
                echo  "<div class='error'> El campo no puede estar vacio </div>";
            }else{
               include("calculos/baldosa60x120.php");
            }
            }
            
        
        
           ?>
        
        </div>
        

    </section>

    
       
    
    <footer class="footer" >

     <div class="cajafooter tema">
         <h3>METALDRYLL </h3>
        <p id="tema2"> Somos una empresa peruana dedicada a la  VENTA Y DISTRIBUCION de materiales para el SISTEMA DRYWALL y TECHOS ACUSTICOS, ALUZINC, ETERNIT, PUERTAS, SISTEMA ELECTRICO, EPPS, POR MAOYR Y MENOR .</p>    
        <img src="./img/logo.jpg" >
      </div>

     <div class="cajafooter ubicacion">
         <h3>SUCURSALES</h3>
          <div class="chimbote">
              <h5>CHIMBOTE </h5>
             <a class="fas fa-map-marker-alt" href="https://goo.gl/maps/J3CZvg39Zc6GSAb78" target="_BLANK"> Av.Buenos Aires 646 - El Progreso </a>
          </div>
          <div class="chimbote">
              <h5>NUEVO CHIMBOTE </h5>
             <a class="fas fa-map-marker-alt" href="https://goo.gl/maps/w4GzjxogUtCFGFYw5" target="_BLANK"> AA.HH 19 de Marzo Mz. K Lt. 10</a>
          </div>
          
     
     </div>
     

     
     <div class="cajafooter contacto">
         <h3>CONTACTENOS</h3>
         <a class="fab fa-whatsapp"  href="https://wa.me/c/51994322867" target="_BLANK"> 994322867</a>
         
         <a class="fab fa-whatsapp" href="https://wa.me/51959699980" target="_BLANK"> 959699980</a>
         <a class="fab fa-whatsapp" href="https://wa.me/51902281120" target="_BLANK"> 902281120</a>
         <a class="fab fa-whatsapp" href="https://wa.me/51945094138" target="_BLANK"> 945094138</a>
    </div>
     <div class="cajafooter red">
         <h3>SIGUENOS</h3>
         <a class="fab fa-facebook-square" href="https://facebook.com/metaldryll-102781568249382" target="_BLANK"></a>
         <a class="fab fa-instagram" href="https://www.instagram.com/metaldryll/" target="_BLANK"></a>
         <a class="fab fa-tiktok" href="https://www.tiktok.com/@metaldryll" target="_BLANK"></a>

         <a id="correo" href="ventas@metaldryll.com" target="_BLANK">ventas@metaldryll.com</a>
         <a id="correo" href="informes@metaldryll.com" target="_BLANK">informes@metaldryll.com</a>
    </div>

    </footer>
</body>
</html>