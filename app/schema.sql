CREATE SCHEMA `tareas` ;
CREATE TABLE `tareas`.`t_usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido_paterno` VARCHAR(45) NOT NULL,
  `apellido_materno` VARCHAR(45) NOT NULL,
PRIMARY KEY (`id_usuario`));
INSERT INTO `tareas`.`t_usuarios` (`usuario`, `password`, `nombre`, `apellido_paterno`, `apellido_materno`) 
VALUES ('Joss', 'fe2e7fba0704028b60e7f9c02e0878450cd6e07e', 'Jose Alberto', 'Velazquez', 'Nava');
CREATE TABLE `tareas`.`t_tareas` ( 
  `id_tarea` INT NOT NULL AUTO_INCREMENT , 
  `nombre_tarea` VARCHAR(50) NOT NULL , 
  `fecha_incio` DATE NOT NULL , 
  `fecha_fin` DATE NOT NULL , `hora_inicio` TIME NOT NULL , 
  `hora_fin` TIME NOT NULL , `comentario` TEXT NOT NULL ,
  `tupla` INT NOT NULL ,
PRIMARY KEY (`id_tarea`)) ENGINE = InnoDB;
INSERT INTO `t_tareas` (`id_tarea`, `nombre_tarea`, `fecha_incio`, `fecha_fin`, `hora_inicio`, `hora_fin`, `comentario`) 
VALUES (NULL, 'logotipos', current_timestamp(), '', 'current_timestamp()', '', 'esta tarea de logotipos para el diseño web');