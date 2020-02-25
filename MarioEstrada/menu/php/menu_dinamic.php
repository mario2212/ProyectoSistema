<?php

function root_path(){ 
	$this_directory = dirname(__FILE__); 
	$archivos = scandir($this_directory); 
	$atras = ""; 
	$cuenta = 0; 
	while (true){ 
		foreach($archivos as $actual){ 
			if ($actual == "ruta_actual.php"){ 
				if ($cuenta == 0) 
				return "./"; 
				return $atras; 
			} 
		} 
		$cuenta++; 
		$atras = $atras . "../"; 
		$archivos = scandir($atras); 
	} 
}  

$ruta = root_path();

if(isset($_SESSION['USUARIOS'])){
	$usuarios = '';
}else{
	$usuarios = 'hidden';
}

if(isset($_SESSION['EMPRESA'])){
	$empresa = '';
}else{
	$empresa = 'hidden';
}

if(isset($_SESSION['PROVEEDORES'])){
	$proveedores = '';
}else{
	$proveedores = 'hidden';
}

if(isset($_SESSION['CUENTAS BANCARIAS'])){
	$cuentabancaria = '';
}else{
	$cuentabancaria = 'hidden';
}

if(isset($_SESSION['INGRESOS BANCO'])){
	$ingresosbanco = '';
}else{
	$ingresosbanco = 'hidden';
}

if(isset($_SESSION['REPORTE BANCO'])){
	$reportebanco = '';
}else{
	$reportebanco = 'hidden';
}

if(isset($_SESSION['REGLONES'])){
	$reglones = '';
}else{
	$reglones = 'hidden';
}

if(isset($_SESSION['EDITAR RENGLON'])){
	$actualizareglones = '';
}else{
	$actualizareglones = 'hidden';
}

if(isset($_SESSION['PROYECTOS'])){
	$proyectos = '';
}else{
	$proyectos = 'hidden';
}

if(isset($_SESSION['CIERRA PROYECTO'])){
	$cierraproyecto = '';
}else{
	$cierraproyecto='hidden';
}

if(isset($_SESSION['HISTORICO PROYECTOS'])){
	$historicoproyectos = '';
}else{
	$historicoproyectos = 'hidden';
}

if(isset($_SESSION['CREACION REQUERIMIENTO'])){
	$creacionrequerimiento = '';
}else{
	$creacionrequerimiento = 'hidden';
}

if(isset($_SESSION['AUTORIZA REQUERIMIENTO'])){
	$autorizarequerimiento = '';
}else{
	$autorizarequerimiento = 'hidden';
}

if(isset($_SESSION['ASIGNACION PAGO'])){
	$asignapagorequerimiento = '';
}else{
	$asignapagorequerimiento = 'hidden';
}

if(isset($_SESSION['REPORTE REQUERIMIENTO'])){
	$reprequerimiento = '';
}else{
	$reprequerimiento = 'hidden';
}

if(isset($_SESSION['REPORTE PROYECTO'])){
	$repproyecto = '';
}else{
	$repproyecto = 'hidden';
}



echo '<ul>
        <li class="usuarios">
		  <a href="#" class="submenu-toggle usuarios">
			<i class="fa fa-user"></i>
			 <span>Usuarios</span>
		  </a>
		  <ul class="nav submenu">
			<li '.$usuarios.'><a href="'.$ruta.'menu/usuarios/">Usuarios</a></li>
		  </ul>
		</li>
		<li class="catalogo">
		  <a href="#" class="submenu-toggle catalogo">
			<i class="fa fa-list-alt"></i>
			 <span>Catalogo Clientes</span>
		  </a>
		  <ul class="nav submenu">
			<li '.$empresa.'><a href="'.$ruta.'menu/c_empresa/">Empresas</a></li>
			<li '.$proveedores.'><a href="'.$ruta.'menu/c_proveedor/">Proveedores</a></li>
		  </ul>
		</li>
		<li class="bancos">
		  <a href="#" class="submenu-toggle bancos">
			<i class="fa fa-money"></i>
			 <span>Bancos</span>
		  </a>
		  <ul class="nav submenu">			
			<li '.$cuentabancaria.'><a href="'.$ruta.'menu/c_cuentabancaria/">Cuentas Bancarias</a></li>
			<li '.$ingresosbanco.'><a href="'.$ruta.'menu/ingreso_fondo_banco/">Ingresos Bancarios</a></li>
			<li '.$reportebanco.'><a href="'.$ruta.'menu/reporte_bancario/">Reporte Bancario</a></li>
		  </ul>
		</li>
		<li class="reglones">
		  <a href="#" class="submenu-toggle reglones">
			<i class="fa fa-list"></i>
			 <span>Reglones</span>
		  </a>
		  <ul class="nav submenu">			
			<li '.$reglones.'><a href="'.$ruta.'menu/c_reglon/">Reglones</a></li>
                        <li '.$actualizareglones.'><a href="'.$ruta.'menu/editar_renglon/">Editar Reglones</a></li>
		  </ul>
		</li>
		<li class="proyecto">
		  <a href="#" class="submenu-toggle proyecto">
			<i class="fa fa-building"></i>
			 <span>Proyecto</span>
		  </a>
		  <ul class="nav submenu">
			<li '.$proyectos.'><a href="'.$ruta.'menu/proyecto/">Creacion Proyecto</a></li>
			<li '.$cierraproyecto.'><a href="'.$ruta.'menu/cierra_proyecto">Cerrar Proyecto</a></li>
			<li '.$historicoproyectos.'><a href="'.$ruta.'menu/historico_proyecto/">Historico Proyecto</a></li>
		  </ul>
		</li>
		<li class="requerimiento">
		  <a href="#" class="submenu-toggle requerimiento">
			<i class="fa fa-list-alt"></i>
			 <span>Requerimiento</span>
		  </a>
		  <ul class="nav submenu">
			<li '.$creacionrequerimiento.'><a href="'.$ruta.'menu/requerimiento/">Creacion Requerimiento</a></li>
			<li '.$autorizarequerimiento.'><a href="'.$ruta.'menu/valida_requerimiento/">Autoriza Requerimiento</a></li>
			<li '.$asignapagorequerimiento.'><a href="'.$ruta.'menu/asigna_pago_requerimiento/">Asigna Pago Requerimiento</a></li>
		  </ul>
		</li>
		<li class="reporte">
		  <a href="#" class="submenu-toggle reporte">
			<i class="fa fa-clipboard"></i>
			 <span>Reporte</span>
		  </a>
		  <ul class="nav submenu">
			<li '.$reprequerimiento.'><a href="'.$ruta.'menu/rep_requerimiento/">Reporte Requerimiento</a></li>
			<li '.$repproyecto.'><a href="'.$ruta.'menu/rep_proyecto/">Reporte Proyecto</a></li>
		  </ul>
		</li>
	  </ul>';

?>