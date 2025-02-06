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
-- Table `apptask`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`status` (
  `status_id` INT(11) NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`status_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `apptask`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`users` (
  `users_id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(255) NULL DEFAULT NULL,
  `last_name` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`users_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `apptask`.`tasks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apptask`.`tasks` (
  `tasks_id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NULL DEFAULT NULL,
  `creation_date` DATE NULL DEFAULT NULL,
  `status_id` INT(11) NULL DEFAULT NULL,
  `users_id` INT(11) NOT NULL,
  PRIMARY KEY (`tasks_id`),
  INDEX `fk_tasks_states_idx` (`status_id` ASC) ,
  INDEX `fk_tasks_users1_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_tasks_states`
    FOREIGN KEY (`status_id`)
    REFERENCES `apptask`.`status` (`status_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tasks_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `apptask`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


INSERT INTO `apptask`.`status` (`status_id`, `status`) VALUES ('0', 'Pendiente');
INSERT INTO `apptask`.`status` (`status_id`, `status`) VALUES ('1', 'En Proceso');
INSERT INTO `apptask`.`status` (`status_id`, `status`) VALUES ('2', 'Terminado');