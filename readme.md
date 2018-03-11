## Guia de instalacion

1- Para empezar necesitamos tener PHP, composer y node.js instalados en el equipo.

2- Lo primero que tenemos que hacer es descargar el proyecto en la carpeta que queramos usarlo:
`git clone https://github.com/Artiaga2/GestorSalas`

3- Una vez descargado, usaremos los comandos composer install y npm run dev para instalar todos los paquetes necesarios.

4- Seguidamente seguiremos el tutorial de Laravel Homestead para instalarnos nuestro proyecto en Homestead
https://laravel.com/docs/5.6/homestead

5- Una vez hecho esto tenemos que crear la base de datos con el nombre,la ip, el usuario y el password que le hemos dado en el archivo `.env`.
- `DB_DATABASE` = Nombre Aplicacion
- `DB_HOST` = Ip
- `DB_USERNAME` = Usuario
- `DB_PASSWORD` = Password

6- Por ultimo ejecutamos el comando `php artisan migrate:refresh --seed` para proveer a la base de datos
ficticios.


## Gestor de Salas

La aplicacion Gestor de Salas es una aplicacion para la creacion y alquiler de Salas para el estudio
o otro tipo de actividades.

Esta es mi primera aplicacion en laravel.
