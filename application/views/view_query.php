<html>
<head>
	<title>Modul 6 | Json</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
	<div id="content">
		<h2 id="form_head">Convert CodeIgniter Query to Json & Insert Into Database</h2>
	<div id="form_input">
	<?php
	foreach ($row as $value){
		$data = json_decode($value->mhs_data);
		foreach ($data as $rows => $result) {
			echo '<p><b>'.$rows.'</br><br>'.$result.'</p>';
		}
	}
	?>
</div>
</div>
</div>
</body>
</hmtl>