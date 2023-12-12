<?php
	// including our connection to db
	require './inc/database.php';
//variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];

//validating  inputs
	$data = true;
	require './inc/header.php';
	if(empty($first_name)){
		echo '<p>First name required</p>';
		$data = false;
	}
	if(empty($last_name)){
	echo '<p>Last name required</p>';
	$data = false;
	}
	if(empty($username)){
	echo '<p>Username required</p>';
	$data = false;
	}
	if((empty($password)) || ($password != $confirm)){
		echo '<p>Password is invalid</p>';
	}
	// saving or not saving the data
	if($data){
		$password = hash('sha512', $password);
		//set up our SQL
		$sql = "INSERT INTO assignment (first_name, last_name, username, password) VALUES ('$first_name','$last_name','$username',
		'$password');";
		$conn->exec($sql);
		echo '<section class="success-row" ';
		echo ' <div> ';
		echo ' <h3>Account Created</h3> ';
		echo ' </div> ';
		echo ' </section> ';
	// disconnect
		$conn = null;
	}
	?>
	<section class="row success-back-row">
		<div>
			<p>All done, let's move on to the next step by sign in to your account!</p>
			<a href="signin.php" class="btn btn-primary">Sign In</a>
		</div>
	</section>
<?php require './inc/footer.php'; ?>
