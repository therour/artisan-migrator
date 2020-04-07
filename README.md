# artisan-migrator

Laravel migration only, built for separate project in case you are not using laravel as main framework but love to using its database migration,t
you may run `php artisan make:migration` or `php artisan migrate` within this package.

## Installation
- Just [Download zip](https://github.com/therour/db-migrator/archive/master.zip) **or**
- clone the repository to create this migration project `git clone git@github.com:therour/db-migrator.git`

## Configuration
- you should add configuration to `config.php` or you may use `.env` just by creating the file.
```yaml
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=root
DB_PASSWORD=
```

## Usage

Create a migration file by running command
`php artisan make:migration create_users_table`
and then you can edit the migration file inside `database` folder.

*NB:* see the [documentation by laravel](https://laravel.com/docs/6.x/migrations)

## Available commands
run `php artisan list` to show all available commands.
- db
  * `php artisan db:seed` Seed the database with records
  * `php artisan db:wipe` Drop all tables, views, and types

- make
  * `php artisan make:migration` Create a new migration file
  * `php artisan make:seeder` Create a new seeder class

- migrate
  * `php artisan migrate:fresh` Drop all tables and re-run all migrations
  * `php artisan migrate:install` Create the migration repository
  * `php artisan migrate:refresh` Reset and re-run all migrations
  * `php artisan migrate:reset` Rollback all database migrations
  * `php artisan migrate:rollback` Rollback the last database migration
  * `php artisan migrate:status` Show the status of each migration
