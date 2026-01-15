\# Plan de Pruebas de Software - Sistema de Mesa de Ayuda



Este documento detalla los casos de prueba funcionales para validar la lógica de negocio y la integridad de los datos en la API REST.



\## 1. Pruebas de Gestión de Tickets (Módulo Tickets)



| ID | Caso de Prueba | Precondición | Pasos | Resultado Esperado |

| :--- | :--- | :--- | :--- | :--- |

| \*\*CP-01\*\* | Creación exitosa de Ticket | Usuario autenticado con JWT | 1. Enviar POST a `/api/tickets`.<br>2. Incluir `Titulo` y `Descripcion`. | Status 201. Registro creado en MySQL con estado "Pendiente". |

| \*\*CP-02\*\* | Validación de campos obligatorios | Usuario autenticado | 1. Enviar POST a `/api/tickets` con `Titulo` vacío. | Status 400. Mensaje: "El campo Titulo es obligatorio". |

| \*\*CP-03\*\* | Asignación de Técnico | Ticket en estado "Pendiente" | 1. Enviar PUT a `/api/tickets/{id}/asignar`.<br>2. Enviar `UsuarioIdTecnico`. | Status 200. El campo `TecnicoId` se actualiza en la base de datos. |



---



\## 2. Pruebas de Flujo de Estados y Negocio



| ID | Caso de Prueba | Precondición | Pasos | Resultado Esperado |

| :--- | :--- | :--- | :--- | :--- |

| \*\*CP-04\*\* | Cambio de estado a "Resuelto" | Ticket asignado a un técnico | 1. Enviar PUT a `/api/tickets/{id}/estado`.<br>2. Setear `EstadoId` a "Resuelto". | Status 200. El Motor de Notificaciones dispara aviso al cliente. |

| \*\*CP-05\*\* | Restricción de cierre sin solución | Ticket en estado "Pendiente" | 1. Intentar cambiar estado a "Cerrado" sin comentarios técnicos. | Status 403 o 400. Error de regla de negocio. |



---



\## 3. Pruebas de Seguridad y Acceso (Módulo Autenticación)



| ID | Caso de Prueba | Precondición | Pasos | Resultado Esperado |

| :--- | :--- | :--- | :--- | :--- |

| \*\*CP-06\*\* | Inicio de Sesión Válido | Usuario registrado en DB | 1. POST a `/api/usuarios/login` con correo y clave correctos. | Status 200. Retorno de un Token JWT válido. |

| \*\*CP-07\*\* | Acceso no autorizado | Sin token JWT | 1. Intentar GET a `/api/tickets` sin cabecera de autorización. | Status 401 Unauthorized. |

| \*\*CP-08\*\* | Integridad de Clave | Registro de usuario | 1. Verificar el campo `ClaveHash` en la tabla `Usuarios`. | La clave no debe ser legible (debe estar encriptada). |



---



\## 4. Matriz de Trazabilidad (Simplificada)



A continuación se muestra la relación entre los Requisitos Funcionales (REQ) definidos en el SRS y estos Casos de Prueba (CP):







\* \*\*REQ-01 (Registro)\*\* -> Cubierto por \*\*CP-01, CP-02\*\*

\* \*\*REQ-02 (Asignación)\*\* -> Cubierto por \*\*CP-03\*\*

\* \*\*REQ-03 (Estados)\*\* -> Cubierto por \*\*CP-04, CP-05\*\*

\* \*\*REQ-05 (Comentarios)\*\* -> Cubierto por \*\*CP-05\*\* (Lógica indirecta)

