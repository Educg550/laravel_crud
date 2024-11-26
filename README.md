# Laravel CRUD

Aplicação CRUD simples para demonstração em Laravel.

![Logo](https://mazer.dev/pt-br/laravel/b1-curso/laravel-framework-o-que-e/featured-laravel-logo.png)

## 🛠️ Tecnologias utilizadas

-   Laravel 11
-   PHP 8.x
-   MySQL

## 🚀 Executando o projeto localmente

Para rodar este projeto Laravel localmente, siga os passos abaixo:

### 1. **Clone o repositório**

Clone o repositório para o seu diretório local:

```bash
git clone https://github.com/seu-usuario/laravel-crud.git
cd laravel-crud
```

### 2. **Instale as dependências**

Instale as dependências do Composer:

```bash
composer install
```

### 3. **Crie o arquivo `.env`**

Copie o arquivo `.env.example` para um novo arquivo `.env`:

```bash
cp .env.example .env
```

### 4. **Configure a chave de aplicativo**

Gere a chave do aplicativo Laravel:

```bash
php artisan key:generate
```

### 5. **Configure o banco de dados**

No arquivo `.env`, configure as credenciais do banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### 6. **Execute as migrações**

Execute as migrações para criar as tabelas necessárias no banco de dados:

```bash
php artisan migrate
```

### 7. **Inicie o servidor local**

Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

O servidor estará disponível em `http://127.0.0.1:8000`.

---

## 🔗 Links

[![portfolio](https://img.shields.io/badge/portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://doge-dev.vercel.app/)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/educg550/)
[![deploy](https://img.shields.io/badge/deploy-000?style=for-the-badge&logo=github&logoColor=white)](https://www.seulinkdeploy.com)
