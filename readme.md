# LURK (Laravel Up and Running Kit)

[![Build Status](https://travis-ci.org/tiagomapmarques/lurk.svg?branch=lurk)](https://travis-ci.org/tiagomapmarques/lurk)

LURK is a Laravel fork that includes a bunch of useful dependencies, functions and settings.

It is built for PHP developers who want a starting point for their applications (one that actually works
out-of-the-box) and are tired of managing composer dependencies, creating templates, folder structures,
authentication, administration pages and all kinds of utilities and shenanigans from scratch.

## Features

Aside from all the benefits of an active, community-driven, MVC for PHP, Lurk implements:

- **File processing** - All controllers inherit standardised file, image and zip processing functions
- **API requests** - Handling of API requests (e.g. lazy loading) is made simpler, safer and modular
- **Localisation** - Just works out-of-the-box, with no setup whatsoever (provided you translate from english)
- **Search** - Searching mechanism for models is versatile and effortless
- **Blade/Bootstrap/Sass** - Templates and basic structure for quick deployment
- **Authentication** - Fully scaffolded, tweaked and tuned-up
- **SleepingOwl** - _coming soon_
- **Demo** - _coming not so soon_
- **Stable** - Production-oriented versioning (composer.lock) and fully e2e tested
- **Also linting** - Beautiful code needs beautiful standards for programming

## Quick start

- Clone the repo
- Make sure composer and npm are installed and available from the root folder of your repo
- Install dependencies with "composer setup"
- Compile assets with "composer compile"
- Create a local environment with "composer set-local"
- Run the tests with "composer test", to make sure nothing is broken
- Run it with pride with "php artisan serve"

## Laravel

For Laravel specific documentation, please refer to the [Laravel website](http://laravel.com/docs) or their [Github page](https://github.com/laravel/laravel).

## Issues

If you discover any issues at all, please take a moment to analyse if it's a Laravel issue or a LURK issue. If indeed you found an issue with LURK (dependency issue, an introduced bug, ...), you are free to create an issue :)

## License

LURK, being based on the Laravel framework and its community, is also open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
