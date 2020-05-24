# SMA 3 Boyolali Website
- This is a website built using the laravel framework. This website contains the main page and the admin page.  In the admin page, admin can do CRUD for blog, achievement, home, gallery that will be shown on the main page

## Instalation
- configuration
    ```bash
    $ git clone https://github.com/glayOne23/sma3boyolali.git
    $ composer install
    $ cp .env.example .env
    $ php artisan key:generate
    ```
- create mysql database
- import sma3boyolali.sql to database you already created
- in .env, change database name, user, and password based on yours 
    ```
    DB_DATABASE= your_db_name
    DB_USERNAME= your_username
    DB_PASSWORD= your_username_password
    ```
- php artisan migrate
## Uses
- To go to the home page : http://127.0.0.1:8000
- To go to the admin/superadmin page : http://127.0.0.1:8000/admin
- admin account: 
    - username : jajang 
    - password : 123 
- superadmin account :
    - username : superadmin
    - password : ily3000