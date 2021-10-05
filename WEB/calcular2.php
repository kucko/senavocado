<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fertilizacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

            if ($_POST["ph"] == "6.5"){
                $rph = 6.5;
            }elseif ($_POST["ph"] == "6.6") {
                $rph = 6.6;
            }elseif ($_POST["ph"] == "6.7") {
                $rph = 6.7;
            }elseif ($_POST["ph"] == "6.8") {
                $rph = 6.8;
            }elseif ($_POST["ph"] == "6.9") {
                $rph = 6.9;
            }elseif ($_POST["ph"] == "7") {
                $rph = 7;
            }elseif ($_POST["ph"] == "7.1") {
                $rph = 7.1;
            }elseif ($_POST["ph"] == "7.2") {
                $rph = 7.2;
            }elseif ($_POST["ph"] == "7.3") {
                $rph = 7.3;
            }elseif ($_POST["ph"] == "7.4") {
                $rph = 7.4;
            }elseif ($_POST["ph"] == "7.5") {
                $rph = 7.5;
            }
          
            if ($_POST["ce"] <= "1"){
                $rce = "Se encuentra en el rango";
            }else {
                $rce = "Fuera de rango";
            }
            
    ?>

    
</head>
<body>
  
    <div class="container">
   
        <div class="row">
            <div class="column-responsive column-80">
                <div class="calculadoras form content">
                    <form method ="post" action="calcular.php">
                    
                <table class="table align-middle table-borderless text-center">
                <thead class="table-secondary table-success text-white">  
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
                    <td><div class="input-group mb-3 " align="center"> <?php print($da); ?> </td></div>
                    <td><div class="input-group mb-3 text-center" ><?php print($da); ?> </td></div>
                    <div class="p-2 bd-highlight text-center"><th scope="row"> g/g/cm^3 </th></div></td> 
                    </tr>

                    <tr>
                    <th scope="row">Profundiad </th>
                    <td><div class="input-group mb-3"><?php print($prof); ?> </td></div>
                    <td><div class="input-group mb-3" ><?php print($prof); ?> </td></div>
                    <div class="p-2 bd-highlight"><th scope="row"> mt</th></div></td> 
                    </tr>

                    <tr>
                    <th scope="row">Tasa de mineralización segun el clima </th>
                    <td><div class="input-group mb-3"><?php print($tm); ?> </td></div>
                    <td><div class="input-group mb-3" ><?php print($rtm); ?> </td></div>
                    <div class="p-2 bd-highlight"><th scope="row"> </th></div></td> 
                    </tr>

                    <tr>
                    <th scope="row">Materia Organica % </th>
                    <td><div class="input-group mb-3"> <?php print($mo); ?> </td></div>
                    <td><div class="input-group mb-3" ><?php print($rmo); ?> </td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <tr>
                    <th scope="row">P ppm </th>
                    <td><div class="input-group mb-3"> <?php print($p); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rp); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <tr>
                    <th scope="row">K me/100 g </th>
                    <td><div class="input-group mb-3"> <?php print($k); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rk); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">Ca me/100 g </th>
                    <td><div class="input-group mb-3"> <?php print($ca); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rca); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">Mg me/100 g </th>
                    <td><div class="input-group mb-3"> <?php print($mg); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rmg); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">S ppm </th>
                    <td><div class="input-group mb-3"> <?php print($s); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rs); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">fe ppm </th>
                    <td><div class="input-group mb-3"> <?php print($fe); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rfe); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">Mn ppm</th>
                    <td><div class="input-group mb-3"> <?php print($mn); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rmn); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">Cu ppm</th>
                    <td><div class="input-group mb-3"> <?php print($cu); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rcu); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">Zn ppm</th>
                    <td><div class="input-group mb-3"> <?php print($zn); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rzn); ?> </td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                    <th scope="row">CE dS/m</th>
                    <td><div class="input-group mb-3"> <?php print($ce); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rce); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">dS/m </th></div></td> 
                    </tr>

                    <th scope="row">B dS/m</th>
                    <td><div class="input-group mb-3"> <?php print($b); ?></td></div>
                    <td><div class="input-group mb-3" > <?php print($rb); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">dS/m </th></div></td> 
                    </tr>

                    <th scope="row">Ph dS/m</th>
                    <td><div class="input-group mb-3"> <?php print($ph); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rph); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row"> </th></div></td> 
                    </tr>
                    <th scope="row">Na me/100 g</th>
                    <td><div class="input-group mb-3"> <?php print($na); ?></td></div>
                    <td><div class="input-group mb-3" ><?php print($rna); ?></td></div>
                    <div class="p-2 bd-highlight"><th scope="row">Kg/ha </th></div></td> 
                    </tr>
                </tbody>
            </table>
               
                </form>
                </div>
            </div>
        </div>   
    </div>  
</body>