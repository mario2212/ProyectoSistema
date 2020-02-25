<?php 
session_start(); 

if(isset($_SESSION['login'])){
	if($_SESSION['login'] != 'true'){
		header('location: ../../');
	}
}else{
	header('location: ../');
}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>..:CONSURSA:..</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<script language="javascript" src="../js/jquery.js"></script>
<script language="javascript" src="../js/popper.min.js"></script>
<script language="javascript" src="../js/bootstrap.min.js"></script>
<script language="javascript" src="../js/funciones.js"></script>
<script language="javascript" src="js/funciones.js"></script>


</head>
<body>
<header id="header">
  <div class="logo pull-left"> <a href="#" id="inicio">INICIO</a> </div>
  <div class="header-content">
    <div class="pull-right clearfix">     
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['nombre'] ?>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <ul >
            <li>
              <a href="">
                <i class="fa fa-user"></i>
                Perfil
              </a>
            </li>
           <li>
             <a href="cambio_pass/" title="edit account">
               <i class="fa fa-cog"></i>
               Configuración
             </a>
           </li>
           <li class="last">
             <a href="../php/logout.php" >
               <i class="fa fa-close"></i>
               Salir
             </a>
           </li>
         </ul>         
        </div>
      </div> 
    </div>
  </div>
</header>
<div class="sidebar" id="menu" hidden="hidden">
  <?php include('php/menu_dinamic.php') ?>
</div>

<div class="page">
  <div class="container-fluid resultados mt-5">
    <img src="../img/consursa.png" width="100%">
  </div>
</div>


</body>
</html>