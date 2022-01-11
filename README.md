<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pasos para instalar,configurar y desplegar la app

1.)Clonar el proyecto<br />
2.)clonar archivo .env.example en archivo .env<br />
3.)Instalar y configurar base de datos local(vease Xamp) con el nombre "offimedica"  usuario = root y la contraseña =     ..o modificar .env con los datos de la base de datos creada.<br />

DB_CONNECTION=mysql<br />
DB_HOST=127.0.0.1<br />
DB_PORT=3306<br />
DB_DATABASE=nombre de la base de datos<br />
DB_USERNAME=usuario<br />
DB_PASSWORD=contraseña<br />
<br />
4.)Intalar composer en el equipo(si aplica)<br />
5.)sobre la ruta del proyecto correr el comando "composer install"<br />
6.)Correr las migraciones con el comando "php artisan migrate"<br />
7.)correr los seeders con el comando "php artisan db:seed"<br />
8.)desplegar servidor local de la aplicacion con el comando "php artisan serve"<br />




##pasos para probar el endpoint<br />

Datos para probar :<br />


1.)installar Postman<br />
2.)la ruta para pedir un turno es : "host:port/api/v1/turns"  <br />
ejm: "localhost:8000/api/v1/turns<br />
3.) Enviar un JSON de prueba: <br />
{<br />
    "document_type":"CC",<br />
    "document_number":"1111",<br />
    "module_type":"G"<br />
}<br />
debe devolver los datos de usuario y el turno creado<br />
4.) Pruebe con los demas usuarios CC-2222 O TI-3333
