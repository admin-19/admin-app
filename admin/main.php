<html>

<head>
	<title></title>
	<link rel="stylesheet" href="src/css/bitnami.css">
	<link rel="stylesheet" href="src/css/bootstrap.min.css">
	<script type="text/javascript" src="src/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="src/js/admin.js"></script>
	<style>
		.container .no-margin {
			margin-top: 10px;
		}

		body {
			position: relative !important
		}

		.alerta {
			position: fixed !important;
			z-index: 4;
			margin-top: 0px !important;
			width: 100%;
		}

		.alerta {
			opacity: 1.0 !important;

		}

		.alerta:hover {
			opacity: 0.8 !important;
		}

		.alert {
			width: 85%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
			border-radius: 10px !important;
			text-align: center;
			animation-name: alerta !important;
			animation-duration: 1s !important;
			animation-fill-mode: forwards !important;
		}

		@keyframes alerta {
			from {
				top: 0px;
			}

			to {
				top: 14px;
			}
		}

		.list-group {
			z-index: 4;
		}

		.list-group-item {}
	</style>
</head>

<body>
	<div class="alerta" id="alerta">
		<!-- <div class="alert alert-warning alert-dismissible fade in show">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
		</div> -->
	</div>
	<nav class="navbar navbar-light bg-light">
		<a href="#" class="navbar-brand"></a>
		<form name="form_buscador" class="form-inline">
			<input id="inp_form_buscador" class="form-control mr-sm-2" type="text" placeholder="Google" aria-label="buscar">
			<button id="btn_form_buscador" class="btn btn-outline-success my-2 my-sm-0">buscar</button>
		</form>
	</nav>
	<div class="container">
		<div class="container no-margin">
			<div class="row">
				<div class="col-sm">
					<!-- <h3>Lista</h3> -->
					<div class="list-group">
						<?php
						$pasth = __DIR__;
						$ficheros1  = scandir($pasth);
						foreach ($ficheros1 as $x) {
							if (is_dir($x)) {
								if ("." == $x || ".." == $x || "src" == $x) {
								} else {
									print "<a href='{$x}' class='list-group-item list-group-item-action list-group-item-primary' draggable='true'>{$x}</a>";
								}
							}
						}
						$URL = $_SERVER['PHP_SELF']
						?>
					</div>
				</div>
				<div class="col-sm">
					<div class="mx-auto">
						<div class="jumbotron jumbotron-fluid">
							<div class="container">
								<h1>
									<p id="jumbotron-title">Crear Proyecto </p>
								</h1>
								<form name="central-form">
									<div class="form-group">
										<input type="text" id="central-form-inp" class="form-control" placeholder="nombre" required>
									</div>
									<div class="form-group">
										<div class="form-row align-items-center">
											<div class="col-auto my-1">
												<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
													<option selected value="Crear">Crear</option>
													<option value="Modificar">Modificar</option>
													<option value="Eliminar">Eliminar</option>
												</select>
											</div>
											<div class="col-auto my-1">
												<button id="central-form-btn" class="btn btn-primary" disabled>Crear</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-1">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
												<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="container text-center">
			<div class="row">
				<div class="col-sm">
					<button type="button" class="btn btn-primary">Crear</button>
				</div>
				<div class="col-sm">
					<button type="button" class="btn btn-warning">Editar</button>
				</div>
				<div class="col-sm">
					<button type="button" class="btn btn-danger">Borrar</button>
				</div>
			</div>
		</div> -->
	</div>
	<div class="myClass"></div>
</body>

</html>


<!--
// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
			// 	$uri = 'https://';
			// } else {
			// 	$uri = 'http://';
			// }
			// $uri .= $_SERVER['HTTP_HOST'];
			// header('Location: '.$uri.'/dashboard/');
			// exit;
-->
<!-- Something is wrong with the XAMPP installation :-( -->