# Sistema de Cadastro de Pratos

Sistema desenvolvido em **PHP e MySQL** para cadastro de usuários e gerenciamento de pratos de um restaurante.

## Tecnologias utilizadas

* PHP
* MySQL
* HTML
* CSS
* XAMPP

## Funcionalidades

### Usuários

* Cadastrar usuários
* Listar usuários
* Editar usuários
* Excluir usuários

### Pratos

* Cadastrar pratos
* Listar pratos
* Editar pratos
* Excluir pratos
* Identificar o usuário responsável por cada prato
* Listar os pratos cadastrados por usuário

## Banco de Dados

O sistema utiliza o banco de dados `restaurante`, com duas tabelas:

* `usuarios`
* `pratos`

A tabela `pratos` possui uma chave estrangeira relacionada à tabela `usuarios`, permitindo identificar qual usuário cadastrou cada prato.

## Como executar

1. Instale o **XAMPP**.
2. Inicie o **Apache** e o **MySQL** pelo painel do XAMPP.
3. Abra o **phpMyAdmin** ou MySQL Workbench.
4. Crie o banco de dados `restaurante`.
5. Execute o script SQL para criar e configurar as tabelas.
6. Coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP.
7. Abra o navegador.
8. Acesse:

```text
http://localhost:8080/arthur_beckhauser_2026/Atividade7/
```

> Caso esteja utilizando outra porta ou outro nome de pasta, altere o endereço conforme sua configuração do XAMPP.

## Segurança

As operações que recebem dados fornecidos pelo usuário utilizam **Prepared Statements**, ajudando a prevenir ataques de **SQL Injection**.

## Estrutura do projeto

```text
ATIVIDADE 7 - SISTEMA DE CADASTRO DE PRATOS
│
├── index.php
├── conexao.php
├── README.md
├── style.css
│
├── usuarios/
│   ├── cadastrar.php
│   ├── listar.php
│   ├── editar.php
│   └── excluir.php
│
└── pratos/
    ├── cadastrar.php
    ├── listar.php
    ├── editar.php
    └── excluir.php
```

## Autores

Projeto desenvolvido para a **Atividade 7 - Sistema de Cadastro de Pratos**.
Arthur Beckhauser e Felipe Alquini - DSM9
