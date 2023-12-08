# How to make a Wildcard Domain in laravel

1. Clone the repo to your local
2. Checkout new_branch

## Initial Set Up

3. Create .env file by running; create .env.example file manually if not found
```
cp .env.example .env
```

4. Install dependencies
```
composer install
```

5. Update .env with your database details

DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD

6. Generate laravel application key
```
php artisan key:generate
```

7. Migrate tables and seed data
```
php artisan migrate
```

8. Start server
```
php artisan serve
```
9. Go to your C:\Windows\system32\drivers\etc\hosts and manully create the name of the domain you want so that you can view the new domain on your system.
