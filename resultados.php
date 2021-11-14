<?php 

	include('conexion/conexion.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultados.css">    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="css/excel/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="css/excel/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
   
    <title>Resultados</title>
</head>
<body>
    <section class="sct_table" >
        <h1 >Resultados de los test vocacionales</h1>
        <br></br>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" border="2px">
            <thead style="color: #c56f1f;">
                <th class="th_resultados">Apellidos</th>
                <th class="th_resultados">Nombres</th>
                <th class="th_resultados">Correo</th>
                <th class="th_resultados">DNI</th>
                <th class="th_resultados">Edad</th>
                <th class="th_resultados">Distrito</th>    
                <th class="th_resultados">Carrera</th>
                <th class="th_resultados">Resultado</th>
            </thead>
            <?php 
                include('php/mostrar_resultados.php')
            ?>
        </table>
    </section>
        
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="css/excel/jquery/jquery-3.3.1.min.js"></script>
    <script src="css/excel/popper/popper.min.js"></script>
    <script src="css/excel/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="css/excel/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="css/excel/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="css/excel/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="css/excel/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="css/excel/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="css/excel/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="css/excel/main.js"></script>  
    
</body>
</html>