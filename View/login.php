<?php
include('../core/loginAccesor.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: mapa.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login, geolocalizacion, entrar,  mas ">
    <meta name="author" content="Ing. Heriberto Martínez Ramírez">
    <link rel="icon" href="../../favicon.ico">
    <title>Entrar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
		var map;
		function initialize() {
		var mapOptions = {
		zoom: 8,
		center: new google.maps.LatLng(20.42, -99.84),
		disableDefaultUI: true
		};
		map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>
  <body>
    <div id='map-canvas'></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Bienvenido</h1>
					<div class="account-wall">
						<img class="profile-img" src="../images/login.png"  alt="">
						<form class="form-signin" action="" method="post">
							<input type="text" name="username" class="form-control" placeholder="Usuario" required autofocus>
							<input type="password" name="password" class="form-control" placeholder="Password" required>
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Entrar</button>
							<span><?php echo $error; ?></span>
						<a href="#" class="pull-right need-help">Necesita ayuda? </a><span class="clearfix"></span>
						</form>
					</div>
					<a href="#" class="text-center new-account">Crea una cuenta</a>
				</div>
			</div>
		</div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
