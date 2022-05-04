<?php

use Illuminate\Support\Facades\Route;

/*
    5 - Create un model Movie
    php artisan make:model Movie
    6 - Create un controller che gestirà la rotta /
    php artisan make:controller PageController
    7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
    BONUS:
    Stilare il layout nei dettagli con Sass
*/

Route::get('/', 'PageController@Index')->name('home');


