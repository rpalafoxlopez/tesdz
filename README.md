<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Primeros Pasos

Correr los siguientes comandos en el orden especificado:

<pre>
   composer install
</pre>

copie el archivo

<pre>
   .env
</pre>

Cree una nueva base de datos y agreguela al archivo <span style="color:red;font-family:console">.env</span>

<pre>
   php artisan migrate
</pre>

<pre>
   php artisan db:seed
</pre>

Comando para ver los mejores promedios de todos los salones

<pre>
php artisan promedios
</pre>

Comando para ver los mejores promedios de un salon especifico

<pre>
php artisan promediosbysalon id_salon
</pre>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
