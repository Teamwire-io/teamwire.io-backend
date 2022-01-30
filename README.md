#Symfony 5.0 with CRUD and Swag

### 1 Setup project

#### 1.1 Configure .env(.example)
- Setup JWT dependencies, generate a keypair, for localhost you can use anything.
https://github.com/lexik/LexikJWTAuthenticationBundle/blob/2.x/Resources/doc/index.md#installation
- Same for app secret

#### 1.2 Install dependencies
```
- Composer
    composer install
- Create Database
    bin/console doctrine:database:create
- Load Migrations
    bin/console doctrine:migrations:migrate
- load fixtures
    bin/console doctrine:fixtures:load
```

#### 1.3 Start webserver
If Symfony CLI is installed `symfony server:start`.
