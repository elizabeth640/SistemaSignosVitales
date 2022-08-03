-- -----------------------------------------------------
-- Schema dbDHBY
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ti9` ;

-- -----------------------------------------------------
-- Schema dbDHBY
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ti9` DEFAULT CHARACTER SET utf8 ;
USE `ti9` ;

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `medico` (
  `idmedico` INT NOT NULL AUTO_INCREMENT,
  `NombreCompleto` varchar(90) DEFAULT NULL,
  `CedulaProfesional` varchar(45) DEFAULT NULL,
  `Edad` INT NOT NULL,
  `Sexo` ENUM('F','M') DEFAULT NULL,
  `Cel` INT DEFAULT NULL,
  `Tel` INT DEFAULT NULL,
  `Especialidad` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `FechaAltaSistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idmedico`)
  )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `paciente` (
  `idpaciente` INT NOT NULL AUTO_INCREMENT,
  `NombreCompleto` varchar(90) DEFAULT NULL,
  `Direcion` varchar(45) not NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Edad` int,
  `NumeroTelefono` INT,
  `Alergia` varchar(45) not NULL,
  `TipoEnfermedad` varchar(45) not NULL,
  `Medicamento` varchar(45) not NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `paciente` (
  `idcurp` varchar(90) NOT NULL,
  `NombreCompleto` varchar(90) NOT NULL,
  `Edad` varchar(45) DEFAULT NULL,
  `FechaNacimiento` DATE,
  `Domicilio` varchar(45) DEFAULT NULL,
  `FechaAltaSistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Sexo` ENUM('F','M') NOT NULL,
  `EstadoCivil` ENUM('Casada/o','Soltero/a') NOT NULL,
  `Ocupacion` varchar(45) DEFAULT NULL,
  `Cel` INT DEFAULT NULL,
  `Tel` INT DEFAULT NULL,
  `Estatura` DECIMAL(4,2) DEFAULT NULL,
  `Peso` INT DEFAULT NULL,
  `IMC` DECIMAL(8,4) DEFAULT NULL,
  `medico_idmedico` INT NOT NULL,
   PRIMARY KEY (`idcurp`),
  INDEX `fk_paciente_medico_idx` (`medico_idmedico` ASC) ,
  CONSTRAINT `fk_paciente_medico`
    FOREIGN KEY (`medico_idmedico`)
    REFERENCES `medico` (`idmedico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE `antecedentes` (
  `idantecedentes` INT NOT NULL AUTO_INCREMENT,
  `paciente_idcurp` varchar(45) NOT NULL,
  `Alcohol` ENUM('Ocasionalmente','Frecuentemente','Rara Vez') DEFAULT NULL,
  `Tabaco` ENUM('Si','No') DEFAULT NULL,
  `Drogas` ENUM('Si','No') DEFAULT NULL,
  `Alimetacion` ENUM('Sana','Normal','Iregular','Mala') DEFAULT NULL,
  `Dipsia` ENUM('Si','No') DEFAULT NULL,
  `Gemelar` ENUM('Si','No') DEFAULT NULL,
  `EnfermedadesHereditarias` varchar(45) not NULL,
  `Alergias` varchar(45) not NULL,
  `Anticonceptivos` varchar(45) not NULL,
  `TipoSangre` varchar(45) not NULL,
  PRIMARY KEY (`idantecedentes`),
  INDEX `fk_antecedentes_paciente_idx` (`paciente_idcurp` ASC) ,
  CONSTRAINT `fk_antecedentes_paciente`
    FOREIGN KEY (`paciente_idcurp`)
    REFERENCES `paciente` (`idcurp`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
----- procedimientos almacenados
-- -----------------------------------------------------
DELIMITER $$
CREATE PROCEDURE agregarpaciente(in _NombreCompleto varchar(50),in _Edad int,in _FechaNacimiento date, in _Domicilio varchar(50), in _FechaAltaSistema date, in _Sexo ENUM('F','M'),in _EstadoCivil ENUM('Casada/o','Soltero/a'), in _Ocupacion varchar(50), in _Cel int, in _Tel int, in _estatura varchar(50),in _peso int,in _medico_idmedico int,
in _paciente_idcurp varchar(50), in _Alcohol ENUM('Ocasionalmente','Frecuentemente','Rara Vez'),in _Tabaco ENUM('Si','No'), in _Drogas ENUM('Si','No'), in _Alimetacion ENUM('Sana','Normal','Iregular','Mala'),
 in _Dipsia ENUM('Si','No'), in _Gemelar ENUM('Si','No'),in _EnfermedadesHereditarias varchar(50),in _Alergias varchar(45),in _Anticonceptivos varchar(45),in _TipoSangre varchar(45))
BEGIN
INSERT INTO `paciente`( `NombreCompleto`, `Edad`, `FechaNacimiento`, `Domicilio`, `FechaAltaSistema`, `Sexo`, `EstadoCivil`, `Ocupacion`, `Cel`, `Tel`, `Estatura`, `Peso`, `medico_idmedico`) VALUES (_NombreCompleto,_Edad,_FechaNacimiento,_Domicilio,_FechaAltaSistema,_Sexo,_EstadoCivil,_Ocupacion,_Cel,_Tel,_Estatura,_Peso,_medico_idmedico);
INSERT INTO `antecedentes`(`paciente_idcurp`, `Alcohol`, `Tabaco`, `Drogas`, `Alimetacion`, `Dipsia`, `Gemelar`, `EnfermedadesHereditarias`, `Alergias`, `Anticonceptivos`, `TipoSangre`) VALUES (_paciente_idcurp,_Alcohol,_Tabaco,_Drogas,_Alimentacion,_Dipsia,_Gemelar,_EnfermedadesHereditarias,_Alergias,_Anticonceptivos,_TipoSangre);
END $$