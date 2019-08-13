<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto-House</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../public/img/icon-circle-28.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="login/log" method="POST">
					<span class="login100-form-title">
						Moto House
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" id="username" name="username" type="text" required="required" placeholder="User" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" id="password" name="password" placeholder="Password" type="password" required="required" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
          <button  class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						</span>
						<a class="txt2" href="#">
						Sin Accesso? manda un correo a alejandro_romero_aldrete@hotmail.com
						</a>
					</div>


				</form>
				<form class="login100-form validate-form" action="login/log" method="POST">
		<input id="username" name="username" type="hidden" value="visitante" />
		<input id="password" name="password" type="hidden" value="visitante"/>
					<div class="text-center p-t-136">
						<a href="#" class="container-login100-form-btn">
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"> <button class="login100-form-btn"  type="submit" name="submit"  style=" padding-top: -50px;">Acceder como Visitante</button></i>
						</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../../public/js/main.js"></script>

</body>
</html>