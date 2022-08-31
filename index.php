<?php include('inc/databaseconnection.php'); ?>
<?php include('inc/header.php'); ?>

<?php
	session_start();
    $dbconn = new DbConnection();
    $conn = $dbconn->getDb();

	if (isset($_SESSION['id'])){
        $admin = "SELECT * FROM user where userid='".$_SESSION['id']."'";    
		
		$adminQuery = $dbconn->querries($admin);
		$row = mysqli_fetch_array($adminQuery);

		if ($row['access']==1){
			header('location:admin/');
		}
		else if($row['access']==2){
			header('location:user/');
		}
	}
?>
<body>
	<section class="text-center text-lg-start mt-5">
	<div class="container py-4">
		<div class="row g-0 align-items-center">
		<div class="col-lg-6 mb-5 mb-lg-0">
			<div class="card cascading-right" style="
				background: hsla(0, 0%, 100%, 0.55);
				backdrop-filter: blur(30px);
				">
			<div class="card-body p-5 shadow-5 text-center">
				<h2 class="fw-bold mb-5">Sign up now</h2>
				<form method="POST" action="loginUser.php">
					<div class="form-outline mb-4">
						<label class="form-label" for="username">username</label>
						<input type="text" id="username" name="username" class="form-control" />
					</div>

					<div class="form-outline mb-4">
						<label class="form-label" for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control"/>
					</div>

					<button type="submit" class="btn btn-primary btn-block mb-4">LOGIN</button>
					<button class="btn btn-sm font-weight-bold" type="button" data-toggle="modal" data-target="#registration"> Sign up</button>
						
				</form>
			</div>
			</div>
		</div>

		<div class="col-lg-6 mb-5 mb-lg-0">
			<img src="./upload/login_background.jpg" class="w-100 rounded-4 shadow-4 rounded"
			alt="" />
		</div>
		</div>
	</div>
	</section>

	<?php include('modal_registration.php'); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
