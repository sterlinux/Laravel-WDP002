# Progetto Laravel WDP002

Progetto Laravel basato su una soluzione Docker.
Nel progetto troverai tutti i file docker che ti permetteranno di avere

- webserver basato su nginx
- mysql
- phpmyadmin
- php 8.0

Per avviare il tutto basta eseguire questo comando:

> docker compose up

Alcuni comandi importanti per eseguire le operazioni da terminale sono le seguenti:

> **docker compose run --rm  artisan**

> **docker compose run --rm  artisan migrate**

> **docker compose run --rm artisan make:model Product –migration**

> **docker compose run --rm artisan make:command TestCommand**