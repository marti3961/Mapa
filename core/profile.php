<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Perfil</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="welcome">Password : <i><?php echo $login_pass; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>