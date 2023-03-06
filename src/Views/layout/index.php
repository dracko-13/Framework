<!DOCTYPE html>
	<html lang="es-mx">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="/dist/css/main.css">
			<link rel="icon" type="image/ico" href="/resources/tab-icon.ico">
			<title>{{ app_name }}</title>
		</head>
			<body>

				<nav class="navbar navbar-expand-lg navbar-expand-xl bg-body-tertiary mb-5">
					<div class="container-fluid">
						<a class="navbar-brand" href="/">
							<img src="/resources/logo.png" alt="logo" class="img-fluid" width="180" height="100">
						</a> <!-- END A -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button> <!-- END BUTTON -->
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="<?php ?>">
										{{ app_name }}
									</a> <!-- END A -->
								</li> <!-- END LI -->
								<li class="nav-item">
									<a class="nav-link" href="#">Facturación</a>
								</li> <!-- END LI -->
								<li class="nav-item">
									<a class="nav-link" href="#">Inventario</a>
								</li> <!-- END LI -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="bi bi-gear-wide-connected"></i>
									</a> <!-- END A -->
									<ul class="dropdown-menu">
										<li>
											<a class="dropdown-item" href="<?= site_url('signin') ?>">Ingresar</a>
										</li> <!-- END LI -->
										<li>
											<a class="dropdown-item" href="<?= site_url('signup') ?>">Registrate</a>
										</li> <!-- END LI -->
										<li>
											<hr class="dropdown-divider">
										</li> <!-- END LI -->
										<?php if(true): ?>
											<li>
												<a class="dropdown-item" href="<?php ?>">
													<i class="bi bi-box-arrow-in-left"></i> Cerrar sesión
												</a> <!-- END A -->
											</li> <!-- END LI -->
										<?php endif; ?>
									</ul> <!-- END DROPDOWN-MENU -->
								</li> <!-- END LI -->
							</ul> <!-- END UL -->
						</div> <!-- END DIV -->
					</div> <!-- END DIV -->
				</nav> <!-- END NAV -->
	
				{% block section %}
				{% endblock %}

				<div class="container p-2 mt-5">
					<div class="row">
						<div class="text-center col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<img src="/resources/logo.png" alt="logo" class="" width="180" height="100">
							<p>(+52) 777 123 4567</p>
							<div class="btn-group" role="group" aria-label="">
								<img src="/resources/svg/facebook.svg" alt="facebook" width="90" height="40">
								<img src="/resources/svg/instagram.svg" alt="instagram" width="90" height="40">
								<img src="/resources/svg/whatsapp.svg" alt="whatsapp" width="90" height="40">
							</div> <!-- END DIV -->
						</div> <!-- END COL -->
						<div class="text-center col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<ul class="list-unstyled">
								<li>Aviso de privacidad</li>
								<li>Terminos y condiciones</li>
								<li>Nosotros</li>
								<li>Tutoriales</li>
								<li>Contacto</li>
							</ul> <!-- END UL -->
						</div> <!-- END COL -->
						<div class="text-center col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<ul class="list-unstyled">
								<li>Nuestros productos</li>
								<li>Terminal de punto de venta</li>
								<li>Facturación</li>
								<li>Inventario</li>
							</ul> <!-- END UL -->
						</div> <!-- END COL -->
					</div> <!-- END ROW -->
					<hr> <!-- DIVIDER -->
					<p class="text-center">
						Integrapp S.A. de C.V. © Todos los derechos reservados.
					</p> <!-- END TEXT-CENTER -->
				</div> <!-- END CONTAINER-FLUID -->

				<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
				<script src="/dist/js/main.js"></script>

			</body>
	</html>
