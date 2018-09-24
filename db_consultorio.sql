-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2018 a las 00:42:49
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `USUARIO` varchar(10) NOT NULL,
  `CONTRASENA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`USUARIO`, `CONTRASENA`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `CEDULA_AUX` varchar(10) NOT NULL,
  `NOMBRE_AUX` varchar(50) NOT NULL,
  `APELLIDO_AUX` varchar(50) NOT NULL,
  `DIRECCION_AUX` varchar(100) NOT NULL,
  `TELEFONO_AUX` varchar(10) NOT NULL,
  `FECH_NAC_AUX` date NOT NULL,
  `CONTRASENA_AUX` varchar(50) NOT NULL,
  `ESTADO_AUX` int(11) NOT NULL,
  `CORREO_AUX` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`CEDULA_AUX`, `NOMBRE_AUX`, `APELLIDO_AUX`, `DIRECCION_AUX`, `TELEFONO_AUX`, `FECH_NAC_AUX`, `CONTRASENA_AUX`, `ESTADO_AUX`, `CORREO_AUX`) VALUES
('1711779825', 'Julian', 'Casablanca', 'Mexico - DF', '0997912523', '1998-03-11', '123456', 0, 'julian@gmail.com'),
('1719181941', 'Daniel Fernando', 'Aucancela Gomez', 'Chambo y Sucua', '0996857412', '1998-03-07', '123456', 1, 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `ID_CITA` int(11) NOT NULL,
  `CEDULA_MED` varchar(10) NOT NULL,
  `CEDULA_PAC` varchar(10) NOT NULL,
  `ID_HC` int(11) NOT NULL,
  `HORA_CITA` time NOT NULL,
  `FECHA_CITA` date NOT NULL,
  `MOTIVO_CITA` varchar(500) NOT NULL,
  `DETALLE_DIAGNOSTICO_CITA` varchar(500) NOT NULL,
  `TRATAMIENTO_CITA` varchar(500) NOT NULL,
  `MEDICAMENTO_CITA` varchar(500) NOT NULL,
  `FECHA_PROX_CITA` date NOT NULL,
  `PESO_CITA` float NOT NULL,
  `ALTURA_CITA` float NOT NULL,
  `ESTADO_CITA` int(11) NOT NULL,
  `PRESION` varchar(20) NOT NULL,
  `TEMPERATURA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`ID_CITA`, `CEDULA_MED`, `CEDULA_PAC`, `ID_HC`, `HORA_CITA`, `FECHA_CITA`, `MOTIVO_CITA`, `DETALLE_DIAGNOSTICO_CITA`, `TRATAMIENTO_CITA`, `MEDICAMENTO_CITA`, `FECHA_PROX_CITA`, `PESO_CITA`, `ALTURA_CITA`, `ESTADO_CITA`, `PRESION`, `TEMPERATURA`) VALUES
(1, '1719151425', '1711779825', 1, '26:18:09', '2018-08-31', '1', 'no se', 'nose', 'asdaasd', '2018-08-31', 1, 1, 0, '160/23', 1),
(2, '0605043157', '1711779825', 1, '21:09:10', '2018-08-02', 'asdasdasdsad', 'asdsad', 'aaaaa', 'aaaaa', '2018-08-02', 12, 33, 0, '33', 0),
(3, '0605043157', '1719181941', 3, '08:00:00', '2018-08-02', '', 'PROBANDO', 'PROBANDO', 'PROBANDO', '0000-00-00', 0, 0, 0, '1', 0),
(4, '0605043157', '1719181941', 3, '08:00:00', '2018-08-02', '1', '1', '1', '1', '0000-00-00', 1, 1, 0, '11', 0),
(5, '1717181974', '1719181941', 3, '15:00:00', '2018-08-30', '', '', '', '', '0000-00-00', 0, 0, 0, '433', 1),
(6, '1717181974', '1719181941', 3, '10:00:00', '2018-08-30', '', '', '', '', '0000-00-00', 0, 0, 0, '11', 1),
(7, '1717181974', '1711779825', 1, '12:00:00', '2018-08-30', '77', 'cscscs', 'cccscdcs', 'cscscsc', '0000-00-00', 77, 77, 0, '77', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `ID_HC` int(11) NOT NULL,
  `CEDULA_PAC` varchar(10) NOT NULL,
  `CEDULA_AUX` varchar(10) NOT NULL,
  `HC_FECHA_CREACION` date NOT NULL,
  `RESPONSABLE` varchar(100) NOT NULL,
  `OBSERVACIONES` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historiaclinica`
--

INSERT INTO `historiaclinica` (`ID_HC`, `CEDULA_PAC`, `CEDULA_AUX`, `HC_FECHA_CREACION`, `RESPONSABLE`, `OBSERVACIONES`) VALUES
(1, '1711779825', '1719181941', '2018-08-08', 'Danny Alexander Usca Farinango', 'Ultimas Observaciones'),
(2, '1719181933', '1719181941', '2018-08-02', 'El responsable', 'no me acuerdo'),
(3, '1719181941', '1711779825', '2018-08-16', 'asdsad', 'dfgfdgfdg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `CEDULA_MED` varchar(10) NOT NULL,
  `NOMBRE_MED` varchar(100) NOT NULL,
  `APELLIDO_MED` varchar(100) NOT NULL,
  `TELEFONO_MED` varchar(10) NOT NULL,
  `ESPECIALIDAD` varchar(50) NOT NULL,
  `CONTRASENA_MED` varchar(100) NOT NULL,
  `ESTADO_MED` int(11) NOT NULL,
  `FECHA_NAC_MED` date NOT NULL,
  `DIRECCION_MED` varchar(100) NOT NULL,
  `CORREO_MED` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`CEDULA_MED`, `NOMBRE_MED`, `APELLIDO_MED`, `TELEFONO_MED`, `ESPECIALIDAD`, `CONTRASENA_MED`, `ESTADO_MED`, `FECHA_NAC_MED`, `DIRECCION_MED`, `CORREO_MED`) VALUES
('0250021235', 'safsdfsd', 'sdfsdfsdf', ' 234234324', 'fgdfg', ' 123', 0, '2018-08-15', '1233312 sdfsdfsd', 'adasdasd'),
('0605043157', 'JHEIMY  XIOMARA', 'ALARCON  SOLORZAN', ' 172342342', 'sdfsdfsdf sdfsd', ' 123456', 0, '2018-08-01', 'asdsa', 'asdsadasd'),
('0605477892', 'sdfsdf', 'ssdf', ' 2332', 'sd', ' 23', 0, '2018-08-13', 'fsdf', 'sdfsdf'),
('1111111111', 'asdasd', 'asdasdas', ' 62626', 'asdasd', ' 12345', 0, '2018-08-07', 'asdas', 'dasdasd'),
('123098', 'sdfsdf', 'sdfsdfsdf', ' 123', 'fsdfsd', ' 123', 0, '2018-08-11', 'asdsadasd', 'asdasd'),
('123321', 'asdas', 'assss', ' 123456789', 'asdasd sdfdsfdsf', ' 123456789', 0, '2018-08-14', 'asdasdsadas', 'sfsdf@es.es'),
('1711779825', 'asdasd', 'asdsadasd', ' 2616161', 'asdasdasd', ' 123456', 0, '1995-03-22', 'asd asdasd', 'asdasd111'),
('1717181974', 'Luis Fernando', 'Aucancela Ramos', '0998521474', 'Medico General', '123456', 0, '1990-03-03', 'Avendida Canonigo Ramos y Pasaje Azuay', 'luis@gmail.com'),
('1719151425', 'Luis Fernando', 'Aucancela Ramos', '0998521474', 'Medico General', '123456', 0, '1990-03-03', 'Avendida Canonigo Ramos y Pasaje Azuay', 'luis@gmail.com'),
('1719181933', 'asdas', 'asdasd', ' 09972212', 'asdasdas sdfsdf', ' 123456', 0, '1995-03-22', 'dahjskdhasd', 'dasdsa@es.es'),
('1719181941', 'asdasd', 'asdasd', ' 13123', 'sdfsdfsd', ' 123456', 0, '1995-03-22', 'asdasd', 'asdasdasd@asdddd.es'),
('2434345555', 'sdfdsf', 'sdfsdfsdf', ' 243234234', 'sdfds sdfsdfsd', ' 123', 0, '2018-08-02', 'adfsdf', 'sdfsd@asdsa.es'),
('9857567234', 'fff', 'sdfsdf', ' 21323423', 'sdfdsv', ' 123456789', 0, '2018-08-07', 'asdsf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `CEDULA_PAC` varchar(10) NOT NULL,
  `NOMBRE_PAC` varchar(50) NOT NULL,
  `APELLIDO_PAC` varchar(50) NOT NULL,
  `TELEFONO_PAC` varchar(10) NOT NULL,
  `FECHA_NAC_PAC` date NOT NULL,
  `EDAD_PAC` int(11) NOT NULL,
  `PROVINCIA_PAC` varchar(50) NOT NULL,
  `CANTON_PAC` varchar(50) NOT NULL,
  `PROFESION` varchar(50) NOT NULL,
  `ESTADOCIVIL` varchar(50) NOT NULL,
  `SEXO` varchar(20) NOT NULL,
  `CONTRASENA_PAC` varchar(50) NOT NULL,
  `ESTADO_PAC` int(11) NOT NULL,
  `CORREO_PAC` varchar(50) NOT NULL,
  `DIRECCION_PAC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`CEDULA_PAC`, `NOMBRE_PAC`, `APELLIDO_PAC`, `TELEFONO_PAC`, `FECHA_NAC_PAC`, `EDAD_PAC`, `PROVINCIA_PAC`, `CANTON_PAC`, `PROFESION`, `ESTADOCIVIL`, `SEXO`, `CONTRASENA_PAC`, `ESTADO_PAC`, `CORREO_PAC`, `DIRECCION_PAC`) VALUES
('1711779825', 'Tania Fernanda', 'Usca Farinango', '0996857412', '1993-09-26', 25, 'Pichincha', 'Quito', 'Ingeniero', 'Casada', 'Femenino', '123456', 0, 'tania@gmail.com', 'Avenida Las AMericas'),
('1719181933', 'Blanca Floresmila', 'Fariango Lopez', '0998985214', '2018-08-01', 44, 'Chimborazo', 'Riobamba', 'Estudiante', 'Casada', 'Femenino', '123456', 0, 'blanca@gmail.com', 'Av. Lizarzaburu y Pasaje Azuay'),
('1719181941', 'Danny Alexander', 'Usca Farinango', '0997912534', '1995-03-22', 23, 'Chimborazo', 'Riobamba', 'Estudiante', 'soltero', 'femenino', '123456789', 0, 'dannytumacho@gmail.com', 'Avenidad Sucumbios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`CEDULA_AUX`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`ID_CITA`),
  ADD KEY `FK_HISTORIACLIENTE_CITA` (`ID_HC`),
  ADD KEY `FK_MEDICO_CITA` (`CEDULA_MED`),
  ADD KEY `FK_PACIENTE_CITA` (`CEDULA_PAC`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`ID_HC`),
  ADD KEY `FK_REALIZA` (`CEDULA_AUX`),
  ADD KEY `FK_TIENE` (`CEDULA_PAC`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`CEDULA_MED`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`CEDULA_PAC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `ID_CITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `ID_HC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_HISTORIACLIENTE_CITA` FOREIGN KEY (`ID_HC`) REFERENCES `historiaclinica` (`ID_HC`),
  ADD CONSTRAINT `FK_MEDICO_CITA` FOREIGN KEY (`CEDULA_MED`) REFERENCES `medico` (`CEDULA_MED`),
  ADD CONSTRAINT `FK_PACIENTE_CITA` FOREIGN KEY (`CEDULA_PAC`) REFERENCES `paciente` (`CEDULA_PAC`);

--
-- Filtros para la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD CONSTRAINT `FK_REALIZA` FOREIGN KEY (`CEDULA_AUX`) REFERENCES `auxiliar` (`CEDULA_AUX`),
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`CEDULA_PAC`) REFERENCES `paciente` (`CEDULA_PAC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
