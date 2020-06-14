# Curateship

## Users module migration

```
php artisan module:migrate Users
```

This will create all db tables.

## Users module seeder

```
php artisan module:seed Users
```

This will seed all called classes at `Modules/Users/Database/Seeders/UsersDatabaseSeeder.php`.

## Seed dummy users from factory

```
php artisan db:seed --class=Modules\\Users\\Database\\Seeders\\TestUsersSeeder
```

This will create dummy users specified on `Modules/Users/Database/Seeders/TestUsersSeeder.php`
