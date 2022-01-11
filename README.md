<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pasos para instalar,configurar y desplegar la app

1.)Clonar el proyecto<br />
2.)clonar archivo .env.example en archivo .env
3.)Instalar y configurar base de datos local(vease Xamp) con el nombre "offimedica"  usuario = root y la contraseña =     ..o modificar .env con los datos de la base de datos creada.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre de la base de datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña

4.)Intalar composer en el equipo(si aplica)
4.)sobre la ruta del proyecto correr el comando "composer install"
5.)Correr las migraciones con el comando "php artisan migrate"
6.)correr los seeders con el comando "php artisan db:seed"
7.)desplegar servidor local de la aplicacion con el comando "php artisan serve"




##pasos para probar el endpoint

Datos para probar :


1.)installar Postman
2.)la ruta para pedir un turno es : "host:port/api/v1/turns"  
ejm: "localhost:8000/api/v1/turns
3.) Enviar un JSON de prueba: 
{
    "document_type":"CC",
    "document_number":"1111",
    "module_type":"G"
}
debe devolver los datos de usuario y el turno creado
4.) Pruebe con los demas usuarios CC-2222 O TI-3333
