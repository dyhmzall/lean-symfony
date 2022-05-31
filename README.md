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

Создать контроллер

> symfony console make:controller Conf
erenceController

