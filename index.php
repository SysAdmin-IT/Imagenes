<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
setlocale(LC_TIME, 'es_ES');
$opt = ( isset($_GET["opt"]) )? $_GET["opt"] : "";
$fromSite = ( $_GET["fromSite"] and $_GET["fromSite"] == "1" ) ? 1 : 0;
//$inicioURL = ($fromSite) ? "http://www.suresultado.com/index2.php" : "index.php";
session_start();

if ($fromSite==0) {
	$_SESSION['fromSite2']=1;
}else{
	session_destroy();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>:::: Ordenes Medicas online ::::::</title>
	<!-- <link rel="stylesheet" href="../jquery-ui-1.10.4/themes/redmond/jquery-ui-1.10.4.custom.css">	-->
	<link rel="stylesheet" href="../jquery-ui-1.10.4/themes/smoothness/jquery-ui-1.10.4.custom.css">	
	<link rel="stylesheet" type="text/css" href="../css/autocomplete.css">
	<link rel="stylesheet" type="text/css" href="../css/recetas.css"/>
	
	<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../jquery-ui-1.10.4/ui/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/jquery.ui.autocomplete.html.js"></script>
	
	<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
	<script language="javascript">
		var arrProductos = [];
	</script>
</head>
<body>
	<div class="panel_top"><a href="index.php">
		<div style="float:left;width:30%;"><img src="../img/logo-LM-Labexpress.png" hspace="15" /></a></div>
		<div style="float:left;width:40%;"><center><img src="../img/LabExpress-2017.png" /></div>
<?php if( $fromSite ) { ?>
		<div style="float:right;"><a href="http://www.suresultado.com/old/index2.php"><img src="inicio.png" style="width:70px;" title="Inicio"/></a></div>
<?php } ?>
	</div>
	<!--<div class="titulos"><img src="../bullet_c.jpg" />&nbsp;&nbsp;Ordenes M&eacute;dicas online</div>-->
	<div id="cuerpo" >
	<?php 

	switch($opt) {
	case "a":
		$opcion = "recetasForm.php"; break;
	case "g":
			$opcion = "recetasGracias.php"; break;
	default:
		$opcion = "recetasForm.php";
	}

	//$opcion = "recetasForm.php";
	
	include( $opcion );
	?>
	</div>
	<div class="panel_inf">
		<?php 
		include_once("footer.php"); 
		?>
	</div>
</body>
</html>
