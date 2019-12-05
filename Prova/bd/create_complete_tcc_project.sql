-- MySQL Script generated by MySQL Workbench
-- Thu Dec  5 19:47:31 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema tcc_project
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `tcc_project` ;

-- -----------------------------------------------------
-- Schema tcc_project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tcc_project` ;
USE `tcc_project` ;

-- -----------------------------------------------------
-- Table `tcc_project`.`alunos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tcc_project`.`alunos` ;

CREATE TABLE IF NOT EXISTS `tcc_project`.`alunos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `curso` VARCHAR(3) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc_project`.`professors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tcc_project`.`professors` ;

CREATE TABLE IF NOT EXISTS `tcc_project`.`professors` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `area` VARCHAR(50) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc_project`.`projetos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tcc_project`.`projetos` ;

CREATE TABLE IF NOT EXISTS `tcc_project`.`projetos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aluno_id` INT(10) UNSIGNED NOT NULL,
  `professor_id` INT(10) UNSIGNED NOT NULL,
  `titulo` VARCHAR(100) NOT NULL,
  `ano` INT(4) NOT NULL,
  `semestre` TINYINT(3) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_projetos_alunos_idx` (`aluno_id` ASC),
  INDEX `fk_projetos_professors1_idx` (`professor_id` ASC),
  CONSTRAINT `fk_projetos_alunos`
    FOREIGN KEY (`aluno_id`)
    REFERENCES `tcc_project`.`alunos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projetos_professors1`
    FOREIGN KEY (`professor_id`)
    REFERENCES `tcc_project`.`professors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
