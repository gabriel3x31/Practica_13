function get(id) {
		return document.getElementById(id);
	}


	//Un construsctor del tipo animal, para crearlos y despues almacenarlos.
	function contacto(argument) {
		this.nombres = "";
		this.apellidos = "";
		this.numeroCasa = "";
		this.numeroTrabajo = "";
		this.correo = "";
	}

	//Arreglo para ir guardando los aminales.
	var listaContactos = new Array();



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


	/*Funcion que guarda la informacion de los animales*/
	function guardarDatos() {
		anim = new contacto();
		anim.nombres = get('nombresC').value;
		anim.apellidos = get('apellidosC').value;
		anim.numeroCasa = get('numeroCasaC').value;
		anim.numeroTrabajo = get('numeroTrabajoC').value;
		anim.correo = get('correoC').value;
		listaContactos[listaContactos.length] = anim;

		ocultarFormulario();
		cuantosContactos();


	}

	/*Nos dice en un mensaje de alerta cuantos animales hemos guardado*/
	function cuantosContactos() {
		alert("Has guardado " + listaContactos.length + " contactos ");
	}

	/*Mostramos los aninales en un div del codigo html*/
	function muestraContactos() {
		get('listaAn').innerHTML = '';
		for (i = 0; i <= listaContactos.length; i++) {
			anim = listaContactos[i];
			form = document.createElement('form');
			form.setAttribute('class', 'contacto');
			form.innerHTML = "<br>" +
				"Nombres: " + anim.nombres + "<br>" +
				"Apellidos: " + anim.apellidos + "<br>" +
				"Numero telefonico de Casa: " + anim.numeroCasa + "<br>" +
				"Numero telefonico de Trabajo: " + anim.numeroTrabajo + "<br>" +
				"Correo electronico: " + anim.correo + "<br>";
			get('listaAn').appendChild(form);
		}
	}


	function remove(arr, item) {
		for (var i = arr.length; i--;) {
			if (arr[i].nombres.toLowerCase() === item.toLowerCase()) {
				arr.splice(i, 1);
			}
		}
	}

	function eliminaContacto() {
		var nomb = prompt("Ingresa el Nombre del contacto a eliminar");
		remove(listaContactos, nomb);
		alert("El contacto a sido eliminado");
	}