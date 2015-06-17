# Restful API Template
Restful API Template - use for creating a Restful API.

# Technologies

[Slim Framework](http://www.slimframework.com/) - Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.

[Eloquent](http://laravel.com/docs/5.0/eloquent) - The Eloquent ORM included with this template to provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.

# Structure

`utils` - Currently I have a simple `Session` class. May add more in future

`vendor` - Contained 3rd Party Library

`lib` - Contained an extended class of Slim Framework

`api` - Contained a list of API scripts

`config` - Contained a list of Restful API configuration files

# Configure

`config/database.php` - Set your `database`,`username`,`password` and `host` as necessary.

`config/definitions.php`

    define('TITLE', 'S Web Service'); // Set your Restful API Title
    define('BASE_URL','http://localhost/S/web/'); // Set your Web / System URL
    define('WEBSERVICE_URL','http://localhost/S/api/'); // Set this Restful API Base URL
    define('ADM',1); // This is the Administrator role, you may add other roles as well as needed

`config/api.php` - This is where a list of API available. The key is the API file which located in `api` folder, and the value inside is the list of roles(which set in `config/definitions.php`) that can access this API.

`api` - contained all of your API. See `api/form.php` for example and refer to [Slim Framework Routing](http://docs.slimframework.com/routing/overview/) for more details.

I have previously written a post in my blog about [Web Services: Slim Framework + Eloquent(Laravel)](http://nasrulhazim.com/blog/2015/05/02/web-services-slim-framework-eloquentlaravel/). So, this is a clean up version of the back-end part. Can be reuse for other projects.

Feel free to visit my blog at [blog.nasrulhazim.com](http://blog.nasrulhazim.com) for other things I've been working on.




