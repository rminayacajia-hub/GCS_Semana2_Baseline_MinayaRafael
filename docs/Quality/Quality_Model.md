# Calidad del Software - Proyecto Mesa de Ayuda
**Modelo seleccionado:** ISO/IEC 25010

| Atributo | Definición (1 línea) | Métrica verificable | EC que lo soporta |
| :--- | :--- | :--- | :--- |
| Mantenibilidad | Facilidad para modificar sin romper código existente. | Cobertura de pruebas unitarias >= 80% en lógica de negocio. | /tests, /src |
| Seguridad | Protección contra acceso no autorizado y robo de datos. | 0 vulnerabilidades críticas en el escaneo de dependencias. | /config, /src, package.json |
| Usabilidad | Facilidad de uso y aprendizaje para el usuario. | Tiempo promedio de creación de un ticket <= 45 segundos. | /src, SRS_v1.md |
| Fiabilidad | Capacidad de funcionamiento correcto bajo condiciones normales. | Tasa de éxito en creación de tickets >= 99.9%. | /src, /db |
| Eficiencia | Desempeño del sistema respecto a recursos usados. | Tiempo de respuesta del servidor <= 300ms en consultas. | /src, /db, /config |
| Compatibilidad | Capacidad de operar en distintos entornos y navegadores. | 100% funcional en las últimas 2 versiones de Chrome y Edge. | /src, package.json, SRS_v1.md |

### Métricas "Estrella"
* **Uptime del Sistema:** El sistema debe estar disponible el 99.5% del tiempo.
* **Integridad de Base de Datos:** 0 inconsistencias de datos tras recuperaciones de sistema.