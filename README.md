<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Beer and Code | Checkout integrado ao gateway de pagamentos

## Instalação

Criação do projeto olw-3

```bash
  mkdir olw-3
  cd olw-3
  curl -s "https://laravel.build/olw-3?with=mysql,redis,mailpit" | bash
```

## Instalação bash

Na pasta olw-3

```bash
  Digite: nano ~/.bashr
  Em seguida ao acessar o bash, cole o comando: alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
  Após digite ctrl + x e confirma com y (yes) e enter para sair.
```

Ainda na pasta olw-3, digite:

```bash
  ./vendor/bin/sail up -d
```

## Instale as dependências

```bash
  ./vendor/bin/sail composer require laravel/breeze --dev
  ./vendor/bin/sail artisan breeze:install
  ./vendor/bin/sail php artisan migrate
```

Por fim acesse em:

```bash
  http://localhost
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
