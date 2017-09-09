Secciones creadas y traducidas:
	- Grupos (Grupos)
	- Usuarios (Usuarios)
	- Catalogo Monedas (ClMonedas)
	- Cuentas (Cuentas)

Cambios
	+ Configuraciones
		+ Bootstrap: date_default_timezone_set('America/Guatemala');
		+ app: 'defaultLocale' => env('APP_DEFAULT_LOCALE', 'es_GT')

	+ Traduccion al español:
		+ Mensajes Varios
		+ Etiquetas Grupos
		+ Etiquetas Usuarios
		+ Etitquetas ClMonedas
		+ Etitquetas Cuentas

	+ Usuario:
		+ Hash de la contraseña
		+ Logueo (únicamente para usuarios activos)
		+ Cambio de Contraseña
		+ Deslogueo
		+ No se pude cambiar el usuario (read only); si logra cambiarlo en el formulario igual se toma el del usuario logueado
		+ Index para consulta de tipo de operacion y los estados de operaciones

		- opcion para cambiar de categoría el usuario (cliente <-> administrador)
		- opcion para activar/inactivar usuarios
		- Menu navegable para usuarios
		- Personalización de colores y logos
		- Crear usuarios inactivos y enviar correo para cambio de contraseña y activación inicial
		- Recuperacion de contraseña
		- Reset de contraseña por parte del Administrador
		- trigger de la base de datos (saldo en reserva, suma disponible)
		- Editar solo el prefil del propio usuario
		- El usuario solo puede ver sus cuentas
