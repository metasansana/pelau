-- Use this file to initialize the test database.
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `proof` ;
CREATE SCHEMA IF NOT EXISTS `proof` DEFAULT CHARACTER SET utf8 ;
USE `proof` ;

-- -----------------------------------------------------
-- Table `proof`.`members`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proof`.`members` ;

CREATE  TABLE IF NOT EXISTS `proof`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
