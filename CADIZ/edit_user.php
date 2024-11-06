<!doctype html>
<html lang "en">
<head>
	<title>Edit User Info</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="cadiz.css">

	
</head>
<body>
	<div id="constant">
		<?php include('header.php'); ?>
		<?php include('nav.php'); ?>
		<?php include('info-col.php'); ?>
		<div id='content'>
			<h2>Edit User Record</h2>
			<?php
					if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
						$id = $_POST['id'];
					}elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
						$id = $_POST['id'];
					} else {
						echo'<p class="error">This page has been accessed by mistake.</p>';
						include ('footer.php');
						exit();
					}
					require('mysqli_connect.php');
					if($_SERVER['REQUEST_METHOD'] == 'POST')
					$errors = array();
						//check kung may laman yung first name, last name, at emmail
						//textbox
					}
					if(empty($errors)){
					    $q = "UPDATE users SET fname='$fn' , lname='$ln', email='$e' WHERE user_id = '$id' LIMIT 1"; 
						$result = @mysqli_query($dbcon, $q);
						if(mysqli_affected_rows($dbcon) == 1){
							echo'<h3>Successful</h3>';
					}else{
					    echo'<h3>The user record could not be updated due to a system error</h3>';
						echo'<p>'.mysqli_error($dbcon).'</p>'; #not recommended

					}
					}else{
					    echo '<h3>Error!</h3>
                        <p class="error">The following error(s) occurred:</p>' #mamaya na to
						}
                $q = "SELECT fname, lname, email from users where user_id='$id'";
				$result = @mysqli_query($dbcon, $q);
				if(mysqli_num_rows($result) == 1){
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        echo '<form action="edit_user.php" method="post">
						<label for="fname">First Name:</label>
						<input type="text" id="fname" name="fname" size="30" maxlength="40"
							   value="'.$row['fname'].'">
					</p>
	
					<div class="form-group">
						<label for="lname">Last Name:</label>
						<input type="text" id="lname" name="lname" size="30" maxlength="40"
							   value="'.$row['lname'].'">
					</p>
	
					<div class="form-group">
						<label for="email">Email Address:</label>
						<input type="text" id="email" name="email" size="30" maxlength="50"
							   value="'.$row['email'].'">
					</p>
					<p></p><input type="submit" id="submit" name="submit" value="Edit">
					</p>
					<p><input type="hidden" name="id" value="'.$id.'">
					</p>
                        </form>
					';
				}else{
                    echo '<h2>Hindi kapa nalalagay men</h2>';
                }
				}
				mysqli_close($dbcon);
				include ('footer.php');       
			?>

			
	</div>
	<?php include('footer.php'); ?> 
</body>
</html>