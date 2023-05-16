create database user;
use user;
CREATE TABLE account (
    ID int PRIMARY KEY,
    email varchar(30),
    password int
);

INSERT INTO account VALUES (1, 'lucho@gmail.com', 123);
  
create table cellphone(
modelo int PRIMARY KEY,
nombre varchar(30),
marca varchar(30),
precio double,
tipo_producto varchar(30),
numero_serie long,
fecha_salida varchar(30),
fecha_llegada_almacen varchar(30),
tamaño double,
color varchar(30),
camaras int,
almacenamiento varchar(30),
tasa_refresco long,
memoria_ram varchar(30),
version_android varchar(30),
procesador varchar(30)
);
