Проект был инициализирован командой

> symfony new guestbook --version=6.0 --php=8.1 --webapp --docker --cloud

дополнительная информация https://symfony.com/doc/current/the-fast-track/ru/3-zero.html


Запуск локального сервера для разработки

> symfony server:start -d

смотреть логи сервера в реальном времени

> symfony server:log

Продакшн урл
https://main-bvxea6i-ucbgioov6qgvs.au.platformsh.site/

Развертывание в platform.sh

> symfony cloud:deploy

# Генераторы

### Создать контроллер
> symfony console make:controller ConferenceController

### Создать сущность
> symfony console make:entity Conference

### Создать миграцию и накатить
> symfony console make:migration
> 
> symfony console doctrine:migrations:migrate

# Docker

### запустить контейнер
> docker-compose up -d

### посмотреть список контейнеров
> docker-compose ps

# PostgreSQL

### открыть клиент
> symfony run psql
> 
> docker-compose exec database psql main main

### резервная копия
> symfony run pg_dump --data-only > dump.sql
> 
> symfony run psql < dump.sql


# Добавить бандл

> symfony composer req "admin:^4"


# Админка

### Создать дфшборд

> symfony console make:admin:dashboard

### Создать CRUD

> symfony console make:admin:crud


### Фронт

> npm install
> 
> npm run build

