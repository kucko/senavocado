<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Calculadora de fertilizacion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <!-- Variables y valores que se obtienen -->
  <?php 

            $da= $_POST["da"];
            $prof= $_POST["prof"];
            $mo = $_POST["mo"];
            $p = $_POST["p"];
            $k = $_POST["k"];
            $ca = $_POST["ca"];
            $mg = $_POST["mg"];
            $s = $_POST["s"];
            $fe = $_POST["fe"];
            $mn = $_POST["mn"];
            $cu = $_POST["cu"];
            $zn = $_POST["zn"];
            $b = $_POST["b"];
            $ce = $_POST["ce"];
            $na = $_POST["na"];
           
            $rprof= $_POST["prof"];
            $rmo = $_POST["mo"]*.15*0.98*.2*50;
            $rp = $_POST["p"]*0.98*.2*22.9;
            $rk = $_POST["k"]*0.98*.2*4697.9;
            $rca = $_POST["ca"]*0.98*.2*2798.4;
            $rmg = $_POST["mg"]*0.98*.2*1989.7;
            $rs = $_POST["s"]*0.98*.2*10;
            $rfe = $_POST["fe"]*0.98*.2*10;
            $rmn = $_POST["mn"]*0.98*.2*10;
            $rcu = $_POST["cu"]*0.98*.2*10;
            $rzn = $_POST["zn"]*0.98*.2*10;
            $rb = $_POST["b"]*0.98*.2*10;
            $tm = $_POST["tm"];
            $ph = $_POST["ph"];
            $na = $_POST["na"];
            $rna = $_POST["na"]*.98*.2*310.5;
            

           
            if ($_POST["tm"] == "calido"){
                $rtm = 0.3;
            }elseif ($_POST["tm"] == "templado") {
                $rtm = 0.2;
            } elseif ($_POST["tm"] == "frio") {
               $rtm = 0.15;
            } 

            if ($_POST["ph"] <= "5.7"){
              $rph="Se recomienda encalar";
            }else{
              if($_POST["ph"] >="6.8"){
                $rph="Se recomienda no encalar y realizar riegos solo con agua para asi bajar el Ph";
              }else{
                $rph="Ph Ideal para cultivo de aguacate";
              }
            }
          
            if ($_POST["ce"] <= "2"){
                $rce = "Se encuentra en el rango";
            }else {
                $rce = "Fuera de rango";
            }
            
    ?>

</head>

<body> 

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
       
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="index.html"><span>Herramientas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Calculadora de fertilización</a></li>
              <li class="dropdown"><a href="calculadora.html"><span>Formatos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Global GAP</a></li>
                  <li><a href="#">Plantilla de costos</a></li>
                </ul>
              </li>
              
            </ul>
          </li>
         
          <li><a href="services.html">Videos</a></li>
          <li><a href="portfolio.html">Cartillas</a></li>
         
   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Ingreso datos calculadora ======= -->
    <div class="container">
        <div class="section-title" data-aos="fade-up"><br><br>
            <h2>Valores de los nutrientes en el suelo</h2>
            <p> Estos valores obtenidos del calculo realizado en base a los datos suministrados.</p>
          </div>

          <table class="table">
                <thead class="table-secondary">  
                    <tr>
                    <th scope="col">Variable</th>
                    <th scope="col">Dato tomado</th>
                    <th scope="col">Resultado</th>
                    <th scope="col">Unidades</th>
                    </tr>
                </thead>
            <tbody>

                <tr>
                    <th scope="row">Densidad aparente </th>
                    <td> <?php print($da); ?> </td>
                    <td><?php print($da); ?> </td>
                    <th scope="row"> g/g/cm^3 </th>
                </tr>
                
                <tr>
                    <th scope="row">Tasa de mineralización segun el clima </th>
                    <td><?php print($tm); ?> </td>
                    <td><?php print($rtm); ?> </td>
                    <th scope="row"> </th>
                </tr>
                <tr>
                    <th scope="row">Materia Organica % </th>
                    <td> <?php print($mo); ?> </td>
                    <td><?php print($rmo); ?> </td>
                    <th scope="row">Kg/ha </th>
                </tr>

                <tr>
                    <th scope="row">P ppm </th>
                    <td> <?php print($p); ?></td>
                    <td><?php print($rp); ?></td>
                    <th scope="row">Kg/ha </th>
                </tr>

                <th scope="row">K me/100 g </th>
                    <td><?php print($k); ?></td>
                    <td><div class="input-group mb-3" ><?php print($rk); ?></td>
                    <th scope="row">Kg/ha </th>
                </tr>
                <th scope="row">Ca me/100 g </th>
                    <td> <?php print($ca); ?></td>
                    <td><?php print($rca); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">Mg me/100 g </th>
                    <td> <?php print($mg); ?></td>
                    <td><?php print($rmg); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">S ppm </th>
                    <td> <?php print($s); ?></td>
                    <td><?php print($rs); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">fe ppm </th>
                    <td> <?php print($fe); ?></td>
                    <td> <?php print($rfe); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">Mn ppm</th>
                    <td> <?php print($mn); ?></td>
                    <td> <?php print($rmn); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">Cu ppm</th>
                    <td> <?php print($cu); ?></td>
                    <td> <?php print($rcu); ?></td>
                    <th scope="row">Kg/ha </th></div>
                    </tr>
                    <th scope="row">Zn ppm</th>
                    <td> <?php print($zn); ?></td>
                    <td> <?php print($rzn); ?> </td>
                    <th scope="row">Kg/ha </th>
                    </tr>
                    <th scope="row">CE dS/m</th>
                    <td> <?php print($ce); ?></td>
                    <td> <?php print($rce); ?></td>
                    <th scope="row">dS/m </th>
                    </tr>

                    <th scope="row">B dS/m</th>
                    <td> <?php print($b); ?></td>
                    <td><?php print($rb); ?></td>
                    <th scope="row">dS/m </th>
                    </tr>

                    <th scope="row">Ph </th>
                    <td> <?php print($ph); ?></td>
                    <td><?php print($rph); ?></td>
                    <th scope="row"> </th>
                    </tr>
                    <th scope="row">Na me/100 g</th>
                    <td> <?php print($na); ?></td>
                    <td><?php print($rna); ?></td>
                    <th scope="row">Kg/ha </th>
                    </tr>
            </tbody>
            </table>
        </div><br><br><br><br>
         

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>Boletin informativo</h4>
          <p>Registra tu correo electronico si deseas mantenerte actualizado acerca de nuestras actividades </p>
        </div>
        <div class="col-lg-6">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Herramientas</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Videos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Registro</a></li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Herramientas de interes</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Calculadora de fertilización</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Plantilla Global GAP</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Plantilla de costos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Datos metereoligicos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Cartillas</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contacto</h4>
          <p>
            A108 Adam Street <br>
            Rionegro Antioquia,<br>
            Colombia <br><br>
          
            <strong>Email:</strong> contacto@senavocado.com<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>Nuestras redes sociales</h3> 
          <p>Visita nuestras redes sociales y síguenos para estar siempre al día de nuestras actividades</p>
          <div class="social-links mt-3">
            <a href="https://www.youtube.com/channel/UCrHtg4UEofVeQV5loAVx8cg/featured" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    
    <div class="credits">
      
      Diseñado por Tecnoparque  <a href="https://gestionredtecnoparquecolombia.com.co/inicio/nodo-rionegro/">Nodo Rionegro</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>