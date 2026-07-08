# Introduction

{.inline-images}
[![Packagist Version](https://img.shields.io/packagist/v/mariusgelez/igdb-laravel?style=for-the-badge)](https://packagist.org/packages/mariusgelez/igdb-laravel)
[![Packagist Downloads](https://img.shields.io/packagist/dt/mariusgelez/igdb-laravel?style=for-the-badge)](https://packagist.org/packages/mariusgelez/igdb-laravel)
[![tests](https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/tests.yml?event=push&style=for-the-badge&logo=github&label=tests)](https://github.com/mariusgelez/igdb-laravel/actions/workflows/tests.yml)
[![Pint](https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/code-style.yml?event=push&style=for-the-badge&logo=github&label=Code-Style)](https://github.com/mariusgelez/igdb-laravel/actions/workflows/code-style.yml)
[![PHPStan](https://img.shields.io/github/actions/workflow/status/mariusgelez/igdb-laravel/code-quality.yml?event=push&style=for-the-badge&logo=github&label=Code-Quality)](https://github.com/mariusgelez/igdb-laravel/actions/workflows/code-quality.yml)
[![CodeFactor](https://img.shields.io/codefactor/grade/github/mariusgelez/igdb-laravel?style=for-the-badge&logo=codefactor&label=Codefactor)](https://www.codefactor.io/repository/github/mariusgelez/igdb-laravel)
[![CodeCov](https://img.shields.io/codecov/c/github/mariusgelez/igdb-laravel?style=for-the-badge&logo=codecov)](https://codecov.io/gh/mariusgelez/igdb-laravel)
[![GitHub](https://img.shields.io/github/license/mariusgelez/igdb-laravel?style=for-the-badge)](https://packagist.org/packages/mariusgelez/igdb-laravel)

![Cover](art/cover.png){style="width: 100%"}

This is a Laravel wrapper for version 4 of the [IGDB API](https://api-docs.igdb.com/) (Apicalypse) including [webhook handling](90-webhooks.md).

It handles authentication and caching of the IGDB API automatically.

## Example

```php
// torchlight! {"lineNumbers": false}
use MariusGelez\IGDBLaravel\Models\Game;

$game = Game::where('name', 'Fortnite')->first();
```
