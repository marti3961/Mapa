--All query for database proyects


-------------------------------------------
--Table of login of users to admin the login in the application
-------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`users` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`users` (
  `id` INT NOT NULL,
  `perfil` INT NOT NULL,
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
-----------------------------------------------------
--- Table of locations it contains  all locations reported by users
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`locations` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`locations` (
  `id` INT NOT NULL,
  `userid` INT NOT NULL,
  `companyid` INT NOT NULL,
  `serviceid` INT NOT NULL,
  `latitude` VARCHAR(200) NOT NULL,
  `length` VARCHAR(200) NOT NULL,  
  `datetimeConnection` DATETIME NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 

  -----------------------------------------------------
--- Table of service it contains  all services 
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`services` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`services` (
  `id` INT NOT NULL,
  `userid` INT NOT NULL,
  `companyid` INT NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `length` VARCHAR(200) NOT NULL,
  `status` VARCHAR(20) NOT NULL,  
  `startservice` DATETIME NULL,
  `endservice` DATETIME NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 

  -----------------------------------------------------
--- Table of locations it contains  all locations reported by users
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`companies` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`companies` (
  `id` INT NOT NULL,
  `companyname` VARCHAR(200) NOT NULL,
  `companybussinename` VARCHAR(200) NOT NULL, 
  `companyrfc` VARCHAR(200) NOT NULL,  
  `maximumusers` INT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 

----------------------------------------------------
-- Table `mydb`.`authToken` for session and consume the application
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`authTokens` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`authTokens` (
  `id` INT NOT NULL,
  `userId` INT NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created` DATETIME NOT NULL,
  PRIMARY KEY (`id`, `userId`),
  INDEX `fk_authToken_user_idx` (`userId` ASC),
  UNIQUE INDEX `token_UNIQUE` (`token` ASC),
  CONSTRAINT `fk_authToken_user`
    FOREIGN KEY (`userId`)
    REFERENCES `mapa_app`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-----------------------------------------------------
--- Table cat_Perfil contains all profiles for users 
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`catPerfil` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`catPerfil` (
  `id` INT NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 


-----------------------------------------------------
--- Table cat_Perfil contains all names of countries 
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`catPais` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`catPais` (
  `id` INT NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 


-----------------------------------------------------
--- Table cat_Perfil contains all names of cities 
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`catStates` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`catStates` (
  `id` INT NOT NULL,
  `contryid` INT NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 



-----------------------------------------------------
--- Table cat_Perfil contains all names of states 
----------------------------------------------------
DROP TABLE IF EXISTS `mapa_app`.`catCities` ;
CREATE TABLE IF NOT EXISTS `mapa_app`.`catCities` (
  `id` INT NOT NULL,
  `stateid` INT NOT NULL,
  `contryid` INT NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB; 

