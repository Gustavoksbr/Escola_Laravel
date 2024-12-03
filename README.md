## Como Executar a Aplicação

1. Clone o repositório:
    ```sh
    git clone https://github.com/Gustavoksbr/Escola_Laravel.git
    ```

2. Navegue até o diretório do projeto:
    ```sh
    cd Escola_Laravel
    ```

3. Instale as dependências:
    ```sh
    composer install
    ```

4. Clone o arquivo `.env.example` com o nome de `.env`:

    Windows:
    ```sh
    copy .env.example .env
    ```

    Linux/Mac:
    ```sh
    cp .env.example .env
    ```

5. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

7. Rode a aplicação:
    ```sh
    php artisan serve
    ```

Agora você pode acessar a aplicação em `http://localhost:8000`.
