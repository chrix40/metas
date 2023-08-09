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
- MYSQL no seguinte link: https://dev.mysql.com/downloads/workbench/
- Visual Studio Code: https://code.visualstudio.com/



## Criação de Banco MySQL

Para criar o banco de dados junto com as tabelas, rode o seguinte comando abaixo no MySQL

```
CREATE DATABASE metas CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci

USE metas;

CREATE TABLE metas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    descricao varchar(255) NOT NULL,
    situacao varchar(255) NOT NULL
);

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    cpf varchar(255) NOT NULL,
    email varchar(255) NOT NULL
);
```

## Configurações Básicas: 

1. Baixe o projeto na pasta htdocs do xampp:
   ![htdocs](https://github.com/chrix40/metas/assets/74983189/0cfa65da-048c-4442-af5c-95882d636b50)

2. Já no Painel do XAMPP, Inicie o Apache juntamente com o MYSQL
![xampp](https://github.com/chrix40/metas/assets/74983189/4d6bf568-ffc7-4fd2-ace7-2867c048b8f6)

3. Altere o nome do usuário em conexao.php para o que está no seu mySQL caso não seja root:
![conexaoMetas](https://github.com/chrix40/metas/assets/74983189/31aa895f-60c2-408a-9875-9c940247614a)

4. Depois de ter feito tudo isso acesse o seguinte link:
```
http://localhost/metas/login.php
```
5. Login e Senha:
```
Login: 123.456.789-00
Password: 123456
```
 
