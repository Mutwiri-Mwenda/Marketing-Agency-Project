
<?php 
	include('functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>

<?php
$device_type ='Phone';
$device_model = ' Samsung s7 Edge';
$serial_no = 'DER675HUSM';
$issue_class = 'Hardware';
$solution = '12';
$repair_status = 'In Progress';
$client_contact = '07688986';
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Repair Record</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {
			background: #009879;
		}
		button[name=register_btn] {
			background: #009879;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Update Record</h2>
	</div>
	


	<form method="POST" action="update.php">
		<?php echo display_error(); ?>
		
        <input type="hidden" name = "id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Device Type</label>
			<input type="text" name="device_type" value="<?php echo $device_type; ?>">
		</div>
		<div class="input-group">
			<label>Device Model</label>
			<input type="text" name="device_model" value="<?php echo $device_model; ?>">
		</div>
		<div class="input-group">
			<label>Serial No.</label>
			<input type="text" name="serial_no" value="<?php echo $serial_no; ?>">
		</div> 
		<br>
		<div class="input-group">
			<label>Type of issue</label>
			<input type="text" name="serial_no" value="<?php echo $issue_class; ?>">
		</div>

		<div class="input-group">
			<label>Repair Status</label>
			<select name="repair_status" id="repair_status" >
				<option value="in_progress"> In Progress</option>
				<option value="completed">Completed</option>
			</select>
		</div> <br>
		<div class="input-group">
			<label>Client Contact</label>
			<input type="text" name="client_contact" <?php echo $client_contact; ?>>
		</div>
		<br>		
		<div class="input-group">
			<button type="submit" class="btn" name="update_btn" > Update Record </button>
		</div>
	</form>
	
    
</body>
</html>