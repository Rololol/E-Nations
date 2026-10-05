# E-Nations

E-Nations is a browser-based political, economic and social strategy game built on the open-source eRep codebase.

## Included gameplay

- Player registration and login
- Chat and private messages
- Companies and work
- Training
- Articles and voting
- Congress and political parties
- Storage
- Marketplace and item trading
- Multiple currencies
- Country and regional systems
- Cron jobs for scheduled game logic

## Requirements

- PHP 7.x or a compatible PHP runtime for the legacy dependency stack
- MySQL/MariaDB
- Composer
- Node.js + npm
- Apache with mod_rewrite or Nginx
- The web server document root must point to `htdocs/`

> This repository is a PHP application and is not a Vercel/Next.js application.

## Local setup

1. Install PHP, Composer, Node.js and MySQL/MariaDB.
2. Run `composer install`.
3. Run `npm install`.
4. Copy `conf.sample.php` to `conf.php` if you want a separate local configuration.
5. Create/import the database from `db.sql`.
6. Run `grunt` to build the frontend assets.
7. Configure Apache/Nginx so `htdocs/` is the public document root.
8. Make sure PHP can execute `htdocs/index.php`.

### Database configuration

The committed `conf.php` uses environment variables when present:

- `ENATIONS_DB_HOST`
- `ENATIONS_DB_NAME`
- `ENATIONS_DB_USER`
- `ENATIONS_DB_PASSWORD`
- `ENATIONS_COOKIE_DOMAIN`
- `ENATIONS_PASSWORD_HASH`

For production, set these values in the hosting environment instead of committing credentials.

## Cron jobs

The `crons/` directory contains scheduled game tasks such as elections, law proposals and chat cleanup. Configure the scripts in your server's cron scheduler.

## License

The original eRep code is distributed under the MIT license. E-Nations keeps the original license notice and is developed as a derivative project.

## Docker

The fastest way to run the game is:

```bash
docker compose up --build
```

Then open `http://localhost:8080`. MariaDB is initialized automatically from `db.sql` on the first run.
