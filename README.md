# laravel API bands

## Introduction

Esta API foi criada como parte do meu aprendizado em Laravel. Existem alguns caminhos de teste que utilizei durante o desenvolvimento. A API permite a manipulação de dados de bandas musicais, incluindo a criação, leitura e filtragem de bandas. Além disso, há rotas de teste para aprendizado. Foi muito legal usar o framework Laravel e estou animado para continuar aprendendo e contribuindo para projetos futuros, esse pode ser o inicio de uma nova fase como DEV o laravel vai facilitar minha vida como backend.

## API Routes

### Autenticação

### Rotas de Teste

- `GET /hello/{nome}`
  - Retorna uma mensagem de saudação personalizada.
  - Exemplo de resposta: `hello laravel from your friend {nome} bye`

### Rotas de Bandas

- `GET /bands`
  - Retorna todas as bandas documentadas.
  - Tratamento de erros incluído para garantir que a resposta seja válida.

- `GET /bands/{id}`
  - Retorna uma banda específica pelo ID.
  - Tratamento de erros incluído para garantir que o ID fornecido seja válido e que a banda exista.

- `GET /bands/genre/{genre}`
  - Retorna bandas filtradas por gênero.
  - Tratamento de erros incluído para garantir que o gênero fornecido seja válido.

- `POST /bands/post/{request}`
  - Cria uma nova banda.
  - Validação de dados incluída para garantir que os dados fornecidos no request sejam válidos.
  - Tratamento de erros incluído para garantir que a criação da banda seja bem-sucedida.

## Tratamento de Erros

Todas as rotas de bandas incluem tratamento de erros para garantir que os dados fornecidos sejam válidos e que as operações sejam bem-sucedidas. Em caso de erro, uma resposta apropriada é retornada ao cliente.

## Validação de Dados

A rota `POST /bands/post/{request}` inclui validação de dados para garantir que os dados fornecidos no request sejam válidos. Isso inclui verificar campos obrigatórios e formatos de dados.

## Exemplos de Bandas Documentadas

A API atualmente documenta 5 bandas. Cada banda tem seus dados validados e qualquer operação realizada sobre elas inclui tratamento de erros para garantir a integridade dos dados.

## Conclusão

Esta API foi desenvolvida como parte do meu aprendizado em Laravel. Existem algumas rotas de teste que utilizei durante o desenvolvimento. A API permite a manipulação de dados de bandas musicais com tratamento de erros e validação de dados para garantir a integridade das operações.
## Instalação
1. Clone este repositório para o seu ambiente local.
2. Certifique-se de ter o PHP e o Composer instalados.
3. Execute `composer install` para instalar as dependências do projeto.
4. no seu terminal rode php artisan serve

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
