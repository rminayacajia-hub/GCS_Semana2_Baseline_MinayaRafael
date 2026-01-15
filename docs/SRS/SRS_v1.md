# Especificación de Requisitos de Software (SRS) - Sistema de Mesa de Ayuda

## 1. Introducción
Este documento define los requisitos para el desarrollo de una API REST utilizando **C# .NET** bajo el patrón **MVC**. El sistema está diseñado para gestionar solicitudes de soporte técnico (tickets) y su ciclo de vida.

## 2. Descripción General
La aplicación permitirá a los usuarios reportar incidentes y a los técnicos gestionar la resolución de los mismos, centralizando la información en una base de datos relacional.

---

## 3. Requisitos Funcionales (RF)

| ID | Nombre del Requisito | Descripción |
| :--- | :--- | :--- |
| **REQ-01** | **Registro de Ticket** | El sistema debe permitir al usuario crear un ticket con los campos: `Titulo`, `Descripcion`, `FechaCreacion` y `Prioridad`. |
| **REQ-02** | **Asignación de Responsable** | El sistema debe permitir asignar un objeto `Usuario` con rol "Técnico" a un `Ticket` específico. |
| **REQ-03** | **Actualización de Estado** | El sistema debe permitir cambiar el estado del ticket entre las opciones: "Pendiente", "En Proceso", "Resuelto" y "Cerrado". |
| **REQ-04** | **Gestión de Usuarios** | El sistema debe permitir el registro y mantenimiento de usuarios con atributos como `Nombre`, `CorreoElectronico` y `Rol`. |
| **REQ-05** | **Comentarios de Seguimiento** | El sistema debe permitir que tanto el cliente como el técnico agreguen objetos `Comentario` asociados a un ticket. |
| **REQ-06** | **Consulta de Historial** | El sistema debe exponer un endpoint para listar todos los tickets creados por un usuario específico. |

---

## 4. Requisitos No Funcionales (RNF)

| ID | Categoría | Descripción |
| :--- | :--- | :--- |
| **REQ-07** | **Persistencia** | Los datos deben ser almacenados en una base de datos SQL Server o PostgreSQL utilizando Entity Framework Core. |
| **REQ-08** | **Seguridad** | La propiedad `Clave` de la clase `Usuario` debe almacenarse mediante un hash seguro, nunca en texto plano. |
| **REQ-09** | **Formato de Salida** | La API REST debe responder exclusivamente en formato JSON utilizando nombres de propiedades en CamelCase. |
| **REQ-10** | **Integridad** | El sistema debe impedir la eliminación física de un ticket si este tiene comentarios asociados (Integridad referencial). |

---

## 5. Estructura de Datos (Clases Principales)

Para la implementación en C#, se consideran las siguientes entidades:



* **Usuario**: `UsuarioId`, `Nombre`, `CorreoElectronico`, `Clave`, `Rol`.
* **Ticket**: `TicketId`, `Titulo`, `Descripcion`, `FechaCreacion`, `EstadoId`, `Prioridad`, `UsuarioIdCliente`, `UsuarioIdTecnico`.
* **Comentario**: `ComentarioId`, `Contenido`, `FechaPublicacion`, `TicketId`, `UsuarioId`.

---

## 6. Tecnologías
* **Backend:** .NET 8 (C#)
* **Arquitectura:** MVC (Model-View-Controller) / Web API
* **Base de Datos:** SQL Server con Entity Framework Core