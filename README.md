[Desafio Técnico - Backend PHP](https://drive.google.com/file/d/1LZItvx7phw7-xA0x7QvaOyOhPH-8sDd9/view?usp=sharing)

### Português:

# API do Projeto Schedule

Este projeto implementa uma API RESTful para gerenciamento de atividades, desenvolvida utilizando o framework Laravel 9.52.16 e banco de dados MySQL. Inclui recursos como operações CRUD para atividades, autenticação de usuário usando Laravel Sanctum, documentação Swagger, testes unitários com PHPUnit e testes no Postman. Abaixo está uma visão detalhada dos componentes do projeto e como eles atendem aos requisitos do desafio fornecido:

## Componentes do Projeto:

### 1. Modelo de Atividade (`Activity.php`):
- Gerencia os dados da atividade, incluindo título, data de início, data de vencimento, data de conclusão, status, descrição, ID do usuário e ID do tipo.
- Define relacionamentos com outras entidades, como usuários, para garantir a integridade dos dados.

### 2. Controlador de Atividade (`ActivityController.php`):
- Implementa operações CRUD para atividades.
- Valida os dados das solicitações recebidas para garantir consistência e segurança.
- Trata erros e retorna respostas HTTP apropriadas.

### 3. Testes PHPUnit (`ActivityTest.php` e `ActivityControllerTest.php`):
- Testam a funcionalidade do modelo `Activity` e dos métodos do `ActivityController`.
- Verificam a criação, atualização e exclusão de atividades com dados válidos e inválidos.
- Verificam a integridade dos dados após operações.

### 4. Testes no Postman:
- Testam minuciosamente todas as rotas e solicitações usando o Postman.
- Validam o comportamento da API em vários cenários e casos extremos.

### 5. Documentação Swagger:
- Integrou o Swagger para gerar documentação detalhada para a API.
- Fornece uma interface interativa para explorar e testar os endpoints da API.
- Facilita a compreensão e o uso da API pelos desenvolvedores.

## Atendimento aos Requisitos do Desafio:

### Conhecimento e Uso de Recursos do Laravel:
- Alavancou os recursos do framework Laravel, como Eloquent ORM, roteamento, middleware e validação, de forma eficaz em todo o projeto.
- Organizou a estrutura do projeto de acordo com as convenções do Laravel.

### Organização e Documentação do Código:
- Manteve o código limpo e bem organizado seguindo os padrões PSR.
- Documentou extensivamente o código, incluindo comentários de métodos e anotações do Swagger.

### Lógica de Programação e Nível de Abstração:
- Implementou soluções lógicas e abstratas para gerenciar as interações de atividades e usuários.
- Garantiu uma clara separação de preocupações entre as classes de modelo, controlador e teste.

### Princípios SOLID:
- Adotou os princípios SOLID projetando classes com responsabilidades únicas e inversão de dependência.

### Testes Unitários com PHPUnit:
- Desenvolveu testes abrangentes com PHPUnit para validar as funcionalidades do modelo e do controlador.
- Alcançou alta cobertura de código para garantir robustez e confiabilidade.

### Recursos de API RESTful:
- Implementou uma API totalmente RESTful com endpoints CRUD para atividades.
- Forneceu opções de filtragem para atividades por intervalo de datas, conforme especificado no desafio.

### Uso de Recursos SQL:
- Utilizou migrações do Laravel para gerenciar alterações no esquema do banco de dados e garantir consistência em todos os ambientes.
- Empregou consultas SQL de forma eficiente para recuperar e manipular dados conforme requisitos comerciais.

## Instruções para Uso:

1. Clone o repositório para sua máquina local.
2. Instale as dependências do Composer usando `composer install`.
3. Configure o arquivo `.env` com suas credenciais do banco de dados.
4. Execute as migrações para criar as tabelas necessárias usando `php artisan migrate`.
5. Inicie o servidor de desenvolvimento com `php artisan serve`.
6. Acesse os endpoints da API conforme documentado na documentação Swagger ou na coleção Postman.

Para instruções mais detalhadas e documentação da API, consulte a documentação Swagger ou a coleção Postman fornecidas no repositório.

---
**Observação:** Se selecionado, podemos agendar uma sessão de revisão de código para discutir o código entregue em detalhes e responder a quaisquer dúvidas ou preocupações.

### English:

# Schedule Project API

This project implements a RESTful API for activity management, developed using the

 Laravel framework 9.52.16 and MySQL database. It includes features such as CRUD operations for activities, user authentication using Laravel Sanctum, Swagger documentation, unit testing with PHPUnit, and Postman testing. Below is a detailed overview of the project components and how they meet the requirements of the provided challenge:

## Project Components:

### 1. Activity Model (`Activity.php`):
- Manages activity data, including title, start date, due date, completion date, status, description, user ID, and type ID.
- Defines relationships with other entities, such as users, to ensure data integrity.

### 2. Activity Controller (`ActivityController.php`):
- Implements CRUD operations for activities.
- Validates request data to ensure consistency and security.
- Handles errors and returns appropriate HTTP responses.

### 3. PHPUnit Tests (`ActivityTest.php` and `ActivityControllerTest.php`):
- Test the functionality of the `Activity` model and `ActivityController` methods.
- Verify the creation, update, and deletion of activities with valid and invalid data.
- Check data integrity after operations.

### 4. Postman Tests:
- Thoroughly test all routes and requests using Postman.
- Validate API behavior in various scenarios and edge cases.

### 5. Swagger Documentation:
- Integrated Swagger to generate detailed documentation for the API.
- Provides an interactive interface to explore and test API endpoints.
- Facilitates understanding and usage of the API by developers.

## Meeting Challenge Requirements:

### Knowledge and Use of Laravel Resources:
- Leveraged Laravel framework resources such as Eloquent ORM, routing, middleware, and validation effectively throughout the project.
- Organized project structure according to Laravel conventions.

### Code Organization and Documentation:
- Kept the code clean and well-organized following PSR standards.
- Extensively documented the code, including method comments and Swagger annotations.

### Programming Logic and Abstraction Level:
- Implemented logical and abstract solutions to manage activity and user interactions.
- Ensured clear separation of concerns between model, controller, and test classes.

### SOLID Principles:
- Adopted SOLID principles by designing classes with single responsibilities and dependency inversion.

### Unit Testing with PHPUnit:
- Developed comprehensive tests with PHPUnit to validate model and controller functionalities.
- Achieved high code coverage to ensure robustness and reliability.

### RESTful API Features:
- Implemented a fully RESTful API with CRUD endpoints for activities.
- Provided filtering options for activities by date range, as specified in the challenge.

### Use of SQL Resources:
- Used Laravel migrations to manage database schema changes and ensure consistency across all environments.
- Employed SQL queries efficiently to retrieve and manipulate data as per business requirements.

## Usage Instructions:

1. Clone the repository to your local machine.
2. Install Composer dependencies using `composer install`.
3. Configure the `.env` file with your database credentials.
4. Run migrations to create necessary tables using `php artisan migrate`.
5. Start the development server with `php artisan serve`.
6. Access API endpoints as documented in the Swagger documentation or Postman collection.

For more detailed instructions and API documentation, refer to the Swagger documentation or Postman collection provided in the repository.

---
**Note:** If selected, we can schedule a code review session to discuss the delivered code in detail and address any questions or concerns.

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
