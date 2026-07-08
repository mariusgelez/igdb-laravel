<h1 align="center">Laravel IGDB Wrapper</h1>

<p align="center">
    This is a Laravel wrapper for version 4 of the <a href="https://api-docs.igdb.com/">IGDB API</a> (Apicalypse)
    including <a href="https://github.com/mariusgelez/igdb-laravel/blob/main/docs/90-webhooks.md">webhook handling</a>.
</p>

<p align="center">
    <a href="https://packagist.org/packages/mariusgelez/igdb-laravel">
        <img src="https://img.shields.io/packagist/v/mariusgelez/igdb-laravel?style=for-the-badge" alt="Packagist Version">
    </a>
    <a href="https://packagist.org/packages/mariusgelez/igdb-laravel">
        <img src="https://img.shields.io/packagist/dt/mariusgelez/igdb-laravel?style=for-the-badge" alt="Packagist Downloads">
    </a>
    <a href="https://github.com/mariusgelez/igdb-laravel/actions/workflows/tests.yml">
        <img src="https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/tests.yml?event=push&style=for-the-badge&logo=github&label=tests" alt="Tests">
    </a>
    <a href="https://github.com/mariusgelez/igdb-laravel/actions/workflows/code-style.yml">
        <img src="https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/code-style.yml?event=push&style=for-the-badge&logo=github&label=Code-Style" alt="Pint">
    </a>
    <a href="https://github.com/mariusgelez/igdb-laravel/actions/workflows/code-quality.yml">
        <img src="https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/code-quality.yml?event=push&style=for-the-badge&logo=github&label=Code-Quality" alt="PHPStan">
    </a>
    <a href="https://www.codefactor.io/repository/github/mariusgelez/igdb-laravel">
        <img src="https://img.shields.io/codefactor/grade/github/mariusgelez/igdb-laravel?style=for-the-badge&logo=codefactor&label=Codefactor" alt="CodeFactor">
    </a>
    <a href="https://codecov.io/gh/mariusgelez/igdb-laravel">
        <img src="https://img.shields.io/codecov/c/github/mariusgelez/igdb-laravel?style=for-the-badge&logo=codecov" alt="codecov">
    </a>
    <a href="https://packagist.org/packages/mariusgelez/igdb-laravel">
        <img src="https://img.shields.io/github/license/mariusgelez/igdb-laravel?style=for-the-badge" alt="License">
    </a>
</p>

![Cover](docs/art/cover.png)

## Basic installation

You can install this package via composer using:

```bash
composer require mariusgelez/igdb-laravel
```

The package will automatically register its service provider.

To publish the config file to `config/igdb.php` run:

```bash
php artisan igdb:publish
```

This is the default content of the config file:

```php
return [
    /*
     * These are the credentials you got from https://dev.twitch.tv/console/apps
     */
    'credentials' => [
        'client_id' => env('TWITCH_CLIENT_ID', ''),
        'client_secret' => env('TWITCH_CLIENT_SECRET', ''),
    ],

    /*
     * This package caches queries automatically (for 1 hour per default).
     * Here you can set how long each query should be cached (in seconds).
     *
     * To turn cache off set this value to 0
     */
    'cache_lifetime' => env('IGDB_CACHE_LIFETIME', 3600),
    
    /**
     * The prefix used to cache the results.
     *
     * E.g.: `[CACHE_PREFIX].75170fc230cd88f32e475ff4087f81d9`
     */
    'cache_prefix' => 'igdb_cache',

    /*
     * Path where the webhooks should be handled.
     */
    'webhook_path' => 'igdb-webhook/handle',

    /*
     * The webhook secret.
     *
     * This needs to be a string of your choice in order to use the webhook
     * functionality.
     */
    'webhook_secret' => env('IGDB_WEBHOOK_SECRET', null),
];
```

## Documentation

You will find the full documentation on [the dedicated documentation site](https://github.com/mariusgelez/igdb-laravel/tree/main/docs).

## Testing

Run the tests with:

```bash
composer test
```

## Contribution

Pull requests are welcome :)
