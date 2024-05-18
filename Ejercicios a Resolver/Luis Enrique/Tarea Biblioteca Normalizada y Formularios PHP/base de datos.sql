-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 05:20:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `ID_Autor` char(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Nacionalidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`ID_Autor`, `Nombre`, `Nacionalidad`) VALUES
('01', 'Juan Mesias', 'Español'),
('02', 'Karla Frans', 'Mexicano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_Departamento` char(8) NOT NULL,
  `NombreDepartamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ID_Departamento`, `NombreDepartamento`) VALUES
('01', 'Guatemala'),
('02', 'El Progreso'),
('03', 'Sacatepéquez'),
('04', 'Chimaltenango'),
('05', 'Escuintla'),
('22', 'Jutiapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `ID_Devolucion` char(8) NOT NULL,
  `FechaDevolucion` date DEFAULT NULL,
  `FK_Prestamo` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`ID_Devolucion`, `FechaDevolucion`, `FK_Prestamo`) VALUES
('01', '0000-00-00', '01'),
('02', '0000-00-00', '02'),
('03', '2024-05-17', '03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `ID_Direccion` char(8) NOT NULL,
  `Calle` varchar(20) DEFAULT NULL,
  `Numero` char(8) DEFAULT NULL,
  `Comuna` varchar(20) DEFAULT NULL,
  `FK_Departamento` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`ID_Direccion`, `Calle`, `Numero`, `Comuna`, `FK_Departamento`) VALUES
('01', '5ta', '2', 'C', '01'),
('02', '7ma', '3', 'A', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `ID_Editorial` char(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`ID_Editorial`, `Nombre`) VALUES
('01', 'Imex.co'),
('02', 'Ionix.mo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_Genero` char(8) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_Genero`, `Nombre`) VALUES
('01', 'Masculino'),
('02', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID_Libro` char(8) NOT NULL,
  `Titulo` varchar(20) DEFAULT NULL,
  `FK_Autor` char(8) DEFAULT NULL,
  `FK_Editorial` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID_Libro`, `Titulo`, `FK_Autor`, `FK_Editorial`) VALUES
('', 'El alexander moises', '01', '01'),
('01', 'El cansancio', '01', '01'),
('02', 'El dia y la noche', '02', '02'),
('03', 'El señor de los anil', '01', '01'),
('04', 'El señor de los anil', '01', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `ID_Municipio` char(8) NOT NULL,
  `NombreMunicipio` varchar(20) DEFAULT NULL,
  `FK_Departamento` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`ID_Municipio`, `NombreMunicipio`, `FK_Departamento`) VALUES
('0101', 'Guatemala', '01'),
('0102', 'Santa Catarina Pinul', '01'),
('0103', 'San José Pinula', '01'),
('0104', 'San José del Golfo', '01'),
('0105', 'Palencia', '01'),
('0106', 'Chinautla', '01'),
('0107', 'San Pedro Ayampuc', '01'),
('0108', 'Mixco', '01'),
('0109', 'San Pedro Sacatepéqu', '01'),
('0110', 'San Juan Sacatepéque', '01'),
('0111', 'San Raymundo', '01'),
('0112', 'Chuarrancho', '01'),
('0113', 'Fraijanes', '01'),
('0114', 'Amatitlán', '01'),
('0115', 'Villa Nueva', '01'),
('0116', 'Villa Canales', '01'),
('0117', 'Petapa', '01'),
('0201', 'Guastatoya', '02'),
('0202', 'Morazán', '02'),
('0203', 'San Agustín Acasagua', '02'),
('0204', 'San Cristóbal Acasag', '02'),
('0205', 'El Jícaro', '02'),
('0206', 'Sansare', '02'),
('0207', 'Sanarate', '02'),
('0208', 'San Antonio La Paz', '02'),
('2201', 'Jutiapa', '22'),
('2202', 'El Progreso', '22'),
('2203', 'Santa Catarina Mita', '22'),
('2204', 'Agua Blanca', '22'),
('2205', 'Asunción Mita', '22'),
('2206', 'Yupiltepeque', '22'),
('2207', 'Atescatempa', '22'),
('2208', 'Jerez', '22'),
('2209', 'El Adelanto', '22'),
('2210', 'Zapotitlán', '22'),
('2211', 'Comapa', '22'),
('2212', 'Jalpatagua', '22'),
('2213', 'Conguaco', '22'),
('2214', 'Moyuta', '22'),
('2215', 'Pasaco', '22'),
('2216', 'San José Acatempa', '22'),
('2217', 'Quesada', '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_Persona` char(8) NOT NULL,
  `PrimerNombre` varchar(20) DEFAULT NULL,
  `SegundoNombre` varchar(20) DEFAULT NULL,
  `PrimerApellido` varchar(20) DEFAULT NULL,
  `SegundoApellido` varchar(20) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `FK_Direccion` char(8) DEFAULT NULL,
  `FK_Genero` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_Persona`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Edad`, `Correo`, `FK_Direccion`, `FK_Genero`) VALUES
('01', 'Luis', 'Enrique', 'Fuentes', 'Fuentes', 24, 'luis@gmail.com', '01', '01'),
('02', 'Luisa', 'Lois', 'Fuentes', 'Fuentes', 20, 'luisa@gmail.com', '02', '02'),
('9861fc86', 'Carlos', 'David', 'Cifuentes', 'Lopez', 23, 'carlos@gmail.com', '02', '02'),
('9f7c6bc1', 'Roberto', 'Josue', 'Fuentes', 'Godinez', 18, 'roberto@gmail.com', '01', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_Prestamo` char(8) NOT NULL,
  `FechaPrestamo` date DEFAULT NULL,
  `FK_Persona` char(8) DEFAULT NULL,
  `FK_Libro` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`ID_Prestamo`, `FechaPrestamo`, `FK_Persona`, `FK_Libro`) VALUES
('', '2024-05-17', '02', '02'),
('01', '0000-00-00', '01', '01'),
('02', '0000-00-00', '02', '02'),
('03', '2024-05-17', '01', '04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`ID_Autor`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_Departamento`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`ID_Devolucion`),
  ADD KEY `FK_Prestamo` (`FK_Prestamo`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`ID_Direccion`),
  ADD KEY `FK_Departamento` (`FK_Departamento`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`ID_Editorial`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_Genero`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID_Libro`),
  ADD KEY `FK_Autor` (`FK_Autor`),
  ADD KEY `FK_Editorial` (`FK_Editorial`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`ID_Municipio`),
  ADD KEY `FK_Departamento` (`FK_Departamento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_Persona`),
  ADD KEY `FK_Direccion` (`FK_Direccion`),
  ADD KEY `FK_Genero` (`FK_Genero`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID_Prestamo`),
  ADD KEY `FK_Persona` (`FK_Persona`),
  ADD KEY `FK_Libro` (`FK_Libro`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `devoluciones_ibfk_1` FOREIGN KEY (`FK_Prestamo`) REFERENCES `prestamos` (`ID_Prestamo`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`FK_Departamento`) REFERENCES `departamento` (`ID_Departamento`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`FK_Autor`) REFERENCES `autor` (`ID_Autor`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`FK_Editorial`) REFERENCES `editorial` (`ID_Editorial`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`FK_Departamento`) REFERENCES `departamento` (`ID_Departamento`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`FK_Direccion`) REFERENCES `direccion` (`ID_Direccion`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`FK_Genero`) REFERENCES `genero` (`ID_Genero`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`FK_Persona`) REFERENCES `persona` (`ID_Persona`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`FK_Libro`) REFERENCES `libro` (`ID_Libro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
