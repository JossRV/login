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
