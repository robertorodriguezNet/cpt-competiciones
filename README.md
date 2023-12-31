# Custom Post Type Competiciones

**Competiciones** son un tipo de post que organiza la información básica de una competición.

Nombre de post: *competición*.

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

## Modificar el Post Type

Para modificar el post type tan solo es necesario desinstalar el plugin y volver a instalarlo.
Si no se ha cambiado el nombre del post type, se siguen mostrando las entradas que ya hubiera.
Si se ha modificado el nombre del post type, habra que modificar la denominación de las entradas en la
base de datos, en el campo **post-type** de la tabla **wp_post**.

## Templates

Si se quiere personalizar las vistas, hay que crear templates para cada tipo 
de vista.
Estos templates han de colocarse en el directorio raíz del tema activo.
Por ejemplo, para Astra-child, los archivos se incluirían en *wp-content\themes\hello-theme-child*.

El template para mostrar cada competición debe nombrarse *single-competicion.php*.
Para la vista de archivos, el template de debe llamar *archive-competicion.php*.
