1\. Arquitectura del Sistema

Se ha optado por una Arquitectura Monolítica Modular para facilitar el despliegue inicial y la gestión de la línea base, permitiendo una transición sencilla a microservicios si el requisito de escalabilidad aumenta.

2\. Componentes Principales

Módulo de Autenticación: Gestión del acceso de usuarios y técnicos mediante tokens (JWT).

Gestor de Tickets: Lógica central para la creación, edición y cambio de estados.

Motor de Notificaciones: Servicio encargado de disparar correos electrónicos según eventos en la base de datos.

Capa de Datos: Repositorio para la persistencia en una base de datos relacional (MySQL).

3\. Diagrama de Flujo de Datos (Simplificado)El Usuario envía una petición al Servidor Web .El Servidor valida la sesión y procesa la lógica en el Módulo de Tickets .Se registra la transacción en la Base de Datos .El Motor de Notificaciones detecta el cambio y envía el aviso al cliente.

