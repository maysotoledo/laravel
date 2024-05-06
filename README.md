
# Setup Docker Laravel 11 com PHP + Mysql + phpmyadmin + Redis + Node + nginx

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/maysotoledo/laravel.git
```
```sh
cd setup-docker-laravel-11
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Instale as dependências do projeto
```sh
npm install
```

Instale as dependências do projeto
```sh
npm run build
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)
# laravel11
# laravel
