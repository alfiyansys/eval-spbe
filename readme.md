<img src="https://menpan.go.id/site/images/logo/logo.png">


## Evaluasi SPBE

## Requirements
 - PHP 7
 - Composer
 - [Laravel Server Requirements]("https://laravel.com/docs/6.x#server-requirements")
 - MySQL

## How to run this project

1. Clone this project
2. Change the active directory to `eval-spbe`
3. Install Laravel dependencies with this command : `composer install`
4. Copy `.env.example` file to `.env`
5. Open `.env` file and change the database configurations. Don't forget to create a new database before.
6. Run `php artisan key:generate`
7. Migrate and seed the database with : `php artisan migrate --seed`
8. Run this project with : `php artisan serve`
9. Open browser and access to `http://localhost:8000` 

## Contributing

Thank you for considering contributing to this project.

## License

The eval-spbe is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
