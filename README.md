<p align="center">
    <a href="https://bluepundit.eu" target="_blank"><img src="https://bluepundit.eu/img/bluepundit-logo-pundit.png?1" height="100"></a><br>
</p>

## About SyntraBlog
SyntraBlog is a project that is used to demonstrate how to use Laravel to build a web
application.
It belongs to the course [PHP Programmeren met Laravel](https://www.syntra-ab.be/opleidingen/php-programmeren-met-laravel) at
[Syntra Antwerpen & Vlaams-Brabant](https://www.syntra-ab.be/).
The lecturer is [Nico Deblauwe](https://bluepundit.eu).

The project is a simple blog where users can create an account, create posts. The posts can be linked to categories.

## Requirements
The project is built using the [TALL stack](https://tallstack.dev/), more specifically [Laravel 10](https://laravel.com) for the backend,
with [Tailwind CSS](https://tailwindcss.com/)
and [Alpine.js](https://alpinejs.dev/) for the frontend.

Tooling recommended for local development:
- [Debugbar](https://github.com/barryvdh/laravel-debugbar) for displaying profiling data (free)

Other tooling used by Nico (not required):
- [Ray](https://myray.app) for sending debug info to a separate app (paid)
- [Helo](https://usehelo.com/) for email testing (paid)
- [Tinkerwell](https://tinkerwell.app/) for testing/debugging during development (paid)

## Installation instructions
For local installation in the `syntrablog` folder: clone the repository and install the dependencies:

```sh
mkdir syntrablog
cd syntrablog
git clone https://github.com/ndeblauw/syntrablog.git .
composer install
```
Copy the .env.example file to .env and set the APP_KEY
```sh
cp .env.example .env
php artisan key:generate
```


Create a database and set the credentials in the .env file.

(Re)generate the tables and seed with dummy data
```sh
php artisan migrate:fresh --seed
```

## Contributing
Any pull request from a student that improves this code is welcomed.

## Security Vulnerabilities
If you discover a security vulnerability, please send an e-mail to Nico Deblauwe via [nico@bluepundit.eu](mailto:nico@bluepundit.eu).
Security vulnerabilities will be promptly addressed.

## License
This project can only be used for educational purposes, not limited in time, nor to any institution. There are no rights to use this code for any other purpose. Please reference the orginal repository if you use this code.

