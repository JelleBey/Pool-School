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

## Container deployment

The included `Dockerfile` builds a production Apache/PHP image for Laravel:

```bash
docker build -t pool-school .
docker run --rm -p 8080:80 -e APP_URL=http://localhost:8080 pool-school
```

For production, set a stable `APP_KEY` as a Kubernetes secret. If `APP_KEY` is not provided, the container generates one at startup so the pod can still boot.
