-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Fev 01, 2010 as 12:09 AM
-- Versão do Servidor: 5.0.45
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `loja`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `usuarios`
-- 

CREATE TABLE `usuarios` (
  `nome` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idade` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `comentarios` text NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Extraindo dados da tabela `usuarios`
-- 

