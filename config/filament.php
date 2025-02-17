<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect Filament
    | to any Pusher-compatible websockets server.
    |
    | This will allow your users to receive real-time notifications.
    |
    */

    'broadcasting' => [

        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store files. You may use
    | any of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Assets Path
    |--------------------------------------------------------------------------
    |
    | This is the directory where Filament's assets will be published to. It
    | is relative to the `public` directory of your Laravel application.
    |
    | After changing the path, you should run `php artisan filament:assets`.
    |
    */

    'assets_path' => null,


    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    |
    | This is the directory that Filament will use to store cache files that
    | are used to optimize the registration of components.
    |
    | After changing the path, you should run `php artisan filament:cache-components`.
    |
    */

    'cache_path' => base_path('bootstrap/cache/filament'),


    /*
    |--------------------------------------------------------------------------
    | Configuración de Autenticación para Filament
    |--------------------------------------------------------------------------
    |
    | Define el guardia y las rutas de autenticación de Filament.
    |
    */

    'auth' => [
        'guard' => 'web', //old filament
        'pages' => [
            'login' => \Filament\Http\Livewire\Auth\Login::class,
        ],
    ],
    

    /*
    |--------------------------------------------------------------------------
    | Middleware de Autenticación
    |--------------------------------------------------------------------------
    |
    | Configura los middlewares que Filament usará para la autenticación.
    |
    */

    'middleware' => [
        'auth',
        'can:access-admin', // Asegura que solo los usuarios con este permiso puedan entrar
    ],



    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    |
    | This sets the delay before loading indicators appear.
    |
    | Setting this to 'none' makes indicators appear immediately, which can be
    | desirable for high-latency connections. Setting it to 'default' applies
    | Livewire's standard 200ms delay.
    |
    */

    'livewire_loading_delay' => 'default',

        /*
    |--------------------------------------------------------------------------
    | Filament Panels
    |--------------------------------------------------------------------------
    |
    | Define the panels for your application.
    |
    */

    'default_panel' => 'admin',

    // 'panels' => [
    //     'admin' => [
    //         'id' => 'admin',
    //         'path' => 'admin',
    //         'login' => \Filament\Http\Livewire\Auth\Login::class,
    //     ],
    // ],

    'panels' => [
        'admin' => App\Providers\Filament\AdminPanelProvider::class,
    ],


];
