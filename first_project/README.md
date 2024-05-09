## Uso de Laravel
### Observaciones: 
- La carpeta vendor es el equivalente a node_modules en node.
- La carpeta storage es para guardar archivos por ejemplos avatar de usuario, pdfs etc.
- La carpeta app es el equivalente a src en node express, aqui va toda tu logica papi

## Comandos Artisan
- Instalar dependencias ```composer install```
- Ejecutar el server: ```php artisan serve```
- Crear Migraciones archivo en carpeta: ```php artisan make:migration nombre_que_daras_a_migracion```
- Ejecutar migracion para crearla en la base de datos: ```php artisan migrate```