<html>
<head>
	<title> MODUL 7 | JSON</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
	<div id="content">
		<h2 id="form_head">Convert CodeIgniter Query to Json & Insert Into Database</h2>
	<div id="form_input">
		<table>
		<tr>
			<td>
				<?php echo form_open('c_array/data_submitted');
				echo form_label('Student Name');
				    $data_name = array(
				        'name' => 'mhs_name',
				        'id' => 'emp_name_id',
				        'class'=>'input_box',
				        'placeholder'=>'Please Enter name',
				        'required'=>'required',
				    );?>
				</td>
				<td>
				    <?php echo form_input($data_name);?>
				</td>
		</tr>
				
		<tr>
			<td>			
				<?php 
				echo form_label('Student Email id');
				    $data_email = array(
				        'type'=>'email',
				        'name' => 'mhs_email',
				        'id' => 'e_email_id',
				        'class'=>'input_box',
				        'placeholder'=>'Please Enter Email',
				        'required'=>'required',
				    ); ?>
			</td>
			<td>
				   <?php echo form_input($data_email);				
				?>
			</td>
		<td>
				</tr>
		
		<tr>
			<td>
				<?php 
				echo form_label('Address');
				echo "<div class='textarea_input'>";
				    $data_textarea= array(
				        'name' => 'address',
				        'rows' => '5',
				        'cols'=>'28',
				        'placeholder'=>'Address...',
				        'required'=>'required',
				    ); ?>
			</td>
			<td>
				    <?php echo form_textarea($data_textarea);?>
			</td>
		</tr>
				
		<tr>
			<td>
				<?php 
				echo form_label('Class'); ?>
			</td>
				<?php echo "<div class='textarea_input'>";
				    $data_gender= array(
				        'TI-40-01' => 'TI_40-01',
				        'TI-40-02' => 'TI_40-02',
				        'TI-40-03' => 'TI_40-03',
				        'TI-40-04' => 'TI_40-04',
				        'TI-40-05' => 'TI_40-05',
				        'TI-40-06' => 'TI_40-06',
				        'TI-40-07' => 'TI_40-07',
				        'TI-40-08' => 'TI_40-08',
				        'TI-40-09' => 'TI_40-09',
				        'TI-40-10' => 'TI_40-10',
				        'TI-40-11' => 'TI_40-11',
				        'TI-40-12' => 'TI_40-12',
				    ); ?>
			<td>
				 <?php echo form_dropdown('select', $data_gender, 'TI-40-01', "class='dropdown_box'");	?>
			</td>
				
		</tr>
		</table>
</div>
<div id="form_button">
	<?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
</div>
</div>
	<?php echo form_close();?>
</div>
	<?php 
	if (isset($result_msg)){
	    echo "<div id='res_msg'>";
	    echo $result_msg;
	    echo "</div>";
	}
	?>
</body>
</html>