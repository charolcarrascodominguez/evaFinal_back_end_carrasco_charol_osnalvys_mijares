# API REST - TodoCamisetas
Autor: Charol Carrasco y Osnalvys Mijares

## Arquitectura

El proyecto está construido bajo una arquitectura MVC:

- index.php → Punto de entrada
- Router → Manejo de rutas con expresiones regulares
- Controllers → Lógica HTTP y validaciones
- Models → Acceso a datos con PDO
- Database → Conexión Singleton
- Migrations → Sistema versionado de creación de tablas
- Response → Respuestas JSON centralizadas

Principios aplicados:
- Separación de responsabilidades
- Patrón Singleton
- Prepared Statements (seguridad contra SQL Injection)
- RESTful design
- Dockerización completa

---

## Cómo levantar el proyecto en Visual Studio con Docker

### Requisitos
- Docker Desktop
- Visual Studio Code

### Clonar o copiar el proyecto

Abrir la carpeta en VS Code.

### 3️⃣ Levantar contenedores

Ejecutar:

docker-compose up -d --build

### Ejecutar migraciones

docker exec -it todocamisetas_app php migrations/Migration.php

Get-Content .\seed.sql | docker exec -i todocamisetas_db mysql -u root -proot todocamisetas


### Acceder a la API

http://localhost:8080/camisetas

---

## Endpoints

GET /camisetas  
POST /camisetas  
GET /precio/{camiseta_id}/{cliente_id}

---

## Regla de negocio implementada

Si el cliente es categoría "Preferencial" y la camiseta tiene precio_oferta,
se devuelve precio_oferta como precio_final.

En cualquier otro caso, se devuelve el precio base.

---

## Base de Datos

- clientes
- camisetas
- tallas
- camiseta_talla (relación muchos a muchos)

##Endpoints Consumibles

##La API TodoCamisetas dispone de los siguientes endpoints para la gestión de camisetas, clientes, tallas y cálculo de precios dinámicos.

#Camisetas
 --> Listar camisetas
GET /camisetas

#Obtiene el listado completo de camisetas registradas.

 --> Crear camiseta
POST /camisetas

#Permite registrar una nueva camiseta en el sistema.

#Clientes
 --> Listar clientes
GET /clientes

#Obtiene el listado completo de clientes.

--> Crear cliente
POST /clientes

#Permite registrar un nuevo cliente.

#Tallas
 --> Listar tallas
GET /tallas

#Obtiene el listado de tallas disponibles.
 
 --> Crear talla
POST /tallas

#Permite registrar una nueva talla.

Precio Dinámico
#Obtener precio para cliente preferencial
GET /precio/{camiseta_id}/{cliente_id}

Ejemplo:

GET /precio/1/1

#Calcula el precio final de una camiseta considerando la categoría del cliente y las reglas de negocio definidas.

#Obtener precio para cliente regular
GET /precio/1/2

#Todos estan en el achivo "TodoCamisetas_Postman_Collection.json"