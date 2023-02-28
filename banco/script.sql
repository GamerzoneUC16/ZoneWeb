-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema gamerzonedb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gamerzonedb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gamerzonedb` DEFAULT CHARACTER SET utf8 ;
USE `gamerzonedb` ;

-- -----------------------------------------------------
-- Table `gamerzonedb`.`nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`nivel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sigla` VARCHAR(45) NOT NULL,
  `rotulo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `nivel_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_nivel1_idx` (`nivel_id` ASC) ,
  CONSTRAINT `fk_usuarios_nivel1`
    FOREIGN KEY (`nivel_id`)
    REFERENCES `gamerzonedb`.`nivel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`tipos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sigla` VARCHAR(45) NOT NULL,
  `rotulo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `resumo` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `image` VARCHAR(45) NOT NULL,
  `destaque` VARCHAR(45) NOT NULL,
  `desconto` DECIMAL(10,2) NULL,
  `tipos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produtos_tipos1_idx` (`tipos_id` ASC) ,
  CONSTRAINT `fk_produtos_tipos1`
    FOREIGN KEY (`tipos_id`)
    REFERENCES `gamerzonedb`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`telefone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(11) NOT NULL,
  `tipo` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`enderecos` (
  `id` INT NOT NULL,
  `logradouro` VARCHAR(50) NOT NULL,
  `numero` VARCHAR(5) NOT NULL,
  `bairro` VARCHAR(20) NOT NULL,
  `cidade` VARCHAR(20) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `cep` VARCHAR(8) NOT NULL,
  `complemento` VARCHAR(15) NULL,
  `tipo` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`cartao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`cartao` (
  `id` INT NOT NULL,
  `numero` VARCHAR(16) NULL,
  `validade` VARCHAR(5) NULL,
  `cvv` VARCHAR(3) NULL,
  `tipo` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `telefone_id` INT NOT NULL,
  `enderecos_id` INT NOT NULL,
  `cartao_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cliente_telefone1_idx` (`telefone_id` ASC) ,
  INDEX `fk_cliente_enderecos1_idx` (`enderecos_id` ASC) ,
  INDEX `fk_cliente_cartao1_idx` (`cartao_id` ASC) ,
  CONSTRAINT `fk_cliente_telefone1`
    FOREIGN KEY (`telefone_id`)
    REFERENCES `gamerzonedb`.`telefone` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_enderecos1`
    FOREIGN KEY (`enderecos_id`)
    REFERENCES `gamerzonedb`.`enderecos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_cartao1`
    FOREIGN KEY (`cartao_id`)
    REFERENCES `gamerzonedb`.`cartao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`email` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_email_cliente_idx` (`cliente_id` ASC) ,
  CONSTRAINT `fk_email_cliente`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`chamados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`chamados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `assunto` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `cliente_id` INT NOT NULL,
  `usuarios_id` INT NOT NULL,
  `data_final` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_chamados_cliente1_idx` (`cliente_id` ASC) ,
  INDEX `fk_chamados_usuarios1_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_chamados_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamados_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `gamerzonedb`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`frmpagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`frmpagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`pagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `parcelas` INT NULL,
  `frmpagameno_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pagamento_frmpagameno1_idx` (`frmpagameno_id` ASC) ,
  CONSTRAINT `fk_pagamento_frmpagameno1`
    FOREIGN KEY (`frmpagameno_id`)
    REFERENCES `gamerzonedb`.`frmpagamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`itempedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`itempedido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quntidade` INT NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `desconto` DECIMAL(10,2) NULL,
  `produtos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_itempedido_produtos1_idx` (`produtos_id` ASC) ,
  CONSTRAINT `fk_itempedido_produtos1`
    FOREIGN KEY (`produtos_id`)
    REFERENCES `gamerzonedb`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `preco` DECIMAL(10,2) NOT NULL,
  `desconto` INT NULL,
  `cliente_id` INT NOT NULL,
  `itempedido_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedidos_cliente1_idx` (`cliente_id` ASC) ,
  INDEX `fk_pedidos_itempedido1_idx` (`itempedido_id` ASC) ,
  CONSTRAINT `fk_pedidos_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_itempedido1`
    FOREIGN KEY (`itempedido_id`)
    REFERENCES `gamerzonedb`.`itempedido` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`estoque` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT NOT NULL,
  `data_entrada` DATE NOT NULL,
  `data_saida` DATE NOT NULL,
  `lote` VARCHAR(45) NOT NULL,
  `produtos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estoque_produtos1_idx` (`produtos_id` ASC) ,
  CONSTRAINT `fk_estoque_produtos1`
    FOREIGN KEY (`produtos_id`)
    REFERENCES `gamerzonedb`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`boleto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`boleto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vencimento` VARCHAR(45) NULL,
  `data` VARCHAR(45) NULL,
  `codbar` VARCHAR(45) NULL,
  `boletocol` VARCHAR(45) NULL,
  `cliente_id` INT NOT NULL,
  `pedidos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_boleto_pedidos1_idx` (`pedidos_id` ASC) ,
  INDEX `fk_boleto_cliente1_idx` (`cliente_id` ASC) ,
  CONSTRAINT `fk_boleto_pedidos1`
    FOREIGN KEY (`pedidos_id`)
    REFERENCES `gamerzonedb`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
.
