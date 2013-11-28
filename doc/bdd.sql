SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `greg_code_igniter` ;
CREATE SCHEMA IF NOT EXISTS `greg_code_igniter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `greg_code_igniter` ;

-- -----------------------------------------------------
-- Table `greg_code_igniter`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `greg_code_igniter`.`categories` ;

CREATE TABLE IF NOT EXISTS `greg_code_igniter`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greg_code_igniter`.`post_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `greg_code_igniter`.`post_categories` ;

CREATE TABLE IF NOT EXISTS `greg_code_igniter`.`post_categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NULL,
  `category_id` INT NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_categories_categories1_idx` (`categories_id` ASC),
  CONSTRAINT `fk_post_categories_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `greg_code_igniter`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greg_code_igniter`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `greg_code_igniter`.`posts` ;

CREATE TABLE IF NOT EXISTS `greg_code_igniter`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `link` VARCHAR(255) NULL,
  `description` LONGTEXT NULL,
  `post_categories_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_posts_post_categories_idx` (`post_categories_id` ASC),
  CONSTRAINT `fk_posts_post_categories`
    FOREIGN KEY (`post_categories_id`)
    REFERENCES `greg_code_igniter`.`post_categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
