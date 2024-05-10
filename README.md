# Creacion de proyectos Laravel MVC

## PARA CREAR PROYECTO
- ```composer create-project laravel/laravel example-app``` or ```laravel new first_project```

## INSTALAR DEPENDENCIAS
- ```composer install```

## CREACION DE MODELOS Y CONTROLADORES
` Modelo: ```php artisan make:model Note```
- Controlador: ```php artisan make:controller ```

## PARA BASES DE DATOS
- Ejecutar una migracion para crear una tabla: ```php artisan make:migration create_nombreplurar_table```, esto es solo al crear la tabla o archivo php de migrations,  luego de esto si agregas campos no es necesario ejecutarlo, para eso es necesario el siguiente comando abajo
- Mandar las migraciones a la base: ```php artisan migrate```
- Deshacer una migracion (ROLLBACK): ```php artisan migrate:rollback```
- Deshacer todas las migraciones (ROLLBACK DE TODO): ```php artisan migration:reset``` o ```php artisan migration:refresh```

## CREAR MODELO Y GENERAR MIGRACION
```php artisan make:model Author --migration```


## LEVANTAR SERVIDOR
- Ejecutar servidor laravel: ```php artisan serve```

## SI QUIERES ACTUALIZAR UN CAMPO DE UNA TABLE LO MEJOR ES CREAR UNA MIGRACION CON EL NOMBRE ```php artisan make:migration update_nombretabla_table```, ver el codigo de migrations_example