# project-portalgobierno

Este proyecto se puede visualizar en la siguiente URL: https://portalgobierno.herokuapp.com/

El proyecto está configurado de la siguiente forma:

- Configuración del servidor en Heroku
- Configuración del Framework CodeIgniter en Heroku
- Integración y Configuración de la Base de Datos Postgresql tanto en CondeIgniter como en Heroku.
- Integración del Framework Furatto para apoyar el sitio responsivo
- Maquetado del home


Se crearon las siguientes tablas dentro de la base de datos:

create table cronograma(
	id serial PRIMARY KEY,
	fecha_inicio date,
	fecha_fin date
);

create table titular_unidad(
	id serial PRIMARY KEY,
	apellido_paterno varchar(35),
	apellido_materno varchar(35),
	nombre varchar(25),
	cargo_puesto varchar(100), 
	correo varchar(50) UNIQUE
);

create table responsable_proceso(
	id serial PRIMARY KEY,
	titular_unidadfk integer REFERENCES titular_unidad(id),
	apellido_paterno varchar(35),
	apellido_materno varchar(35),
	nombre varchar(25),
	cargo_puesto varchar(100), 
	correo varchar(50) UNIQUE
);

create table responsable_planeacion(
	id serial PRIMARY KEY,
	titular_unidad integer REFERENCES titular_unidad(id),
	apellido_paterno varchar(35),
	apellido_materno varchar(35),
	nombre varchar(25),
	cargo_puesto varchar(100), 
	correo varchar(50) UNIQUE
);

create table miembros_grupos(
	id serial PRIMARY KEY,
	apellido_paterno varchar(35),
	apellido_materno varchar(35),
	nombre varchar(25),
	cargo_puesto varchar(100), 
	correo varchar(50) UNIQUE
);


                    List of relations
 Schema |          Name          | Type  |     Owner
--------+------------------------+-------+----------------
 public | cronograma             | table | daznszkcbewnga
 public | miembros_grupos        | table | daznszkcbewnga
 public | responsable_planeacion | table | daznszkcbewnga
 public | responsable_proceso    | table | daznszkcbewnga
 public | titular_unidad         | table | daznszkcbewnga


PENDIENTES

Por ahora, el proyecto crea nuevos periodos, los almacena en la base de datos y los muestra en otra vista (https://portalgobierno.herokuapp.com/index.php/cronograma/dates)
