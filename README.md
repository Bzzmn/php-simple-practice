# La Próxima Película de Marvel

Una aplicación web simple que muestra información sobre la próxima película del Universo Cinematográfico de Marvel (MCU).

## Características

- Muestra el título de la próxima película de Marvel
- Indica cuántos días faltan para el estreno
- Muestra la fecha de estreno
- Incluye el póster de la película
- Indica cuál será la siguiente producción de Marvel
- Diseño responsive con modo claro/oscuro

## Tecnologías

- PHP 8+
- [Pico CSS](https://picocss.com/) para los estilos
- API de [whenisthenextmcufilm.com](https://whenisthenextmcufilm.com/)

## Instalación

1. Clona este repositorio
2. Asegúrate de tener PHP 8 o superior instalado
3. Inicia un servidor PHP local:

```php
php -S localhost:8000
```

4. Visita `http://localhost:8000` en tu navegador

## Estructura del Proyecto y Funcionamiento

### Archivos Principales

- `index.php`: Punto de entrada de la aplicación
- `functions.php`: Funciones auxiliares
- `consts.php`: Constantes (URLs de API)
- `styles.php`: Estilos CSS personalizados
- `classes/NextMovie.php`: Clase principal
- `templates/head.php`: Template del encabezado
- `templates/main.php`: Template del contenido principal

### Clase NextMovie

- Constructor que inicializa los datos de la película
- Método estático `get_and_create_next_movie()` para obtener y crear instancias
- Método `get_until_message()` que genera mensajes personalizados según la fecha de estreno

### Sistema de Templates

- Función `render_template()` para renderizar las vistas
- Uso de `extract()` para convertir arrays asociativos en variables
- Templates separados para mejor organización del código

### Flujo de Datos

1. Se obtienen los datos de la API
2. Se crea una instancia de `NextMovie`
3. Se procesan los datos y mensajes
4. Se renderizan los templates con la información

### Ejemplo de Uso

```php
// Crear instancia y obtener datos
$next_movie = NextMovie::get_and_create_next_movie(API_URL);

// Renderizar templates con los datos
render_template('head', ['title' => $data['title']]);
render_template('main', [
    'title' => $data['title'],
    'release_date' => $data['release_date'],
    'until_message' => $next_movie->get_until_message()
    // ...más datos
]);
```

## API

La aplicación utiliza la API pública de whenisthenextmcufilm.com para obtener la información actualizada sobre las próximas películas de Marvel. Los datos se procesan y formatean para mostrar:

- Título de la película
- Fecha de estreno
- Días restantes hasta el estreno
- Información sobre la siguiente producción
- URL del póster

## Licencia

Este proyecto es de código abierto.
