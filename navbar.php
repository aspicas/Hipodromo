<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">HR</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hipodromo <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Pista</a></li>
					<li><a href="#">Paddock</a></li>
					<li><a href="#">Restaurantes</a></li>
					<li><a href="#">Historia</a></li>
				</ul>
			</li>
			<li><a href="#">Gaceta</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Carrera <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Horario</a></li>
			    <li><a href="#">Informacion</a></li>
			    <li><a href="carrera.php">Registrar</a></li>
			  </ul>
			</li>
			<li><a href="#">Taquilla <span class="sr-only">(current)</span></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">STUD <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">STUD</a></li>
					<li><a href="#">Propietarios</a></li>
					<li><a href="CStud.php">Crear stud</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ejemplar <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="Eejemplar.php">Registrar</a></li>
					<li><a href="#">Consultar</a></li>
					<li><a href="#">Modificar</a></li>
					<li><a href="DEjemplar.php">Eliminar</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Taquilla <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				    <li><a href="gradas.php">Gradas</a></li>
				    <li><a href="apuesta.php">Crear Apuestas</a></li>
			  	</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar Seccion <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li>  
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Usuario">
								<input type="text" class="form-control" placeholder="Contraseña">
							</div>
							<button type="submit" class="btn btn-default">Ingresar</button>
						</form>
					</li>
					<li><a href="#">Olvide contraseña</a></li>
					<li><a href="registro.php">Registrar</a></li>
				</ul>
			</li>
		</ul>
    </div>
  </div>
</nav>