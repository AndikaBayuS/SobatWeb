<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="" method="post">

					Username
					<div class="form-grup">
						<input class="form-control" type="text" name="username">
					</div><br>
					Email
					<div class="form-grup">
						<input class="form-control" type="email" name="email">
					</div><br>
					Password
					<div class="form-grup">
						<input class="form-control" type="password" name="password">

					</div><br>
					Retype Password
					<div class="form-grup">
						<input class="form-control" type="password" name="retypepassword">
					</div><br>
					Level
					<div class="form-grup">
						<select class="form-control" name="level">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div></form><br>
					<div class="form-grup">
						<input class="btn btn-primary" type="submit" name="kirim">
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
</body>
</html>