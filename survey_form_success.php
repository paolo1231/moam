<?php require "sessions.php";
require "survey_form/survey_formprocess.php";
?>

<!doctype html>
<html><head><meta charset="utf-8">
<title>Meals on a Mission</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>  
    <div id="success_box" align="center">
		<h1 align="center">Survey Information Status</h1>    	
    	<p align="center"><?php echo $status; ?></p>
        <p align="center">You may now close this popup by clicking anywhere outside this box.</p>
    </div>
</body>
</html>