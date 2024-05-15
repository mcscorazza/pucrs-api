# Camada API REST

Camada responsável pela integração das aplicações com o banco de dados onde as informações de todo o fluxo são armazenadas. Para o desenvolvimento desse sistema foi escolhido o bando de dados MySQL e toda a estrutura da API foi desenvolvida utilizando o framework Laravel na versão 10. Totalmente construído na linguagem PHP, o Laravel possui diversos recursos para a criação de uma solução back-end, abstraindo todas as funções necessárias através de Modelos (Models) e Controladores (Controllers), além de possuir uma estrutura já pronta para a construção de uma API REST com uma camada de autenticação, através da biblioteca Sactum e a integração com o banco de dados através da biblioteca de ORM Eloquent.

## Instruções:

```bash
# Clone este repositório
$ git clone <https://github.com/mcscorazza/pucrs-api.git>

# Acesse a pasta do projeto no terminal/cmd
$ cd pucrs-api

# Crie um arquivo .env com os dados de conexão ao banco de dados
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pucrs_api
DB_USERNAME=root
DB_PASSWORD=

# Instale as dependências
$ composer install

# Gere a chave APP_KEY dentro do seu .env
$ php artisan key:generate

# Crie as tabelas no banco de dados
$ php artisan migrate

# Inicie o servidor
$ php artisan serve

# por padrão, o servidor inciará na porta:8000 - acesse <http://localhost:8000>

```
