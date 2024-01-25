# Documentación de la API de Gatos

Esta documentación proporciona detalles sobre cómo interactuar con la API de gatos para obtener datos sobre estos adorables felinos.

## Base URL

La URL base para acceder a la API de gatos es:

https://tu-servidor.com/api/cats


## Obtener todos los gatos

Para obtener todos los gatos disponibles, realiza una solicitud GET a la siguiente URL:

GET /api/cats


### Parámetros de consulta opcionales

`cantidad`: Limita el número de gatos devueltos.

- GET /api/cats?cantidad=10


`tags`: Filtra los gatos por etiquetas específicas.

- GET /api/cats/{tag}


## Obtener un gato por su ID

Para obtener información detallada sobre un gato específico, realiza una solicitud GET a la siguiente URL, donde `{id}` es el ID único del gato:

GET /api/cats/{id}



