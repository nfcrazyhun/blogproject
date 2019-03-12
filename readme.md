Simple blog project
Created by: Fölesi Péter

## Features:

-   Admin Panel
    - create/edit/list users
    - create/edit/list posts
    - create/edit/list categories
    - CKEditor for posts
-   Front-end
    - Native boostrap template
    - newes news first
    - paginations

<hr>
## Quick Start:
Clone this repository and install the dependencies.

$ git clone https://github.com/nfcrazyhun/blogproject.git
$ composer install

Run the command below to initialize. Do not forget to configure your .env file.

 - Create a database for the app
 - Fill the DB_DATABASE, DB_USERNAME, DB_PASSWORD fields
 - Generate Application key, APP_KEY field
```
$ php artisan key:generate
```


Set up demo:
```
$ php artisan migrate:refresh --seed
```
Compile files:
```
$ npm install
$ npm run prod
```

The application comes with default admin.
 - email: admin@admin.com
 - pw:admin
