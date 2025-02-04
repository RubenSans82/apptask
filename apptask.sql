-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema apptask
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema apptask
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `apptask` DEFAULT CHARACTER SET utf8mb4 ;
USE `apptask` ;

-- -----------------------------------------------------
-- Table `apptask`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`users` (
  `usuarios_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  PRIMARY KEY (`usuarios_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apptask`.`states`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`states` (
  `states_id` INT NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`states_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apptask`.`tasks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`tasks` (
  `tasks_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NULL,
  `creation_date` TIMESTAMP NULL,
  `states_id` INT NULL,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`tasks_id`),
  INDEX `fk_tasks_states_idx` (`states_id` ASC) ,
  INDEX `fk_tasks_users1_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_tasks_states`
    FOREIGN KEY (`states_id`)
    REFERENCES `apptask`.`states` (`states_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tasks_users1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `apptask`.`users` (`usuarios_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
