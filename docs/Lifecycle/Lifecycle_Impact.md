# Cambio y su Impacto por Fase

**Caso que se selecciono:** Caso 1 (Rendimiento) - RNF "≤ 2 segundos en búsquedas".

Este análisis demuestra la importancia de la Gestión de Configuración de Software (GCS), ya que un cambio sin control puede generar costos elevados y falta de trazabilidad en el proyecto "Mesa de Ayuda".

| Fase | ¿Qué cambia? | EC afectados | Riesgo si no se controla | Evidencia de validación |
| :--- | :--- | :--- | :--- | :--- |
| **Requisitos** | Actualizar el Requisito No Funcional (RNF) y sus criterios de aceptación. | `SRS_v1.md` | Ambigüedad en las metas, lo que provoca retrabajo innecesario. | Checklist firmado + revisión del PO. |
| **Diseño** | Optimización de índices en tablas o rediseño de la lógica de consultas. | `SDD_v1.md`, `database_schema.sql` | Arquitectura ineficiente o cuellos de botella en la base de datos. | Acta de Peer Review del diseño técnico. |
| **Desarrollo** | Refactorización del código de búsqueda para mejorar la velocidad de respuesta. | `/src` | Introducción de bugs en funciones que ya eran estables. | Commit con mensaje descriptivo (ej: `feat: optimize search query`). |
| **Pruebas** | Incorporación de pruebas de carga y estrés específicas para rendimiento. | `/tests` | El sistema podría fallar en producción bajo carga real aunque funcione en desarrollo. | Captura de resultados de ejecución (JMeter/K6). |

---

## Evidencia de Control de Cambios
Para asegurar la trazabilidad después de establecer la **Baseline v1.1**, cualquier cambio en los EC mencionados debe seguir el flujo de aprobación establecido y quedar registrado en el historial del repositorio.