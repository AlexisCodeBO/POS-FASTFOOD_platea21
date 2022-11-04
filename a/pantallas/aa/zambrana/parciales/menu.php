<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Tienda de Equitacion</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="listaPaquetes.php">Reservas</a></li>
						<li><a href="#">Nosotros</a></li>						
					</ul>
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="formSitio.php">Insertar</a></li>
								<li><a href="#">Modificar</a></li>
								<li><a href="#">Eliminar</a></li>								
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="formUsuario.php">Insertar</a></li>
								<li><a href="listaPromociones.php">Listado de Usuarios</a></li >								
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
						


						<a data-toggle="modal" href='#registro-id'><span class="glyphicon glyphicon-log-in"></span> Registrese</a>
						<div class="modal fade" id="registro-id">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center">Registro de Usuario</h4>
									</div>
									<div class="modal-body">
										<form action="" method="POST" role="form" id="fpaquete">
	
			
			<div class="form-group">
				<label for="ci">Numero de carnet</label>
				<input type="text" class="form-control" id="ci" name="ci" placeholder="Numero de carnet">
			</div>
			
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="apPat">Apellido Paterno</label>
				<input type="text" class="form-control" id="apPat" name="apPat" placeholder="Apellido Paterno">
			</div>
			<div class="form-group">
				<label for="apMat">Apellido Materno</label>
				<input type="text" class="form-control" id="apMat" name="apMat" placeholder="Apellido Materno">
			</div>
			<div class="form-group">
				<label for="celular">Celular</label>
				<input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
			</div>
			<div class="form-group">
				<label for="correo">Email</label>
				<input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"  placeholder="Password">
			</div>				
												
			<button type="submit" class="btn btn-primary" id="btn">Guardar</button>
			
		</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>										
									</div>
								</div>
							</div>
						</div>


						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span>Login<b class="caret"></b></a>
							<!-- <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul> -->
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>