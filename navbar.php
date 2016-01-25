<?php  
session_start();
?>
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
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Carrera <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="#">Horario</a></li>
			    <li><a href="#">Informacion</a></li>
			    <li><a href="carrera.php">Registrar</a></li>
			    <li><a href="#">Consultar</a></li>
				<li><a href="UCarrera.php">Modificar</a></li>
			    <li><a href="DCarrera.php">Borrar</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inscripcion<span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">			    
			    <li><a href="caej.php">Registrar</a></li>
			    <li><a href="UInscripcion.php">Modificar</a></li>
			    <li><a href="DInscripcion.php">Borrar</a></li>
			  </ul>
			</li>	
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">STUD <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">STUD</a></li>
					<li><a href="#">Propietarios</a></li>
					<li><a href="CStud.php">Crear stud</a></li>
					<li><a href="UStud.php">Modificar stud</a></li>
					<li><a href="DStud.php">Borrar stud</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ejemplar <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="Eejemplar.php">Registrar</a></li>
					<li><a href="#">Consultar</a></li>
					<li><a href="UEjemplar.php">Modificar</a></li>
					<li><a href="DEjemplar.php">Eliminar</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Apuesta <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">				    
				    <li><a href="apuesta.php">Crear</a></li>
				    <li><a href="UApuesta.php">Modificar</a></li>
				    <li><a href="DApuesta.php">Eliminar</a></li>
			  	</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Entrenador <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="UEntrenador.php">Modificar</a></li>	    				    
				    <li><a href="DEntrenador.php">Eliminar</a></li>
			  	</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jinete <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="UJinete.php">Modificar</a></li>
				    <li><a href="DJinete.php">Eliminar</a></li>
			  	</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Propietario <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="telefono.php">Telefono</a></li>
					<li><a href="UPropietario.php">Modificar</a></li>
				    <li><a href="Dpropietario.php">Eliminar</a></li>
			  	</ul>
			</li>
			<li class="dropdown">
				<a href="Croles.php">Roles</a>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<?php 
					if (isset($_SESSION['usuario']) == null) {
						echo "
						<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Iniciar Sesion <span class=\"caret\"></span></a>
						<ul class=\"dropdown-menu\" role=\"menu\">
							<li>  
								<form class=\"navbar-form navbar-left\" role=\"search\" method=\"post\" action=\"php/registrarUsuario.php\">
									<div class=\"form-group\">
										<input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" name=\"usuario\" required>
										<input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"clave\" required>
									</div>
									<button type=\"submit\" class=\"btn btn-default\" name=\"ingresar\">Ingresar</button>
								</form>
							</li>							
							<li><a href=\"registro.php\">Registrar</a></li>
						</ul>";
					}
					else
					{
						echo "
						<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Bienvenido, ".$_SESSION['usuario']." <span class=\"caret\"></span></a>
						<ul class=\"dropdown-menu\" role=\"menu\">
							<li>  
								<form class=\"navbar-form navbar-left\" role=\"search\" method=\"post\" action=\"php/registrarUsuario.php\">
									<button type=\"submit\" class=\"btn btn-default\" name=\"salir\">Salir</button>
								</form>
							</li>							
						</ul>";
					}
				?>
			</li>
		</ul>
    </div>
  </div>
</nav>