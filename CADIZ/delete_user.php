<!doctype html>
<html lang="en">
<head>
	<title>Deleting User</title>
	<meta charset = "utf-8" />
	<link rel="stylesheet" type="text/css" href="cadiz.css" />
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <?php include('info-col.php'); ?>
		<div id='content'>
			<h2 style="color:red; margin-left:800px;">Deleting Record</h2>
			<?php
				# checking for valid id numbers
			    if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
					$id = $_GET['id'];
				}elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
					$id = $_POST['id'];
                } else{
					echo'<p class ="error">This page has been accessed by mistake.</p>';
					include('footer.php');
					exit();
				}
					
				
				require('mysqli_connect.php');
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				    if($_POST['sure'] == 'Yes') {
						$q = "DELETE FROM users WHERE user_id=$id";
						$result = @mysqli_query($dbcon, $q);
						if(mysqli_affected_rows($dbcon) == 1){
						    echo '<h3>The user has been deleted.</h3>';
						}else{
							echo '<h3>The system cannot delete the user. :</h3>';
						}
					}else{
						echo'<h3>The record was not deleted.</h3>';
					}
				}else{
					$q = "SELECT CONCAT(fname, '', lname) from users where user_id = $id";
				    $result = @mysqli_query($dbcon, $q);
					if(mysqli_affected_rows($dbcon) == 1){
						$row = mysqli_fetch_array($result, MYSQLI_NUM);
						echo"<h3 style ='margin-left:650px;'>Are you sure you want to permanently delete $row[0]?</h3>";
						echo '
						<form style ="margin-left:860px;" action = "delete_user.php" method ="post">
						<input id="submit-yes" type = "submit" name = "sure" value = "yes">
						<input id="submit-no" type = "submit" name = "sure" value = "No">
						<input type="hidden" name="id" value="'.$id.'">
						</form>
							';
                    }else{
					    echo 'User not found.';
					}
				}
				mysqli_close($dbcon);
				include('footer.php');
			?>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>

				

			
		