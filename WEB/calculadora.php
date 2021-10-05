<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fertilizacion</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    

    
</head>
<body>
   
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="#">
                  <img src="img/iot.svg" alt="" width="120" height="60" class="d-inline-block align-text-top">
                </a>
                <ul class="nav nav-tabs $orange ">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Graficas</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="#">Temperatura</a></li>
                        <li><a class="dropdown-item" href="#">Humedad</a></li>
                        <li><a class="dropdown-item" href="#">Humedad del suelo</a></li>
                        <li><a class="dropdown-item" href="#">Velocidad del viento</a></li>
                        <li><a class="dropdown-item" href="#">Dias de lluvia</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Acerca de</a></li>
                </ul>
            </nav>
    
    
      
        <div class="row">
            <div class="column-responsive column-80">
                <div class="calculadoras form content">
                    <form method ="post" action="calcular.php" ><br><br>
                    
                <table class="table align-middle table-borderless text-center">
                <thead class="table-secondary table-success text-white">  
                    <tr>
                    <th scope="col">Variable</th>
                    <th scope="col">Dato tomado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th scope="row">Densidad Aparente (g/cm^3)</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="da" type="number" step="any" required placeholder="Ingresa valor Densidad Aparente" aria-label="default input example" ></td></div>
                    </tr>


                    <tr>
                    <th scope="row">Profundidad [mt]</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="prof" type="number" step="any"  required  placeholder="Ingresa valor Materia organica" aria-label="default input example"></td></div>
                    </tr>
                    <tr>
                    <th scope="row">Clima</th>
                    <td><div class="input-group mb-3"> 
                            <select class="form-select form-select-sm", name="tm" required aria-label=".form-select-sm example">
                                <option selected>Selecciona el tipo de clima</option>
                                <option value="calido">Calido mayor a 24 °c </option>
                                <option value="templado">Templado entre 17 a 24°c </option>
                                <option value="frio">Frio menor a 17°c </option>
                            </select><br>
                    </tr>

                    <tr>
                    <th scope="row">Materia Organica % </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="mo" type="number" step="any"  required  placeholder="Ingresa valor Materia organica" aria-label="default input example"></td></div>
                   
                    </tr>
                    <tr>
                    <th scope="row">P ppm </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="p" type="number" step="any"  required  placeholder="Ingresar valor P ppm" aria-label="default input example"></td></div>
                   
                    </tr>
                    <tr>
                    <th scope="row">K me/100 g </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="k" type="number" step="any"  required  placeholder="Ingresar valor K me/100 g" aria-label="default input example"></td></div>
                   
                    </tr>
                    <th scope="row">Ca me/100 g </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="ca" type="number" step="any"  required  placeholder="Ingresar valor Ca me/100 g" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row">Mg me/100 g </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="mg" type="number" step="any"  required  placeholder="Ingresar valor Mg me/100 g" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row">S ppm </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="s" type="number" step="any"  required  placeholder="Ingresar valor S ppm" aria-label="default input example"></td></div>
                  
                    </tr>
                    <th scope="row">fe ppm </th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="fe" type="number" step="any"  required  placeholder="Ingresar valor fe ppm" aria-label="default input example"></td></div>
                   
                    </tr>
                    <th scope="row">Mn ppm</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="mn" type="number" step="any"  required  placeholder="Ingresar valor Mn ppm" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row">Cu ppm</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="cu" type="number" step="any"  required  placeholder="Ingresar valor Cu ppm" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row">Zn ppm</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="zn" type="number" step="any"  required  placeholder="Ingresar valor Zn ppm" aria-label="default input example"></td></div>
                    
                    </tr>

                    </tr>
                    <th scope="row">B ppm</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="b" type="number" step="any"  required  placeholder="Ingresar valor B ppm" aria-label="default input example"></td></div>
                    
                    </tr>

                    <th scope="row">CE dS/m</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="ce" type="number" step="any"  required  placeholder="Ingresar valor CE dS/m" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row">Ph dS/m</th>
                    <td><div class="input-group mb-3">
                            <select class="form-select form-select-sm", name="ph" step="any" required aria-label=".form-select-sm example">
                                <option selected>Selecciona el Valor de PH</option>
                                <option value="6.5">6.5</option>
                                <option value="6.6">6.6</option>
                                <option value="6.7">6.7</option>
                                <option value="6.8">6.8</option>
                                <option value="6.9">6.9</option>
                                <option value="7">7</option>
                                <option value="7.1">7.1</option>
                                <option value="7.2">7.2</option>
                                <option value="7.3">7.3</option>
                                <option value="7.4">7.4</option>
                                <option value="7.5">7.5</option>
                            </select><br/>
                    </tr>
                    <th scope="row">Na (Valor inferior a 1)</th>
                    <td><div class="input-group mb-3"> <input class="form-control" name="na" type="number" step="any"  required placeholder="Ingresar valor Ph dS/m" aria-label="default input example"></td></div>
                    
                    </tr>
                    <th scope="row"></th>

                    
                    <div class="d-grid gap-2"><th colspan="2">  <button class="btn btn-primary" type="summit" name="calcular">Calcular</button></th></div></td> 
                    </tr>

                    </tbody>
                   
                </table>
               
            </form>
                </div>
            </div>
        </div>   
        </div>  

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/jsb/ootstrap.min.js"></script>
</body>
</html>








    