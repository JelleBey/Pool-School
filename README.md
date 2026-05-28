# Pool School

Laravel website for Pool School private swimming lessons.

## Local setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

The site exposes these routes:

- `/`
- `/lessen`
- `/over`
- `/contact`
- `/inschrijven`
