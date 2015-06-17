# Restful API Template
Slim Framework: Restful API Template, use for back-end. Include with Eloquent ORM(Laravel 5)

# Configure

`config/database.php` - Set your `database`,`username`,`password` and `host` as necessary.

`config/definitions.php`

    define('TITLE', 'S Web Service'); // Set your Restful API Title
    define('BASE_URL','http://localhost/S/web/'); // Set your Web / System URL
    define('WEBSERVICE_URL','http://localhost/S/api/'); // Set this Restful API Base URL
    define('ADM',1); // This is the Administrator role, you may other roles as well as needed

`config/api.php` - This is where a list of API available. The key is the API file which located in `api` folder, and the value inside is the list of roles(which set in `config/definitions.php`) that can access this API.

`api` - contained all of your API. See `api/form.php` for example and refer to [Slim Framework Routing](http://docs.slimframework.com/routing/overview/) for more details.


