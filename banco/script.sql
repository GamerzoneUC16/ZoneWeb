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
-- Table `gamerzonedb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
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
  `titulo` VARCHAR(80) NOT NULL,
  `descricao` MEDIUMTEXT NOT NULL,
  `resumo` TEXT NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `destaque` VARCHAR(10) NOT NULL,
  `desconto` DECIMAL(10,2) NULL,
  `tipo_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produtos_tipos1_idx` (`tipo_id` ASC) ,
  CONSTRAINT `fk_produtos_tipos1`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `gamerzonedb`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` TEXT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`enderecos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(50) NOT NULL,
  `numero_end` VARCHAR(5) NOT NULL,
  `bairro` VARCHAR(20) NOT NULL,
  `cidade` VARCHAR(20) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `cep` VARCHAR(8) NOT NULL,
  `complemento` VARCHAR(15) NULL,
  `tipo_end` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`telefone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_tel` VARCHAR(11) NOT NULL,
  `tipo_tel` VARCHAR(15) NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_telefone_cliente1_idx` (`cliente_id` ASC) ,
  CONSTRAINT `fk_telefone_cliente1`
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
  `titulo` VARCHAR(45) NOT NULL,
  `motivo` TEXT NOT NULL,
  `assunto` VARCHAR(45) NOT NULL,
  `status_ch` VARCHAR(45) NOT NULL,
  `data_in` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `cliente_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `data_final` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_chamados_cliente1_idx` (`cliente_id` ASC) ,
  INDEX `fk_chamados_usuarios1_idx` (`usuario_id` ASC) ,
  CONSTRAINT `fk_chamados_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamados_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `gamerzonedb`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`cartao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`cartao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(16) NULL,
  `validade` VARCHAR(5) NULL,
  `cvv` VARCHAR(3) NULL,
  `tipo` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`frmpagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`frmpagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `cartao_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_frmpagamento_cartao1_idx` (`cartao_id` ASC) ,
  CONSTRAINT `fk_frmpagamento_cartao1`
    FOREIGN KEY (`cartao_id`)
    REFERENCES `gamerzonedb`.`cartao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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
  `quantidade` INT NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `desconto` DECIMAL(10,2) NULL,
  `produto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_itempedido_produtos1_idx` (`produto_id` ASC) ,
  CONSTRAINT `fk_itempedido_produtos1`
    FOREIGN KEY (`produto_id`)
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
  `produto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estoque_produtos1_idx` (`produto_id` ASC) ,
  CONSTRAINT `fk_estoque_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `gamerzonedb`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`boleto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`boleto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vencimento` VARCHAR(45) NOT NULL,
  `data` DATETIME NOT NULL,
  `codbar` VARCHAR(45) NOT NULL,
  `cliente_id` INT NOT NULL,
  `pedido_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_boleto_pedidos1_idx` (`pedido_id` ASC) ,
  INDEX `fk_boleto_cliente1_idx` (`cliente_id` ASC) ,
  CONSTRAINT `fk_boleto_pedidos1`
    FOREIGN KEY (`pedido_id`)
    REFERENCES `gamerzonedb`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `gamerzonedb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`carac_tec`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`carac_tec` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `caracs` TEXT NOT NULL,
  `produto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_carac_tec_produtos1_idx` (`produto_id` ASC) ,
  CONSTRAINT `fk_carac_tec_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `gamerzonedb`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gamerzonedb`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gamerzonedb`.`images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `caminho` VARCHAR(55) NOT NULL,
  `principal_img` BIT NOT NULL,
  `produto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_images_produtos1_idx` (`produto_id` ASC) ,
  CONSTRAINT `fk_images_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `gamerzonedb`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
