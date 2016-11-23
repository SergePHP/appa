<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['date'])){
        session_start();
        $_SESSION['date'] = date_parse_from_format("d-m-Y", $_POST['date']);
        header("Location: appa.php");
        exit;
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Simple Tigra Calendar</title>

	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<!-- add class="tcal" to your input field -->
		<div><input type="text" name="date" class="tcal" value="" /></div>
                <button type="submit">Submit</button>
	</form>
</body>
</html>
