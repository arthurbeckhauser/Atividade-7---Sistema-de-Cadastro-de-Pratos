# Sistema de Cadastro de Pratos

Sistema desenvolvido em PHP e MySQL para cadastro de usuários e gerenciamento de pratos de um restaurante.

## Tecnologias utilizadas

* PHP
* MySQL
* HTML
* CSS
* XAMPP

## Funcionalidades

* Cadastrar usuários
* Listar usuários
* Cadastrar pratos
* Listar pratos
* Editar pratos
* Excluir pratos
* Identificar o usuário responsável por cada prato
* Listar pratos cadastrados por usuário

## Banco de Dados

O sistema utiliza o banco de dados `restaurante`, com duas tabelas:

* `usuarios`
* `pratos`

A tabela `pratos` possui uma chave estrangeira relacionada à tabela `usuarios`, permitindo identificar quem cadastrou cada prato.

## Como executar

1. Instale o XAMPP.
2. Inicie o **Apache** e o **MySQL** pelo painel do XAMPP.
3. Abra o **MySQL Workbench** ou **phpMyAdmin**.
4. Execute o script SQL para criar o banco de dados `restaurante`.
5. Coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP.
6. Abra o navegador.
7. Acesse:

`http://localhost/Atividade7/`

## Segurança

As operações que recebem dados fornecidos pelo usuário utilizam **Prepared Statements**, ajudando a prevenir ataques de SQL Injection.

## Estrutura do projeto

```text
ATIVIDADE 7 - SISTEMA DE CADASTRO DE PRATOS
│
├── index.php
├── conexao.php
├── README.md
│
├── usuarios/
│   ├── cadastrar.php
│   └── listar.php
│
├── pratos/
│   ├── cadastrar.php
│   ├── listar.php
│   ├── editar.php
│   └── excluir.php
│
└── css/
    └── style.css
```

## Autores

Projeto desenvolvido para a Atividade 7 - Sistema de Cadastro de Pratos.
