CREATE TABLE `juguetes` (
  `idjuguetes` BIGINT(15) NOT NULL AUTO_INCREMENT,
  `nomjuguete` VARCHAR(60) NULL,
  `preciojuguete` DECIMAL(15,2) NULL,
  `estadojuguete` CHAR(3) NULL,
  PRIMARY KEY (`idjuguetes`));
