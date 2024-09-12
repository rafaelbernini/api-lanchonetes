# Apresentação

Este trabalho foi desenvolvido com o objetivo de auxiliar alunos e desenvolvedores iniciantes a consumirem uma API utilizando o framework **Laravel**. Através deste projeto, você poderá aprimorar seus conhecimentos em **desenvolvimento de sistemas**, aprendendo a lidar com APIs, realizar requisições utilizando ferramentas como **Postman**, **Insomnia** e até mesmo via linha de comando com **curl**.

A API aqui apresentada foca em um cenário prático de gerenciamento de lanchonetes, onde são fornecidas rotas para criar, listar, atualizar e deletar dados de lanchonetes e produtos. Com este exemplo, o aluno terá uma base sólida para explorar e praticar as interações com APIs, algo essencial no desenvolvimento de aplicações modernas.

Esperamos que este material seja um ponto de partida útil para sua jornada no desenvolvimento de sistemas e integração de APIs, permitindo que você continue aprimorando suas habilidades na prática.


# API de Lanchonetes

Este é um projeto que oferece uma API para gerenciar lanchonetes, incluindo a criação, atualização, listagem e remoção de lanchonetes, além de gerenciar produtos como lanches, bebidas e doces.

## Testando a API

Para testar a API, você pode utilizar ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/), ou realizar requisições diretamente pelo terminal com o comando `curl`.

### Ferramentas recomendadas:

- [Postman](https://www.postman.com/)
- [Insomnia](https://insomnia.rest/)
- `curl` via terminal para fazer requisições HTTP.

## Rotas Disponíveis

Aqui estão as rotas disponíveis para consumir a API:

### **Lanchonetes**

- **GET /api/lanchonetes** — Listar todas as lanchonetes.
    ```bash
    GET http://localhost:8000/api/lanchonetes
    ```

- **POST /api/lanchonetes** — Criar uma nova lanchonete.
    ```bash
    POST http://localhost:8000/api/lanchonetes
    Body (JSON):
    {
        "nome": "Brogui Burger",
        "endereco": "Rua 123, Centro",
        "telefone": "(11) 99999-9999"
    }
    ```

- **GET /api/lanchonetes/{id}** — Exibir detalhes de uma lanchonete específica.
    ```bash
    GET http://localhost:8000/api/lanchonetes/1
    ```

- **PUT /api/lanchonetes/{id}** — Atualizar os dados de uma lanchonete.
    ```bash
    PUT http://localhost:8000/api/lanchonetes/1
    Body (JSON):
    {
        "nome": "Top Hot Dog",
        "endereco": "Rua Nova, Bairro",
        "telefone": "(11) 98888-8888"
    }
    ```

- **DELETE /api/lanchonetes/{id}** — Deletar uma lanchonete.
    ```bash
    DELETE http://localhost:8000/api/lanchonetes/1
    ```

### **Produtos**

- **GET /api/produtos** — Listar todos os produtos.
    ```bash
    GET http://localhost:8000/api/produtos
    ```

- **POST /api/produtos** — Adicionar um novo produto.
    ```bash
    POST http://localhost:8000/api/produtos
    Body (JSON):
    {
        "nome": "X-Bacon",
        "categoria": "lanche",
        "preco": 18.50,
        "lanchonete_id": 1
    }
    ```

## Exemplo de Requisições usando `curl`

- **Listar todas as lanchonetes**
```bash
curl -X GET http://localhost:8000/api/lanchonetes
```

- **Criar uma nova lanchonete**
```bash
curl -X POST http://localhost:8000/api/lanchonetes -H "Content-Type: application/json" -d '{"nome": "Brogui Burger", "endereco": "Rua 123, Centro", "telefone": "(11) 99999-9999"}'
```


- **Atualizar os dados de uma lanchonete**
```bash
curl -X PUT http://localhost:8000/api/lanchonetes/1 -H "Content-Type: application/json" -d '{"nome": "Top Hot Dog", "endereco": "Rua Nova, Bairro", "telefone": "(11) 98888-8888"}'
```

- **Deletar uma lanchonete**

```bash
curl -X DELETE http://localhost:8000/api/lanchonetes/1
```

## Instalação e Configuração ##

- **Clone o repositório:**
```bash
git clone https://github.com/seu-usuario/api-lanchonetes.git
```

- **Navegue até o diretório do projeto:**

```bash
cd api-lanchonetes
```

- **Instale as dependências:**

```bash
composer install
```

- **Configure o arquivo .env com as credenciais do banco de dados.**

Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

- **Inicie o servidor de desenvolvimento:**

```bash
php artisan serve
```

Agora você pode acessar a API no endereço http://localhost:8000.
    
### Explicação:
- **Instruções detalhadas**: O `README.md` inclui exemplos práticos de como consumir a API usando `Postman`, `Insomnia`, e `curl`, com exemplos de rotas e corpo de requisições.
- **Seções organizadas**: O arquivo apresenta uma introdução ao projeto, a lista de rotas disponíveis, exemplos de uso com `curl`, e instruções de instalação e configuração.
- **Facilidade de uso**: As informações foram escritas pensando em facilitar o entendimento para um novato que esteja testando a API.

Este arquivo serve como uma documentação básica e funcional para o consumo da API de lanchonetes.
