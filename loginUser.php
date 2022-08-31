<?php
	include('inc/databaseconnection.php');

	session_start();
    $dbconn = new DbConnection();
    $conn = $dbconn->getDb();

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username= $_POST['username'];
		
		if (!preg_match("/^[!%#@a-zA-Z0-9_]*$/",$username)) {
			?>
			<script>
				window.alert("Username should not contain space and special characters!");
				window.history.back();
			</script>
			<?php
		}

		else {
			
			$fusername=$username;
			
			$password = $_POST["password"];
			$fpassword=md5($password);

			$query = $dbconn->querries("select * from `user` where username='$fusername' and password='$fpassword'");
			
			if(mysqli_num_rows($query)==0){
	?>
				<script>
				window.alert('Login Failed, Invalid Input!');
				window.history.back();
				</script>
	<?php

			}
			else {
				
				$row=mysqli_fetch_array($query);
				if ($row['access']==1){
					$_SESSION['id']=$row['userid'];
?>

				<script>
					window.alert('Login Success, Welcome <?php echo $row['username']; ?>!');
					window.location.href='admin/';
				</script>

<?php
				}

				elseif ($row['access']==2){
					$_SESSION['id']=$row['userid'];
?>

				<script>
					window.alert('Login Success, Welcome User!');
					window.location.href='user/';
				</script>

<?php
				}
			}		
		}
	}
?>