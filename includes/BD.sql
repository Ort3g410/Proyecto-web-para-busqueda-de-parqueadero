create database wolfparquin;

use wolfparquin;

create table usuarios(
	id int (20) not null auto_increment,
	email varchar (128),
	nombre varchar (128),
	cedula int (128),
	contrasena varchar (128),
	fecha_creacion timestamp default current_timestamp,
	primary key (id));

create table parqueaderos(
	id_parq int (20) not null auto_increment,
	nombre varchar (128),
	direccion varchar (128),
	ubicacion varchar (128),
	disponibles int (20),
	fecha_registro timestamp default current_timestamp,
	primary key (id_parq));

INSERT
INSERT INTO `parqueaderos` (`id_parq`, `nombre`, `direccion`, `ubicacion`, `disponibles`, `fecha_registro`) VALUES (NULL, 'Parqueadero la 68', 'Av. Alberto Lleras Camargo #6714', 'Chapinero', '3', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero de la fe', 'Cl. 69 #10a - 36', 'Chapinero', '1', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero la embajada', 'Cl. 74 #6-77 a 6-1', 'Chapinero', '0', CURRENT_TIMESTAMP),
(NULL, 'Central parking', 'Cl. 72', 'Chapinero', '7', CURRENT_TIMESTAMP),
(NULL, 'Punto 6 parqueadero', 'Cl. 77 #10-2 a 10-98', 'Chapinero', '5', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero Maria', 'Cra. 4 #91-19', 'Chapinero', '0', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero publica', 'Cl. 57 #9-67 a 9-1', 'Chapinero', '2', CURRENT_TIMESTAMP);

INSERT INTO `parqueaderos` (`id_parq`, `nombre`, `direccion`, `ubicacion`, `disponibles`, `fecha_registro`) VALUES (NULL, 'Parqueadero Galan', 'Cra. 79c Bis #58n Sur-34 a 58n Sur-2', 'Bosa', '5', CURRENT_TIMESTAMP),
(NULL, '80 parqueadero', 'Ak. 80', 'Bosa', '6', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero Principal Bosa', 'Cra. 80i #61 Sur-1 a 61 Sur-49', 'Bosa', '4', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero las brisas', 'Cra. 80h #60 Sur-90 a 60 Sur-2', 'Bosa', '8', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero líder', 'Cl. 63 Sur #79b-87 a 79b-1', 'Bosa', '2', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero el colegio', 'Cl. 65j Sur #78j-2 a 78j-86', 'Bosa', '3', CURRENT_TIMESTAMP),
(NULL, 'Parqueadero idelsa', 'Tv. 80d #66 Sur-82 a 66 Sur-8', 'Bosa', '4', CURRENT_TIMESTAMP);