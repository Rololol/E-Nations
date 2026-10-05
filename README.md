# E-Nations

E-Nations is a browser-based geopolitical/economic strategy game built on the open-source eRep codebase.

## Current base

This repository is based on [tetreum/erep](https://github.com/tetreum/erep) and keeps its MIT license.

Included gameplay systems from the base:
- Player accounts and profiles
- Companies and work
- Training
- Articles and voting
- Congress
- Political parties
- Storage and items
- Marketplace
- Multiple currencies
- Private messages
- Chat
- Countries, regions and wars
- Scheduled game tasks

## Installation

The application is a classic PHP application and needs a PHP-capable web server plus MySQL.

1. Install PHP, Composer, Node.js/npm and MySQL.
2. Run `composer install`.
3. Run `npm install`.
4. Copy `conf.sample.php` to `conf.php` and set the database credentials.
5. Import `db.sql` into the database.
6. Run `npx grunt` to build frontend assets.
7. Point the web server document root at `htdocs/`.
8. Enable URL rewriting so requests are routed to `htdocs/index.php`.

## Configuration

Never commit `conf.php` or production credentials. The repository's `conf.sample.php` contains placeholders only.

## Cron jobs

The `crons/` directory contains scheduled game tasks. Configure them with your server's cron scheduler.

## License

E-Nations is distributed under the MIT license of the original eRep codebase. See `LICENSE` for the full license text.

Original project: https://github.com/tetreum/erep
