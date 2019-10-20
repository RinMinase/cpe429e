SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `cpe429db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `cpe429db` ;

-- -----------------------------------------------------
-- Table `cpe429db`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cpe429db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpe429db`.`user_data`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cpe429db`.`user_data` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NOT NULL ,
  `middlename` VARCHAR(45) NULL ,
  `lastname` VARCHAR(45) NOT NULL ,
  `birthdate` DATE NOT NULL ,
  `gender` INT NOT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `spouse` VARCHAR(100) NULL ,
  `contatct` VARCHAR(20) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `users_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_user_data_users` (`users_id` ASC) ,
  CONSTRAINT `fk_user_data_users`
    FOREIGN KEY (`users_id` )
    REFERENCES `cpe429db`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
