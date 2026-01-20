EC lista y justificación

En este apartado se definen los 8 Elementos de Configuración (EC) críticos para el proyecto Mesa de Ayuda:

| EC | Ubicación | ¿Por qué es EC? | Quién lo modifica |
| :--- | :--- | :--- | :--- |
| SRS_v1.md | /docs/SRS/ | Define requisitos; cambia el alcance y pruebas. | Analista / PO |
| SDD_v1.md | /docs/SDD/ | Define la arquitectura; guía el desarrollo técnico. | Arquitecto / Dev |
| config.example | /config/ | Parametriza el sistema; afecta ejecución. | DevOps / Dev |
| src/ | /src/ | Código fuente; contiene la lógica de negocio del sistema. | Desarrollador |
| tests/ | /tests/ | Valida calidad; detecta regresiones. | QA / Dev |
| database_schema.sql | /db/ | Estructura de datos; impacta la persistencia y modelos. | DBA / Dev |
| package.json | / | Gestión de dependencias; asegura consistencia de librerías. | DevOps / Dev |
| README.md | / | Guía de configuración; asegura que el equipo pueda desplegar. | Dev / Líder |