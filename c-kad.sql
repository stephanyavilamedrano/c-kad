-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 05:14:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c-kad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Camaras', 'Camaras, combos de seguridaad', 'cam10.jpg'),
(2, 'Computadores', 'Torres Gamer, Partes para computadores ', 'gamers.png'),
(3, 'Laptos', 'Portatiles ', 'lap1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id`, `id_venta`, `pais`, `company`, `direccion`, `estado`, `cp`) VALUES
(0, 5, '1', '0', '0', '0', '0'),
(0, 6, '0', '0', '0', '0', '0'),
(0, 7, '1', '0', '0', '0', '0'),
(0, 8, '0', '0', '0', '0', '0'),
(0, 9, '1', '0', '0', '0', '0'),
(0, 10, '1', '', '', '', ''),
(0, 11, '1', '', '', '', ''),
(0, 12, '1', '', '', '', ''),
(0, 13, '', '', '', '', ''),
(0, 14, '1', '', '', '', ''),
(0, 15, '', '', '', '', ''),
(0, 16, '1', '', '', '', ''),
(0, 17, '1', '', '', '', ''),
(0, 18, '1', '', '', '', ''),
(0, 19, '1', 'Tifany', 'carrera falsa 123', 'bogota', '057'),
(0, 20, '1', 'n/a', 'carrera falsa 123', 'bogota', '057');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`, `marca`, `color`) VALUES
(1, 'Camara de seguridad', 'camara de seguridad de facil instalacion', 75000, 'cam1.jpg', 30, 1, 'HIKVISION', 'Negro'),
(2, 'Camara de seguridad', 'CCTV Digital HD', 60000, 'CAM2.JPG', 3, 1, 'HIKVISION', 'Negro'),
(3, 'Camara de seguridad', 'Cámara Exterior  Wifi Hd Con VisiónN ', 600000, 'cam3.jpg', 10, 1, 'HIDVISION', 'MEGRO Y BLANCO'),
(4, 'Camara de seguridad', 'Hd Con Visión Nocturna', 69000, 'cam4.jpg', 76, 1, 'Logitec', 'Negro'),
(5, 'Camara de seguridad', 'Cámara Ip Wifi Vision Nocturna', 89000, 'cam5.jpg', 32, 1, 'Hidvision', 'Negro'),
(6, 'Camara de seguridad', 'Hikvision Turbo', 69000, 'cam6.jpg', 23, 1, 'Hikvision', 'Negro\r\n'),
(7, 'Kit Hikvision', 'Hilook DVR 8ch + 4 CAMARAS 1080P', 7800000, 'cam7.jpg', 45, 1, 'Hikvision', 'Negro\r\n'),
(8, 'Kit Hikvision', 'Hilook Dvr 1080 4ch + Camaras Seguridad', 900000, 'cam8.jpg', 32, 1, 'Hikvision', 'Negro'),
(9, 'Camara de seguridad', 'Camara con panel 360 grados / HD 1050 P', 90000, 'cam9.jpg', 10, 1, 'Hikvision', 'Blaco'),
(10, 'Kit hikvision', 'DVR - 4 CAMARAS + DD 1 TB', 789000, 'cam10.jpg', 3, 1, 'Hikvision', 'Blaco'),
(11, 'Camara Fija', ' Conectividad inalámbrica además\r\ninstalación fácil y flexible', 600000, 'cam11.png', 10, 1, 'AXIS M10 SERIES', 'BLANCA'),
(12, 'Camara fija', 'ideales para un amplio abanico de aplicaciones de video vigilancia, desde establecimientos comerciales y bancos, hasta hoteles\r\no edificios de oficinas.', 130000, 'cam12.png', 63, 1, 'AXIS M11 SERIES', 'Blaco'),
(13, 'Domos fijos ', 'Cámaras domo fijas muy discretas y\r\nfáciles de instalar, con resolución HDTV\r\ny vistas panorámicas de 360º/180º.', 90000, 'cam13.png', 52, 1, 'AXIS M30', 'Blanca'),
(14, 'Camara fija', 'Está diseñada para tareas de video\r\nvigilancia en autobuses, trenes, vagonetas de metros y vehículos de emergencia.', 150000, 'cam14.png', 5, 1, 'AXIS M31', 'Blanco'),
(15, 'Camaras PTZ', ' La serie PTZ AXIS P55 consta de cámaras domo PTZ avanzadas, para interiores y exteriores.', 450000, 'cam15.png', 28, 1, 'PTZ AXIS PSS', 'Blanca'),
(16, 'Camaras PTZ', 'Modelos para exteriores e interiores,\r\naplicaciones de movimiento continuo\r\nhorizontal, vertical y zoom las 24 horas\r\ndel día.', 280000, 'cam16.png', 38, 1, 'Serie Axis Q60', 'Blanco'),
(17, 'Camaras ocultas', 'Diseño exclusivo y funcional, estas\r\ncámaras pueden integrarse sin problemas en diferentes entornos', 350000, 'cam17.png', 49, 1, 'AXIS P12 ', 'Blanco'),
(18, 'Cámaras de red térmicas', 'Son un complemento perfecto para cualquier sistema de vídeo en red pensado para\r\nla protección de un espacio 24 horas al día y siete días a la semana', 230000, 'cam18.png', 5, 1, 'AXIS Q19 ', 'Blanco y Negro'),
(19, 'Cámara de red \r\n', 'Cámara IP inalámbrica integrada\r\ncombina vídeo digital de alta resolución con conexión de red y un servidor\r\nweb de gran capacidad.', 200000, 'cam19.png', 26, 1, 'Nexxt XPY-320 ', 'Negro'),
(20, 'XPY300 Fixed IP ', 'Procesador de vídeo de alta velocidad, compatible con diversos protocolos de red para la reproducción instantánea de imágenes.', 2700000, 'cam20.png', 34, 1, 'Nexxt Wireless', 'Negro'),
(21, 'Gaming PC Desktop', 'Sistema: Intel i7-10700F 2.9GHz (4.8GHz Max Turbo) 16GB DDR4 RAM 240GB SSD 1TB HDD original Windows 10 Home 64-bit\r\nGráficos: tarjeta de vídeo para juegos NVIDIA GeForce GTX 1660 Ti de 6 GB VR Ready 1 x DVI 1 x HDMI 1 x Display Port', 4060000, 'comp1.jpg', 37, 2, 'IBUYPOWER', 'Negro'),
(22, 'PC GAMER', 'Procesador de CPU Ryzen 5 2600 6 núcleos 3.4 GHz (3,9 GHz Max Boost) | SSD de 500 G – hasta 30 veces más rápido que el disco duro tradicional | Tarjeta madre A320M\r\nTarjeta de video NVIDIA GeForce GTX 1660 TI 6 GB GDDR6 | 8 GB de memoria para juegos DDR4 3000 con disipador de calor', 3500000, 'comp2.jpg', 15, 2, 'SkyTech Blaze II', 'negro'),
(23, 'PC GAMER', 'Procesador Intel Core i5-9400F 6-core 2.9GHz (4.1GHz Max Boost) CPU | 500G SSD – hasta 30 veces más rápido que el disco duro tradicional | placa base B365M', 6800000, 'comp3.jpg', 32, 2, 'Skytech Gaming', 'nEGRO'),
(24, 'PC GAMER', ' Procesador Intel Core i5-9400F 6-core 2.9GHz (4.1GHz Max Boost) CPU | 500G SSD – hasta 30 veces más rápido que el disco duro tradicional | placa base B365M\r\n Tarjeta gráfica NVIDIA GeForce GTX 1660 6GB GDDR5 (la marca puede variar) | 8 GB DDR4 3000 MHz de memoria para juegos con difusores de calor | Windows 10 Home 64-bit', 6800000, 'comp4.jpg', 49, 2, 'Skytech', 'negro'),
(25, 'CYBERPOWERPC', 'Sistema: AMD Ryzen 3 3100 3.6 GHz 4-Core | Chipset AMD A320 | 8 GB DDR4 | 240 GB SSD | 2TB HDD | Windows 10 Home original de 64 bits\r\nGráficos: tarjeta de vídeo NVIDIA GeForce GT 1030 de 2 GB | 1 HDMI', 3600000, 'comp5.jpg', 43, 2, 'CyberpowerPC', 'Blanco'),
(26, 'Periphio Gaming', 'Intel Quad Core i5 3.1GHz, 8GB RAM, 128GB SSD + 1TB 7200 RPM HDD, Windows 10, GeForce GTX 1650 4GB Overclocked Edition Tarjeta gráfica RGB HDMI Wi-Fi (renovado)', 2800000, 'comp6.jpg', 53, 2, 'Periphio', 'negro'),
(27, 'SkyTech Blaze', 'Intel Core i5-9400F 6-Core 2,9 GHz, NVIDIA GeForce GTX 1650 4 GB, 500 G SSD, 8 GB DDR4, AC WiFi, Windows 10 Home 64 bits', 2900000, 'comp7.jpg', 51, 2, 'Skytech Gaming', 'negro'),
(28, 'SkyTech Blaze II', 'Ryzen 5 3600 6-Core 3.6GHz, GTX 1660 6G, 500G SSD, 8GB DDR4 3000, B450 MB, RGB, AC WiFi, Windows 10 Home 64 bits', 3970000, 'comp8.jpg', 3, 2, 'Skytech Gaming', 'Negro'),
(29, 'Skytech Chronos Mini ', 'AMD Ryzen 3 3100, NVIDIA GTX 1650 Super 4GB, 8GB DDR4, 500GB SSD, A320 Motherboard, 550 Watt Bronze', 3240000, 'comp9.jpg', 25, 2, 'Skytech Gaming', 'Negro'),
(30, 'SkyTech Blaze lll', 'Ryzen 5 2600, 6 núcleos, 3.4 GHz, NVIDIA GeForce GTX 10 TI 4G, 500G SSD, 8GB DDR4, RGB, AC WiFi, Windows 64 Home 1650 bits.', 27000000, 'comp10.jpg', 32, 2, 'Skytech Gaming', 'Negro'),
(31, 'iBUYPOWER Trace', 'Sistema: AMD Ryzen 5 3600 3,6 GHz (4,2 GHz Max Turbo) | 8 GB de RAM DDR4 | 240 GB SSD | Windows 10 Home original de 64 bits\r\nGráficos: AMD Radeon RX 5500 XT 4GB Tarjeta gráfica dedicada | VR Ready | Conectores de pantalla: HDMI, DisplayPort', 3560000, 'comp11.jpg', 14, 2, 'IBUYPOWER', 'Negro'),
(32, 'OMEN 30L', 'Procesador intel core I5 - 10400F-8 GB RAM- SSD 512 Y DD 1 TB TOSHIBA- Gráficos hiperrealistas: NVIDIA GeForce GTX 1660 SUPER (6 GB GDDR6 memoria dedicada). Aumenta tu experiencia de juego y creatividad con trazado de rayos en tiempo real y rendimimiento', 2800000, 'comp12.jpg', 12, 2, 'OMEN', 'negro'),
(33, 'iBUYPOWER', 'PC Desktop 1000iV2 (Intel i7-10700F 2.9GHz, NVIDIA GeForce RTX 2060 6GB, 16GB DDR4 RAM, 480GB SSD, 2TB HDD, WiFi Ready, Windows 10 Home)', 4700000, 'comp14.jpg', 28, 2, 'IBUYPOWER', 'negro'),
(34, 'Skytech', 'AMD Ryzen 7 2700X, NVIDIA RTX 2070 Super 8 GB, 16 GB DDR4 (2 x 8 GB), 1 TB SSD, B450M placa base, 650 vatios oro (2700 X | 2070 Super)', 3240000, 'comp15.jpg', 43, 2, 'Skytech Gaming', 'Negro'),
(35, 'PC Desktop Revolt 2 9330', 'Intel i5-10600K 4.10GHz, NVIDIA GTX 1660 Super 6GB, 8GB DDR4 RAM, 240GB SSD, 1TB HDD, WiFi Ready, Windows 10 Home', 2800000, 'comp16.jpg', 29, 2, '	IBUYPOWER', 'Blanco'),
(36, 'SkyTech Legacy Mini', 'Ryzen 7 2700 8-Core 3.2 GHz, NVIDIA GeForce GTX 1660 Ti 6GB, SSD 500G, 16GB DDR4, AC WiFi, Windows 10 Home 64-bit', 7800000, 'comp17.jpg', 1, 2, 'Skytech Gaming', 'Negro'),
(37, 'ROG Strix GA15DH', 'Ryzen 7 3700X, GeForce GTX 1660 Ti, 16GB DDR4 RAM, 512GB PCIe SSD, Wi-Fi 5, Windows 10 Home, GA15DH-BS762', 5890000, 'comp18.jpg', 31, 2, 'ASUS', 'Negro'),
(38, 'CHUWI CoreBox X', 'Core i7 Mini PC de sobremesa, 8 GB DDR3 256 GB SSD de 2,4 GHz/5 GHz Dual WiFi/Gigabit Ethernet/decodificación 4K BT4.2', 2450000, 'comp20.jpg', 11, 2, 'CHUWI', 'Gris'),
(39, 'Acer Aspire TC-895-UA92', 'Core i5-10400 de 6 núcleos, 12GB 2666MHz DDR4, 512GB NVMe M.2 SSD, 8X DVD, 802.11ax Wi-Fi 6, USB 3.2 tipo C, Windows 10 Home', 1970000, 'comp19.jpg', 20, 2, 'ACER', 'Negro'),
(40, 'HP Pavilion Gaming 16 Laptop', 'GeForce GTX 1650, Intel Core i5-10300H, 8GB DDR4 RAM, 512GB PCIe NVMe SSD, 16.1\" Full HD', 3500000, 'lap1.jpg', 23, 3, 'HP', 'Negro'),
(41, 'HAOQIN HaoBook140', 'Celeron N3350 6 GB DDR RAM 128 GB SSD FHD IPS pantalla 5.0 GHz WiFi Bluetooth 4.2 HDMI rosa', 1980000, 'lap2.jpg', 23, 3, 'HaoBook', 'Rosa'),
(42, 'HP Chromebook', 'Google Play Store: los millones de aplicaciones Android que conoces y amas en tu teléfono y tableta ahora pueden ejecutar en tu dispositivo cromado sin comprometer su velocidad, simplicidad o seguridad', 1590000, 'lap3.jpg', 21, 3, 'HP', 'Gris'),
(43, 'Acer Aspire 5 Computadora', 'AMD Ryzen 3 3200U, gráficos Vega 3, 4GB DDR4, 128GB SSD, teclado retroiluminado', 2300000, 'lap4.jpg', 12, 3, 'ACER', 'Gris'),
(44, 'Acer Nitro 5 ', 'Intel Core i5-9300H, 9ª generación, NVIDIA GeForce GTX 1650, pantalla IPS Full HD de 15.6 pulgadas, RAM 8 GB DDR4, unidad de estado sólido (SSD) 256 GB NVMe', 37000000, 'LAP5.JPG', 12, 3, 'Acer', 'negro'),
(45, 'ASUS F512JA-AS34 VivoBook 15', 'pantalla FHD de 15,6\", CPU Intel i3-1005G1, 8 GB RAM, 128 GB SSD, teclado retroiluminado.', 2100000, 'lap6.jpg', 3, 3, 'ASUS', 'Negro/Gris'),
(46, '2021 Newest HP Stream 14-inch HD Laptop', 'Intel N4020 up to 2.8 G, 4G RAM, 128G Space(64G eMMC+64G Micro', 900000, 'lap7.jpg', 23, 3, 'HP', 'Blaco'),
(47, 'Dell Inspiron 3583', 'Intel Celeron – 128GB SSD – 4GB DDR4 – 1.6GHz – Intel UHD Graphics 610', 1600000, 'lap8.jpg', 1, 3, 'Dell', 'Negro\r\n'),
(48, '2020 Lenovo ThinkPad E15', '(Intel 10th Quad Core i7-10510U, 32GB RAM, 512GB SSD+1TB HDD) Huella dactilar, Tipo-C, HDM', 7800000, 'lap9.jpg', 12, 3, 'Lenovo', 'Negro'),
(49, 'Portátil HP Chromebook de 14', 'AMD de doble núcleo A4-9120, 4 GB SDRAM, 32 GB de almacenamiento eMMC, Chrome', 2800000, 'lap10.jpg', 5, 3, 'HP', 'Negro'),
(50, 'HP portátil HD de 15,6 pulgadas', 'procesador AMD Quad-Core Ryzen 5 3500U hasta 3,70 GHz, 8 GB DDR4 RAM, 256 GB NVMe M.2 SSD, AMD Radeon Vega 8 Graphics', 2670000, 'lap11.jpg', 28, 3, 'HP', 'Rosa'),
(51, 'HP Stream - Laptop de 14 pulgadas', 'procesador AMD Dual-Core A4-9120E, memoria SDRAM de 4 GB, almacenamiento eMMC de 32 GB', 2800000, 'lap12.jpg', 31, 3, 'HP', 'Blanco'),
(52, 'LG Gram Thin & Light Laptop - 17\" IPS WQXGA (', ' Intel Core i7 1165G7 CPU, Intel Iris Xe Graphics, 16GB RAM, 1TB NVMe SSD', 2890000, 'lap13.jpg', 10, 3, 'LG', 'Negro'),
(53, '2020 HP 15.6\'\'', 'Pentium Oro 6405U 4GB DDR4 RAM 500GB HDD Windows 10', 1800000, 'lap14.jpg', 27, 3, 'HP', 'Rojo'),
(54, 'Lenovo Chromebook 2-en-1', 'ector de alto rendimiento: el Chromebook C330 está equipado con un procesador MediaTek MTK8173C, Chrome OS, 4 GB LPDDR3, 64 GB eMMC 5.1 y mucho más.', 1850000, 'lap15.jpg', 31, 3, 'Lenovo', 'Blanco'),
(55, 'Lenovo Chromebook S330', 'procesador MediaTek MT8173C, 4 GB LPDDR3, 64 GB eMMC, Chrome OS, 81JW0000US, Negocio Negro', 250000, 'lap16.jpg', 26, 3, 'Lenovo', 'Negro'),
(56, 'HP 15 Laptop', 'procesador Intel Core i5-1135G7 de 11ª generación, 8 GB de RAM, 256 GB de almacenamiento SSD', 2800000, 'lap17.jpg', 0, 3, 'HP', 'Blanco'),
(57, 'Newest_Lenovo IdeaPad Flex 5', 'Intel Core i3-8145U), 4GB RAM, 128GB SSD, Webcam, WiFi, Bluetooth, 1-Week Shoxlab Support', 2800000, 'lap19.jpg', 7, 3, 'SHOXLAB', 'Negro'),
(58, 'MSI GF63 ', 'Procesador: Core i7-9750h 2. 6-4. 5 GHz.\r\nGráficos: NVIDIA GeForce GTX1660Ti 6G GDDR6.\r\nMemoria: 16 GB (8 G x 2) DDR4 2666 MHz 2 enchufes; memoria máxima 64 GB.', 3900000, 'lap20.jpg', 4, 3, 'MSI', 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 12, 1, 130000, 130000),
(2, 2, 12, 1, 130000, 130000),
(3, 3, 38, 7, 2450000, 17150000),
(4, 4, 38, 7, 2450000, 17150000),
(5, 5, 38, 7, 2450000, 17150000),
(6, 6, 39, 1, 1970000, 1970000),
(7, 8, 35, 1, 2800000, 2800000),
(8, 10, 35, 1, 2800000, 2800000),
(9, 10, 37, 1, 5890000, 5890000),
(10, 11, 58, 1, 3900000, 3900000),
(11, 11, 57, 1, 2800000, 2800000),
(12, 11, 51, 1, 2800000, 2800000),
(13, 13, 57, 1, 2800000, 2800000),
(14, 15, 55, 1, 250000, 250000),
(15, 17, 53, 1, 1800000, 1800000),
(16, 18, 57, 15, 2800000, 42000000),
(17, 19, 56, 1, 2800000, 2800000),
(18, 20, 54, 1, 1850000, 1850000),
(19, 20, 55, 1, 250000, 250000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `tipoServi` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `img_perfil`, `nivel`) VALUES
(3, 'Maria  Perez', '7262495', 'mariap@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'default.jpg', 'cliente'),
(26, 'tifany', '333333', 'sdavila@gmail.com', '1234', '', 'admin'),
(27, 'Stephany Avila', '7262495', 'stephany@hotmail.com', '46bb0ed1662d19b3be15ded058fbacb1cd979482', 'default.jpg', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(1, 3, 130000, '2021-03-14 09:03:00'),
(2, 4, 130000, '2021-03-15 10:03:42'),
(3, 5, 17150000, '2021-03-15 11:03:37'),
(4, 6, 17150000, '2021-03-15 11:03:37'),
(5, 7, 17150000, '2021-03-15 11:03:15'),
(6, 8, 1970000, '2021-03-15 11:03:30'),
(7, 9, 0, '2021-03-15 11:03:30'),
(8, 10, 2800000, '2021-03-15 11:03:39'),
(9, 11, 0, '2021-03-15 11:03:39'),
(10, 12, 8690000, '2021-03-15 12:03:41'),
(11, 13, 9500000, '2021-03-16 12:03:29'),
(12, 14, 0, '2021-03-16 12:03:40'),
(13, 15, 2800000, '2021-03-16 12:03:49'),
(14, 16, 0, '2021-03-16 12:03:49'),
(15, 17, 250000, '2021-03-16 12:03:00'),
(16, 18, 0, '2021-03-16 12:03:00'),
(17, 19, 1800000, '2021-03-16 12:03:36'),
(18, 20, 42000000, '2021-03-17 08:03:59'),
(19, 27, 2800000, '2021-03-17 10:03:12'),
(20, 28, 2100000, '2021-03-18 16:03:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
