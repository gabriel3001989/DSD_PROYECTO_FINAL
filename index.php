<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- Required meta tags -->
  <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sistema Furukawa</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

  <!-- otro -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <link rel='stylesheet' href='https://www.jqueryscript.net/demo/Themeable-jQuery-Tabs-Plugin-CardTabs/jquery.cardtabs.css'>
  <link href="css/stylos.css" rel="stylesheet" />

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logofurukawa.png" class="img-thumbnail" style="margin-top: -10px;margin-bottom: -10px;width: 90px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item desactive">
                <a class="nav-link" href="#">          
                  <div class="SubOption" page="pages/actualizarcliente.html" id="btnActualizarClienteMain">         
                    <i class="far fa-newspaper fa-2x"></i>
                    Actualizar Cliente<span class="sr-only">(current)</span>
                  </div>   
                </a>
              </li>              
              
              <li class="nav-item desactive">
                <a class="nav-link" href="#">
                  <div class="SubOption" page="pages/actualizarpedido.html" id="btnActualizarPedidoMain">
                    <i class="far fa-newspaper fa-2x"></i>
                    Actualizar Pedido<span class="sr-only">(current)</span>                  
                  </div>  
                </a>                           
              </li>

              <div class="SubOption" page="pages/generarcomprobante.html" id="btnGenerarComprobanteMain"> 
                <a class="nav-link" href="#">  
                  <i class="far fa-newspaper fa-2x"></i>
                  Generar Comprobante de Pago<span class="sr-only">(current)</span>
                </a>
              </div>

              <div class="SubOption" page="pages/generarguia.html" id="btnGenerarGuiaMain"> 
                  <a class="nav-link" href="#">
                    <i class="far fa-newspaper fa-2x"></i>
                    Generar Guía de Remisión<span class="sr-only">(current)</span>                      
                  </a>                

              </div>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <img src="img/epe.png" class="img img-thumbnail mr-3" style="width:60px;" id="btnLogo" />
                        <i class="fas fa-user"></i>
                        Usuario
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

            </ul>

        </div>
    </nav>

    <br><br>
    <div class="container-fluid mt-2" id="divContenido">

        <div class="row mt">
            <div class="col-sm-12 text-center">
                <img src="img/furukawafoto.jpg" style="opacity:1" class="img-thumbnail" />

            </div>
        </div>
    </div>

    <script src="js/functionsGenerals.js"></script>
	<script src="js/functions.js"></script>
    <script>
	
        $('#btnActualizarClienteMain').on('click', function () {
            $('div.SubOption').removeClass('option-active');
            $(this).addClass('option-active');
            $('#divContenido').load($(this).attr('page') + '?_c=' + GenerarStringAleatorio(15));
		
        });

        $('#btnLogo').on('click', function () {
            OpenDialogo('dialogoFotoGrupo');
        });
    </script>

    <script>
        $('#btnActualizarPedidoMain').on('click', function () {
            $('div.SubOption').removeClass('option-active');
            $(this).addClass('option-active');
            $('#divContenido').load($(this).attr('page') + '?_c=' + GenerarStringAleatorio(15));
        });

        $('#btnLogo').on('click', function () {
            OpenDialogo('dialogoFotoGrupo');
        });
    </script>

    <script>
        $('#btnGenerarComprobanteMain').on('click', function () {
            $('div.SubOption').removeClass('option-active');
            $(this).addClass('option-active');
            $('#divContenido').load($(this).attr('page') + '?_c=' + GenerarStringAleatorio(15));
        });

        $('#btnLogo').on('click', function () {
            OpenDialogo('dialogoFotoGrupo');
        });
    </script>

    <script>
        $('#btnGenerarGuiaMain').on('click', function () {
            $('div.SubOption').removeClass('option-active');
            $(this).addClass('option-active');
            $('#divContenido').load($(this).attr('page') + '?_c=' + GenerarStringAleatorio(15));
        });

        $('#btnLogo').on('click', function () {
            OpenDialogo('dialogoFotoGrupo');
        });
    </script>

</body>
</html>