# Custom Post Type Competiciones

**Competiciones** son un tipo de post que organiza la información básica de una competición.
Campos que tendrá tipo:

- Título
- Extracto
- Imagen
- Edad: categoría por edades.
- Fecha
- Lugar
- Tipo: tipo de competición (pista, pista cubierta, ...)

## Instalación

Descargar el archivo zip ("cpt-competiciones.zip") e instarlo como plugin.

===

## Base de Datos

Los posts se almacenan en la tabla **wp_post** y se indica el tipo en la columna **post_type**.
**wp_post** almacena todos los tipos de post de WordPress.
Para encontrar los posts de **competiciones** hay que buscar el nombre del tipo de post *competiciones*.
