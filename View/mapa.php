<?php
include('../core/session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Mapa Demo</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- begin template -->
<div class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header"><a class="navbar-brand" href="#">Test Mapa</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Mapa</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Usuarios</a></li>
        <li>&nbsp;</li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right:20px;" >
        <li class="dropdown">
          <a class="dropdown-toggle"  data-toggle="dropdown"><?php echo $login_session; ?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Perfil</a></li>
              <li><a href="../core/logout.php">Salir</a></li>
            </ul>
        </div>
      </li>
      </ul>
    </div>
</div>

<div id="map-canvas"></div>
<div class="container-fluid" id="main">
  <div class="row">
    <div class="col-xs-3" id="left">
      <div class="alert alert-success" style="padding-top:10 10 10 10 ; margin-top:10px;" >
        <strong>Usuarios</strong>
      </div>
      <!-- item list -->
      <hr>
      <ul class="media-list main-list">
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/90x90" alt="...">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
            <p class="by-author">By Jhon Doe</p>
          </div>
        </li>
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/90x90" alt="...">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
            <p class="by-author">By Jhon Doe</p>
          </div>
        </li>
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/90x90" alt="...">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
            <p class="by-author">By Jhon Doe</p>
          </div>
        </li>
      </ul>
    </div>
      <!-- /item list -->
  </div>
  <div class="col-xs-8"><!--map-canvas will be postioned here--></div>
    
  </div>
</div>
<!-- end template -->

	<!-- script references -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>