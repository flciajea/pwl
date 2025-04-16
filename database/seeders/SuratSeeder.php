-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tubes_pwl
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tubes_pwl
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tubes_pwl` DEFAULT CHARACTER SET utf8 ;
USE `tubes_pwl` ;

-- -----------------------------------------------------
-- Table `tubes_pwl`.`role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tubes_pwl`.`role` ;

CREATE TABLE IF NOT EXISTS `tubes_pwl`.`role` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `namarole` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tubes_pwl`.`Fakultas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tubes_pwl`.`Fakultas` ;

CREATE TABLE IF NOT EXISTS `tubes_pwl`.`Fakultas` (
  `idFakultas` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`idFakultas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tubes_pwl`.`ProgramStudi`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tubes_pwl`.`ProgramStudi` ;

CREATE TABLE IF NOT EXISTS `tubes_pwl`.`ProgramStudi` (
  `idProgramStudi` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `Fakultas_idFakultas` INT NOT NULL,
  PRIMARY KEY (`idProgramStudi`),
  INDEX `fk_Program Studi_Fakultas1_idx` (`Fakultas_idFakultas` ASC) ,
  CONSTRAINT `fk_Program Studi_Fakultas1`
    FOREIGN KEY (`Fakultas_idFakultas`)
    REFERENCES `tubes_pwl`.`Fakultas` (`idFakultas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tubes_pwl`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tubes_pwl`.`users` ;

CREATE TABLE IF NOT EXISTS `tubes_pwl`.`users` (
  `nip` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NULL,
  `password` VARCHAR(50) NULL,
  `email` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `ProgramStudi_idProgramStudi` INT NOT NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`nip`),
  INDEX `fk_users_ProgramStudi1_idx` (`ProgramStudi_idProgramStudi` ASC) ,
  INDEX `fk_users_role1_idx` (`role_id` ASC) ,
  CONSTRAINT `fk_users_ProgramStudi1`
    FOREIGN KEY (`ProgramStudi_idProgramStudi`)
    REFERENCES `tubes_pwl`.`ProgramStudi` (`idProgramStudi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_role1`
    FOREIGN KEY (`role_id`)
    REFERENCES `tubes_pwl`.`role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tubes_pwl`.`Surat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tubes_pwl`.`Surat` ;

CREATE TABLE IF NOT EXISTS `tubes_pwl`.`Surat` (
  `idSurat` INT NOT NULL AUTO_INCREMENT,
  `status` ENUM('applied', 'approved', 'finished', 'rejected') NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `jenis` VARCHAR(255) NULL,
  `no_mk` VARCHAR(45) NULL,
  `nama_mk` VARCHAR(45) NULL,
  `semester` ENUM('genap', 'ganjil') NULL,
  `nrp` VARCHAR(45) NULL,
  `detail_surat` VARCHAR(255) NULL,
  `users_nip` INT NOT NULL,
  PRIMARY KEY (`idSurat`),
  INDEX `fk_Surat_Users1_idx` (`users_nip` ASC) ,
  CONSTRAINT `fk_Surat_Users1`
    FOREIGN KEY (`users_nip`)
    REFERENCES `tubes_pwl`.`users` (`nip`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
