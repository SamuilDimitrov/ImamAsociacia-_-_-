<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>AIF-Registration</title>
	<style>
		body {
			background-image: url(images/reg_plant.png);
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: lightgreen;
		}
	</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<div class="container-fluid" style="margin-left: 10px; margin-top: 100px;	">
		<div class="row">
			<div class="col-lg-5 col-md-4 bg-transparent rounded border">
				<form method="post" action="def.php">
					<div class="form-group">
						<h1>Registration</h1>
						<input type="text" class="form-control mt-3 col-lg-12" name="usr_name" placeholder="Enter name.">
						<input type="password" class="form-control mt-5 col-lg-12" name="usr_pass" placeholder="Enter password.">
						<input type="text" class="form-control mt-5 col-lg-12" name="usr_email" placeholder="Enter E-mail.">
						<input type="submit" class="btn btn-primary mt-5">
					</div>
				</form>
			</div>
			<div class="offset-2 col-lg-5 col-md-4 bg-transparent border ">
				<p style="font-size: 30px;">
					That's the registration site in our page. The account is required to access all your devices.
					It's free to make and easy to use. 
				</p>
			</div>
		</div>
	</div>
  </body>
</html>