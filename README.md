
# Places API

This is a simple RESTful API built with Laravel 12 and PostgreSQL, containerized using Docker.

---

## 🇧🇷 Instruções em Português

### 🚀 Como executar o projeto

1. Certifique-se de que você tem o Docker e Docker Compose instalados.
2. No terminal, execute o seguinte comando para subir o ambiente:
   ```bash
   docker compose up -d
   ```
3. Acesse o container da aplicação e rode as migrations:
   ```bash
   docker exec -it places-api-app php artisan migrate:fresh
   ```
4. A API estará disponível em: [http://localhost:8000/api/places](http://localhost:8000/api/places)

### 🔍 Endpoints disponíveis

| Método | Endpoint             | Descrição                |
|--------|----------------------|--------------------------|
| GET    | /api/places          | Listar todos os lugares  |
| POST   | /api/places          | Criar um novo lugar      |
| GET    | /api/places/{id}     | Obter um lugar específico|
| PUT    | /api/places/{id}     | Atualizar um lugar       |
| DELETE | /api/places/{id}     | Remover um lugar         |

### ✅ Testes

Para executar os testes:
```bash
docker exec -it places-api-app php artisan test
```

---

## 🇺🇸 Instructions in English

### 🚀 How to run the project

1. Make sure Docker and Docker Compose are installed.
2. In your terminal, run the following command to start the environment:
   ```bash
   docker compose up -d
   ```
3. Enter the application container and run the migrations:
   ```bash
   docker exec -it places-api-app php artisan migrate:fresh
   ```
4. The API will be available at: [http://localhost:8000/api/places](http://localhost:8000/api/places)

### 🔍 Available Endpoints

| Method | Endpoint             | Description              |
|--------|----------------------|--------------------------|
| GET    | /api/places          | List all places          |
| POST   | /api/places          | Create a new place       |
| GET    | /api/places/{id}     | Get a specific place     |
| PUT    | /api/places/{id}     | Update a place           |
| DELETE | /api/places/{id}     | Delete a place           |

### ✅ Tests

To run the tests:
```bash
docker exec -it places-api-app php artisan test
```
