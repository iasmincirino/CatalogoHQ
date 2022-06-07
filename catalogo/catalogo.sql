DROP DATABASE IF EXISTS catalogo;
CREATE DATABASE IF NOT EXISTS catalogo;
USE catalogo;
CREATE TABLE `quadrinhos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `faixa_etaria` varchar(10) NOT NULL,
  `data` date NOT NULL
)