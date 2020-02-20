<?php
require_once 'Autoloader.php';
use Irfa\Flashmsg\Flash;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>Example Flash Message</title>
	</head>
	<body>
		<div class="container">
			
			<?= Flash::get('msg'); ?>
			
			<form action="examplepost.php" method="POST">
				<label> Name</label>
				<input type="text" class="form-control" placeholder="Please enter your name..." required="" name="name">
				<hr>
				<button class="btn btn-success">Send</button>
			</form>
		</div>
	</body>
</html>