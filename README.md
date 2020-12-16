# PHP e Laravel (MVC)

## Versões utilizadas: Laravel v8.18.1 e PHP v7.4.13

## Passo a Passo

### Instalar XAMPP

https://www.apachefriends.org/pt_br/download.html

Obs: Após instalação, iniciar o "XAMPP Panel Control" e ativar os serviços APACHE e MYSQL.

### Instalar Composer 

https://getcomposer.org/download/

### Criar projeto com base em um teplate.

    $ composer create-project --prefer-dist laravel/laravel nome_do_projeto

### Configurar o banco de dados no arquivo .ENV 

    DB_CONNECTION=[Tipo do banco. Ex: mysql]
    DB_HOST=[Url do server]
    DB_PORT=[porta]
    DB_DATABASE=[nome_do_banco_de_dados]
    DB_USERNAME=[usuario]
    DB_PASSWORD=[senha]

Obs.: O Banco de dados deve ser criado manualmente.


### Alterar Timezone em:

    ./config/app.php

    'timezone' => 'America/Bahia',

Lista de TimeZones : https://www.php.net/manual/pt_BR/timezones.america.php


### Criar Models

Para criar uma tabela no banco de dados utilizando o Laravel é necessário criarmos um arquivo de migração, dentro de ./database/migrations:

    $ php artisan make:model [nome da tabela no singular] -m

Exemplo: 

    $ php artisan make:model produto -m

Obs: Para criação do Model o nome da tabela deve estar no singular. A tabela será criada com o mesmo nome porém no plural. 
Exemplo: Model=Produto   Tabela=Produtos

Após criação das Migrations executar o seguinte comando:

    $ php artisan migrate

### Criar os Controllers

    $ php artisan make:controller ProdutosController

### Criar as Views em : 

    ./resources/views

Exemplo de View:

    @extends('templates.template1')
    @section('content')
        <h1 class="text-center mt-4">
            <i class="fas fa-notes-medical"></i> Ficha de Consulta <i class="fas fa-notes-medical"></i>
        </h1>
    @endsection

#### Junto com as Views podemos criar Templates em :

    ./resources/views/templates

Exemplo de Template:

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/solid.css') }}">
    
    <title>LARAVEL Exemplo</title>

    </head>
    <body>

    @yield('content')   

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    
    </body>
    </html>

#### Bootstrap

https://getbootstrap.com.br/

Descompactar o arquivo baixado e copiar as pastas dist/css e dist/js em :

    ./public/assets/bootstrap

#### FontAwesome 

https://fontawesome.com/download

Baixar a versão Free for Web.

Descompactar o arquivo baixado e copiar as pastas: css , js e webfonts em:

    ./public/assets/fontawesome

### Criar as Rotas em: 

    ./routes/web.php

