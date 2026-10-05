# E-Nations Docker

Start the complete game locally:

    docker compose up --build

Then open:

    http://localhost:8080

The MariaDB database is initialized automatically from db.sql on the first start.

To reset the database completely:

    docker compose down -v
    docker compose up --build

The web container serves htdocs/ as the public document root.
