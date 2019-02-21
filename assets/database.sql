SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema project
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `locadora` ;

-- -----------------------------------------------------
-- Schema project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `locadora` DEFAULT CHARACTER SET utf8 ;
USE `locadora` ;

-- -----------------------------------------------------
-- Table `filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `filme` (
  `id_movie` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_movie` VARCHAR(255) NOT NULL,
  `description_movie` VARCHAR(255) NOT NULL,
  `cover_movie` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_movie`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;