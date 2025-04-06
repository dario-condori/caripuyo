<!DOCTYPE html>
<html lang="en">

<head>

	<title>Caripuyo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="assets/images/auth/logo-caripuyo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4 class="mb-3 f-w-400">Ingreso</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            {{-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                            </div> --}}
                            <button class="btn btn-block btn-primary mb-4" type="submit">Acceder</button>
                            {{-- <hr>
                            <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> --}}
                            @if (count($errors)>0)
                                <div class="alert alert-danger" role="alert">
                                    Ingreso datos correctos de su usuario !!
                                </div>
                            @endif
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
