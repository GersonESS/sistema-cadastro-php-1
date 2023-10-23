<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbname = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);   
    //if($conexao->connect_errno){
     //   echo "Erro na Conexao";
    //}
    //else
   // {
   //     echo "Conexao realizada com sucessoo!!!!";
    //}-->
 
?> 
<!--

CREATE TABLE `formulario`.`usuarios` (
  `id` INT(11) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `sexo` VARCHAR(45) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
-->