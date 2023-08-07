# CRUD PHP 

Um CRUD básico em Linguagem PHP utilizando as seguintes tecnologias e ferramentas: 

- PHP 8
- HTML
- CSS
- Javascript
- Bootstrap
- MYSQL
- XAMPP


**Ambiente de Desenvolvimento**: Visual Studio Code

## Links para Download

- Baixe o XAMPP na versão 8.0.28/PHP 8.0.28: https://www.apachefriends.org/download.html
- MYSQL no seguinte link: https://www.mysql.com/downloads/
- Visual Studio Code: https://code.visualstudio.com/



## Criação de Banco MYSQL

Para criar o banco de dados junto com as tabelas, rode o seguinte comando abaixo

```
CREATE DATABASE metas CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci

USE metas;

CREATE TABLE metas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    descricao varchar(255) NOT NULL,
    situacao varchar(255) NOT NULL,
);

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    cpf varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
);
```

## Configurações Básicas: 

1. Baixe o projeto na pasta htdocs do xampp:
   
![htdocs](https://github.com/chrix40/metas/assets/74983189/444ebeee-d859-478d-8556-6b4f0c19472f)

2. Já no Painel do XAMPP, Inicie o Apache juntamente com o MYSQL
![xampp](https://github.com/chrix40/metas/assets/74983189/a1ced61f-9942-4778-abe7-26d2b1590c1f)

3. Altere o nome do usuário em conexao.php para o que está no seu mySQL caso não seja root:

 ![conexaoMetas](https://github.com/chrix40/metas/assets/74983189/116a1327-d137-43ee-b49b-709b6def22ce)

4. Depois de ter feito tudo isso acesse o seguinte link:
```
http://localhost:8080/metas/login.php
```
 
