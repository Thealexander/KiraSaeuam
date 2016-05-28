<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="Navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="navbar-brand" href="#">MaKiraSAE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			  
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this-> Html ->link('Listado de estudiantes', array('controller' => 'estudiantes', 'action' => 'index'))?></li>
				
                <li><?php echo $this-> Html->link('Registrar Nuevo Estudiante', array('controller' => 'estudiantes', 'action' => 'add'))?></li>

              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this-> Html ->link('Listado de Profesores', array('controller' => 'profesores', 'action' => 'index'))?></li>
				
                <li><?php echo $this-> Html->link('Registrar Profesor', array('controller' => 'profesores', 'action' => 'add'))?></li>

              </ul>
            </li>
				<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this-> Html ->link('Aulas', array('controller' => 'aulas', 'action' => 'index'))?></li>
                <li><?php echo $this-> Html->link('Tutores', array('controller' => 'tutores', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Personal', array('controller' => 'personal', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Registro de Notas', array('controller' => 'notas', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Edificios', array('controller' => 'edificios', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html ->link('Aulas', array('controller' => 'aulas', 'action' => 'index'))?></li>
                <li><?php echo $this-> Html->link('Registro de Clases', array('controller' => 'clases', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Manejo de Carreras', array('controller' => 'carreras', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Manejo de Cursos Libres', array('controller' => 'cursos', 'action' => 'index'))?></li>
				<li><?php echo $this-> Html->link('Administracion de Turnos', array('controller' => 'turnos', 'action' => 'index'))?></li>
              </ul>
            </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>