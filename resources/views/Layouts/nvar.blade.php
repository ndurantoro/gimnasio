<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
            <a class="navbar-brand" href="{{ url('/') }}" ><i class="fa fa-hand-rock-o"></i></i>KR<b> Boxing</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-home"></i><span>Inicio</span></a></li>
                        <li class="nav-item"><a href="alumno" class="nav-link"><i class="fa fa-users" aria-hidden="true"></i><span>Alumnos</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Registro asistencia</span></a></li>
			<li class="nav-item"><a href="mensualidad" class="nav-link"><i class="fa fa-calendar" aria-hidden="true"></i><span>Mensualidad</span></a></li>
                        <li class="nav-item"><a class="nav-link"></a></li>
                        <li><a href="https://www.google.cl/" class="nav-item"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar sesión</a></li>
		</ul>
	</div>
</nav>

@yield('content')