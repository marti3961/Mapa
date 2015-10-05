--All query for database proyects

CREATE TABLE IF NOT EXISTS `mapa_app`.`user` (
  `id` INT NOT NULL,
  `username` VARCHAR(25) NOT NULL,
  `userlastname` VARCHAR(25) NOT NULL,
  `usermaidenname` VARCHAR(25) NOT NULL,
  `password` VARCHAR(25) NOT NULL,
  `mail` VARCHAR(60) NOT NULL,
  `birthday` DATETIME NOT NULL,
  `lastLogin` DATETIME NULL,
  `modified` DATETIME NULL,
  `created` DATETIME NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 