# Prospect Usuers

## Finalidade

Através desse pacote, um usuário administrador (não necessáriamente, basta estar logado e ter permissão) poderá criar um "pré-cadastro" de um novo usuário. 

Após o "pré-cadastro", o futuro usuário recebe um email com um link. Esse link contem um token (que tem um tempo de validade, normalmente 8 horas) e dá acesso ao formulário para se cadastrar como usuário da aplicação.

## Instalação

Execute o comando abaixo no terminal de sua aplicação:

```
composer require mcdev/prospect-users
```

Incorpore os recursos no seu projeto:

```
php artisan prospect:install
```

Se achar conveniente, poderá exportar o arquivo de configuração:

```
php artisan vendor:publish --tag=config
```
