# PHP e Laravel (MVC)

## Versões utilizadas: Laravel v8.18.1 e PHP v7.4.13

## Passo a Passo

### 1. Instalar XAMPP

https://www.apachefriends.org/pt_br/download.html

Obs: Após instalação, ativar os serviços APACHE e MYSQL no "XAMPP Panel Control"

### 2. Instalar Composer 

https://getcomposer.org/download/

### 3. Criar projeto com base em um teplate.

``$ composer create-project --prefer-dist laravel/laravel nome_do_projeto ``

### Configurar o banco de dados no arquivo .ENV 

    DB_CONNECTION=[Tipo do banco. Ex: mysql]
    DB_HOST=[Url do server]
    DB_PORT=[porta]
    DB_DATABASE=[nome_do_banco_de_dados]
    DB_USERNAME=[usuario]
    DB_PASSWORD=[senha]

### 4. Criar Models

Para criar uma tabela no banco de dados utilizando o Laravel é necessário criarmos um arquivo de migração, dentro de ./database/migrations:

    $ php artisan make:model [nome da tabela no singular] -m

Exemplo: 

    $ php artisan make:model Produto -m

Obs: Para criação do Model o nome da tabela deve estar no singular. A tabela será criada com o mesmo nome porém no plural. 
Exemplo: Model=Produto   Tabela=Produtos

Após criação das Migrations executar o seguinte comando:

    $ php artisan migrate

### 5. Criar os Controllers

    $ php artisan make:controller ProdutosController

### 6. Criar as Views em : 

    ./resources/views

### 7. Criar as Rotas em: 

    ./routes/web.php

