<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
      <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
      <style>
        .margen{
        margin-top:5%;
        }
        .titulo{ 
            text-align: center;
            margin-left: 15%;
            margin-right: 15%;
          }
          .imagenes{
              justify-content: center;
              text-align: center;
          }
    </style>
</head>
<body>
      <div class="container-fluid">
           <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['codigo_empleado'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <div class="row margen">
            <h1 class="titulo">Aquí podrá ver un breve análisis estadístico de las personas que acuden a estos recursos.</h1>
            <div class="col-4"></div>
            <div class="col-6" >
               
                <div class="imgagenes">
                <img src="imagenes/plot_edad_sexo.png" alt="mujeres y hombres por edad" width="60%">
                <img src="imagenes/plot_EC_asignado.png" alt="mujeres y hombres por edad" width="60%">
                <img src="imagenes/plot_EC.png" alt="mujeres y hombres por edad" width="60%">
                <img src="imagenes/plot_ocupacion_comedores.png" alt="mujeres y hombres por edad" width="60%">
                </div>
            </div>
            <div class="col-2"></div>
        </div>
      </div>
      <!--foooter-->
    <div class="row foot p-3 mt-5 pie">
        <div class="col"></div>
        <div class="col-6 text-center">

            <p>Sitio web realizado por <b>Tamara Alonso Rodrigo</b></p>
        </div>
        <div class="col"></div>
    </div>
       <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>