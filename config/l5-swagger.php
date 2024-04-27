<?php

return [

    /*
    |--------------------------------------------------------------------------
    | OpenAPI Document Information
    |--------------------------------------------------------------------------
    |
    | The following information is used to describe your API in the generated
    | OpenAPI specification. It will be displayed in the Swagger UI.
    |
    */

    'api' => [
        'title' => 'Schedule Project API Documentation',
        'version' => '1.0.0',
        'description' => 'API documentation for the Schedule Project',
        'basePath' => '/api', // Base path for your API routes
        'consumes' => ['application/json'],
        'produces' => ['application/json'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Generate Documentation
    |--------------------------------------------------------------------------
    |
    | Set this to `true` to enable generation of API documentation.
    |
    */

    'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', false),

    /*
    |--------------------------------------------------------------------------
    | Save Generated Documentation
    |--------------------------------------------------------------------------
    |
    | Set this to `true` to save the generated OpenAPI specification to a
    | file in the `public` directory. The file will be accessible from the
    | browser.
    |
    */

    'generate_yaml_copy' => env('L5_SWAGGER_GENERATE_YAML_COPY', true),

    /*
    |--------------------------------------------------------------------------
    | Paths to Scan
    |--------------------------------------------------------------------------
    |
    | List of directories or files to scan for annotations. These directories
    | will be recursively scanned for PHP and annotations. Paths must be
    | relative to the project's root directory.
    |
    */

    'paths' => [
        base_path('app'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Security Definitionsgenerate_yaml_copy
    |--------------------------------------------------------------------------
    |
    | Optional security definitions that will be available to be used in the
    | OpenAPI specification.
    |
    */

    'security' => [],

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Define routes for accessing the Swagger UI and the API definition.
    |
    */

    'routes' => [
        'api' => 'api/documentation',
        'docs' => 'docs/api-docs.json',
        'oauth2_callback' => 'api/oauth2-callback',
        'middleware' => [],
        'prefix' => '',
        'domain' => null,
        'as' => 'l5-swagger.',
        'redirect' => null,
        'view' => 'swagger-ui::index',
    ],

];
