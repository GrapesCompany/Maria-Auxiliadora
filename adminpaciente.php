<?php
session_start();
if(isset($_SESSION['userPaciente'])){
  //$paciente=$_SESSION['userPaciente'];
}else
{
  header("Location: index.php?denegado=peligro");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MA Paciente</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/administrar.css" rel="stylesheet">
    <link href="css/estilosadministrar.css" rel="stylesheet">



  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-darkpr static-top">

      <a class="navbar-brand mr-1" href="#">Maria Auxiliadora - Paciente</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-arrows-alt-h fa-lg"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
           <div class="input-group-append">
                  
          </div>
        </div>
      </form>
      <div class="input-group-append">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">      
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="showModificarPaciente(this.value)" href="#">Mi cuenta</a>
             
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ccontrasena">Cambiar contraseña</a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar colorsec navbar-nav">
        <li class="nav-item">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-calendar-check"></i>
            <span>Citas médicas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" onclick="showAgregarCita(this.value)" href="#">Reservar cita</a>            
            <a class="dropdown-item" onclick="showlistarCitaAtendida(this.value)" href="#">Listar cita atendida</a>   
            <a class="dropdown-item" onclick="showlistarCitaPendiente(this.value)" href="#">Listar cita pendiente</a>                      
          </div>
        </li>        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Panel de Navegación</a>
            </li>
            <li class="breadcrumb-item active">Inicio</li>
          </ol>
          <hr>

          <!-- Pagina Principal -->        

        <!--Agregar Cita Medica--> 
        <div id="div_agregarcita" class="container"></div>

         <!--Listar Cita Atendida--> 
         <div id="div_listarcitapendientea" class="container"></div>

         <!--Listar Cita Pendiente--> 
         <div id="div_listarcitapendientep" class="container"></div>    

         <!--Modificar Datos Paciente--> 
         <div id="div_modificarpaciente" class="container"></div>    
 

        </div>
        

        <!-- Sticky Footer -->
        <footer class="sticky-footer colorf">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Seccion Salir-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar su sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
         
          <div class="modal-footer">
          <a class="btn btn-primary btn-ttc " href="./login/cerrar.php/?tipo=paciente">Aceptar</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Seccion Cambiar Contraseña-->
    <div class="modal fade" id="ccontrasena" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
         
           
           <div class="container">
           <form> <br>

            <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="ccactual" class="form-control" placeholder="Contraseña actual" required="required">
     <label for="ccactual">Contraseña actual</label>
   </div>
 </div> 
 <hr>

 <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="ccnueva" class="form-control" placeholder="Contraseña nueva" required="required">
     <label for="ccnueva">Contraseña nueva</label>
   </div>
 </div> 

 <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="ccverinueva" class="form-control" placeholder="Verificar la nueva contraseña" required="required">
     <label for="ccverinueva">Verificar la nueva contraseña</label>
   </div>
 </div> 
 
 

</form>
</div>
          <div class="modal-footer">
          <button class="btn btn-primary btn-ttc " type="button" data-dismiss="modal">Aplicar</button>
         
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    

    <!-- Javascript Paginas-->
    <script src="js/funciones.js"></script>
    <script src="js/validaciones.js"></script>
 
  </body>

</html>






