# PROJETO DE ESTUDO LARAVEL

Projeto de estudo para tirar dúvidas sobre Laravel.

## Objetivo

Um projeto de controle financeiro base para ir avançando sua complexbilidade de acordo com o aprendizado tornando inerente a familiaridade com PHP, Laravel,MariaDB, Docker e Github.

## Instalação

```bash
cd back && composer install
```

```bash
cp .env.dev .env
```

```bash
php artisan key:generate
```

```bash
cd ../ && docker-compose up -d  --build
```

```bash
docker exec -it backend php artisan migrate
```
