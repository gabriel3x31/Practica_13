	function get(id) {
		return document.getElementById(id);
	}


	
	/*Funcion que muestra un elemnto del codigo html, en este caso el formulario*/
	function mostrarFormulario() {
		get("formulario").style.display = 'inline';

	}

	function mostrarFormulario1() {
		get("formulario1").style.display = 'inline';

	}

	function mostrarFormulario2() {
		get("formulario2").style.display = 'inline';

	}

	/*Funcion que oculta un elemnto del codigo html, en este caso el formulario*/
	function ocultarFormulario() {
		get('nombresC').value = '';
		get('apellidosC').value = '';
		get('numeroCasaC').value = '';
		get('numeroTrabajoC').value = '';
		get('correoC').value = '';
		get("formulario").style.display = 'none';

	}