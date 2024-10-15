## Run

php artisan serve

### URLs

http://127.0.0.1:8000/blog/post/tretij-po-schetu-post

http://127.0.0.1:8000/rest/blog/post/tretij-po-schetu-post

## Info

* Установка движка на базе sqlite
* Выполнил привязку дизайна в отдельном лейауте blog-layout.htm
* Кастомизировал через partials секцию список постов с пагинацией и страницу поста
* реализовал плагин Elmigo.BlogREST для вывода контента поста в html формате

## Важно

* О WinterCMS я знаю ровно столько, сколько потребовалось для решения ТЗ, т.к. познакомился с этой cms вчера.

## Исходное тестовое задание PHP. Winter/October CMS.

Необходимо взять Plugin для Блога на Winter/October CMS и предоставить REST Api к его статьям. К примеру, `http://<server>/rest/blog/post` возвращает контент статьи блога(htm или md), а `http://<server>/blog/post` возвращает сверстанную страницу блога со всеми хедерами, футерами и т.д.
- Для стилей использовать верстку этого проекта (смотри index.html).
