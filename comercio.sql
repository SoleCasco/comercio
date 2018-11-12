/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : comercio

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-12 14:43:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomyape` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES ('1', 'Sole', '12345678', 'Pellegrini 520', 'Rio Grande');
INSERT INTO `cliente` VALUES ('2', 'pepito', '23456789', 'Pellegrini 520', 'Rio Grande');
INSERT INTO `cliente` VALUES ('3', 'Cacho', '12456987', 'Isla de los estados', 'Rio Grande');

-- ----------------------------
-- Table structure for compra
-- ----------------------------
DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `formapago` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `total` float DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of compra
-- ----------------------------
INSERT INTO `compra` VALUES ('1', '2018-11-12', 'efectivo', '4320', '1');
INSERT INTO `compra` VALUES ('2', '2018-11-12', 'efectivo', '450', '2');
INSERT INTO `compra` VALUES ('3', '2018-11-12', 'tarjetacred', '525', '1');
INSERT INTO `compra` VALUES ('4', '2018-11-12', 'tarjetacred', '525', '3');

-- ----------------------------
-- Table structure for detallecompra
-- ----------------------------
DROP TABLE IF EXISTS `detallecompra`;
CREATE TABLE `detallecompra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compra_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of detallecompra
-- ----------------------------
INSERT INTO `detallecompra` VALUES ('1', '1', '2', '4');
INSERT INTO `detallecompra` VALUES ('2', '2', '1', '1');
INSERT INTO `detallecompra` VALUES ('3', '3', '1', '1');
INSERT INTO `detallecompra` VALUES ('4', '4', '1', '1');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `proveedor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('1', 'Pelota de Futbol', '500', 'Deportes', '147', '4');
INSERT INTO `producto` VALUES ('2', 'silla de algarrobo', '1200', 'Muebleria', '96', '1');

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razonsocial` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `calidad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of proveedor
-- ----------------------------
INSERT INTO `proveedor` VALUES ('1', 'Ambientar', 'fagnano', 'Alta');
INSERT INTO `proveedor` VALUES ('2', 'Rayuela', 'viedma', 'Media');
INSERT INTO `proveedor` VALUES ('3', 'Eco Libros', 'fagnano', 'Alta');
INSERT INTO `proveedor` VALUES ('4', 'ABC Deportes', 'Rosales', 'Media');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- ----------------------------
-- Records of usuario
-- ----------------------------
