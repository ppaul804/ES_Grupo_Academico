-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Academico
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Academico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Academico` DEFAULT CHARACTER SET utf8 ;
USE `Academico` ;

-- -----------------------------------------------------
-- Table `Academico`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_usuario` (
  `idt_usuario` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `usr_usuario` VARCHAR(20) NOT NULL,
  `pwd_usuario` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idt_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`tb_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_grupo` (
  `idt_grupo` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `nme_grupo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idt_grupo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`tb_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_disciplina` (
  `idt_disciplina` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `nme_disciplina` VARCHAR(20) NOT NULL,
  `fk_idt_grupo` INT(3) ZEROFILL NOT NULL,
  PRIMARY KEY (`idt_disciplina`, `fk_idt_grupo`),
  INDEX `fk_Disciplina_Grupo1_idx` (`fk_idt_grupo` ASC),
  CONSTRAINT `fk_Disciplina_Grupo1`
    FOREIGN KEY (`fk_idt_grupo`)
    REFERENCES `Academico`.`tb_grupo` (`idt_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`tb_evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_evento` (
  `idt_evento` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `des_evento` VARCHAR(20) NOT NULL,
  `dta_evt_evento` DATETIME NULL,
  `fk_idt_disciplina` INT(3) ZEROFILL NOT NULL,
  `fk_idt_usuario` INT(3) ZEROFILL NOT NULL,
  PRIMARY KEY (`idt_evento`, `fk_idt_disciplina`, `des_evento`, `fk_idt_usuario`),
  INDEX `fk_Evento_Disciplina1_idx` (`fk_idt_disciplina` ASC),
  INDEX `fk_tb_evento_tb_usuario1_idx` (`fk_idt_usuario` ASC),
  CONSTRAINT `fk_Evento_Disciplina1`
    FOREIGN KEY (`fk_idt_disciplina`)
    REFERENCES `Academico`.`tb_disciplina` (`idt_disciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_evento_tb_usuario1`
    FOREIGN KEY (`fk_idt_usuario`)
    REFERENCES `Academico`.`tb_usuario` (`idt_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`tb_notacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_notacao` (
  `idt_notacao` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `des_notacao` VARCHAR(20) NOT NULL,
  `aut_notacao` VARCHAR(15) NOT NULL,
  `fk_idt_disciplina` INT(3) ZEROFILL NOT NULL,
  `fk_idt_usuario` INT(3) ZEROFILL NOT NULL,
  PRIMARY KEY (`idt_notacao`, `fk_idt_disciplina`, `fk_idt_usuario`),
  INDEX `fk_Notacao_Disciplina1_idx` (`fk_idt_disciplina` ASC),
  INDEX `fk_tb_notacao_tb_usuario1_idx` (`fk_idt_usuario` ASC),
  CONSTRAINT `fk_Notacao_Disciplina1`
    FOREIGN KEY (`fk_idt_disciplina`)
    REFERENCES `Academico`.`tb_disciplina` (`idt_disciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_notacao_tb_usuario1`
    FOREIGN KEY (`fk_idt_usuario`)
    REFERENCES `Academico`.`tb_usuario` (`idt_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`tb_arquivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`tb_arquivo` (
  `idt_arquivo` INT(3) ZEROFILL NOT NULL AUTO_INCREMENT,
  `des_arquivo` VARCHAR(20) NOT NULL,
  `aut_arquivo` VARCHAR(15) NOT NULL,
  `fk_idt_disciplina` INT(3) ZEROFILL NOT NULL,
  `fk_idt_usuario` INT(3) ZEROFILL NOT NULL,
  PRIMARY KEY (`idt_arquivo`, `fk_idt_disciplina`, `fk_idt_usuario`),
  INDEX `fk_Arquivo_Disciplina1_idx` (`fk_idt_disciplina` ASC),
  INDEX `fk_tb_arquivo_tb_usuario1_idx` (`fk_idt_usuario` ASC),
  CONSTRAINT `fk_Arquivo_Disciplina1`
    FOREIGN KEY (`fk_idt_disciplina`)
    REFERENCES `Academico`.`tb_disciplina` (`idt_disciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_arquivo_tb_usuario1`
    FOREIGN KEY (`fk_idt_usuario`)
    REFERENCES `Academico`.`tb_usuario` (`idt_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Academico`.`ta_usuario_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Academico`.`ta_usuario_grupo` (
  `fk_idt_usuario` INT(3) ZEROFILL NOT NULL,
  `fk_idt_grupo` INT(3) ZEROFILL NOT NULL,
  PRIMARY KEY (`fk_idt_usuario`, `fk_idt_grupo`),
  INDEX `fk_Usuario_has_Grupo_Grupo1_idx` (`fk_idt_grupo` ASC),
  INDEX `fk_Usuario_has_Grupo_Usuario_idx` (`fk_idt_usuario` ASC),
  CONSTRAINT `fk_Usuario_has_Grupo_Usuario`
    FOREIGN KEY (`fk_idt_usuario`)
    REFERENCES `Academico`.`tb_usuario` (`idt_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Grupo_Grupo1`
    FOREIGN KEY (`fk_idt_grupo`)
    REFERENCES `Academico`.`tb_grupo` (`idt_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
