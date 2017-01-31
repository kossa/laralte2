# LaraLTE2
**_[Laravel](https://laravel.com/) PHP Framework with [AdminLTE2](https://almsaeedstudio.com/AdminLTE)_**  


Whenever I start a new Laravel project, I do the same thing; Install packages, download Javascript plugins...etc.  
This repository helps me bootstrap  all of that.


**Note:**  ***if you want to use Laravel [5.2](https://github.com/kossa/laralte2/tree/5.2)  or [5.3](https://github.com/kossa/laralte2/tree/5.3) please checkout to branch***

## Setup:
All you need is to run these commands:
```bash
git clone https://github.com/kossa/laralte2.git
cd laralte2 
composer install                   # Install backend dependencies
yarn install                       # Install node dependencies
cp .env.example .env               # Update database credentials configuration
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:refresh --seed # Run migration and seed users and categories for testing
sudo chmod 777 storage/ -R         # Chmod Storage
```


## Demo:
- Online demo: Can be found at [laralte2.bel4.com/admin](http://laralte2.bel4.com/admin)
- Local demo:  
`php artisan serve                  # Check installation (optional)`  
Open browser at [localhost:8000/admin](http://localhost:8000/admin) 

**Note:**  
Username: test@example.com  
Password: 123456

All the data are reset each 30mn ;)

***

## Included Packages:
#### Laravel (php):

* [Laravel Framework](https://github.com/laravel/laravel/) (5.4.*)
* [Forms & HTML](https://github.com/laravelcollective/html) : for forms
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) : for debugging
* [Intervention Image](https://github.com/intervention/image) : image handling and manipulation
* [Guzzle](https://github.com/guzzle/guzzle) : PHP HTTP client
* [Laravel RESTful API format](https://github.com/teepluss/laravel-restable) : To create Rest API
* [Redis](https://github.com/nrk/predis.git) : for chache

#### JS plugins:
LaraLTE2 uses : 

* [Laravel Mix](laravel-mix)
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE)
* [ApiDocs](https://github.com/apidoc/apidoc)
* [Ionicons](https://github.com/driftyco/ionicons)
* [bootstrap](https://github.com/twbs/bootstrap)
* [chosen](https://github.com/harvesthq/bower-chosen)
* [ckeditor Full](https://github.com/ckeditor/ckeditor-releases)
* [datatables + plugins](https://github.com/DataTables/DataTables)
* [datetimepicker](https://github.com/xdan/datetimepicker)
* [font-awesome](https://github.com/FortAwesome/Font-Awesome)
* [jquery](https://github.com/jquery/jquery)
* [sweetalert2](https://github.com/limonte/sweetalert2)
* [iCheck](https://github.com/fronteed/iCheck)
* [Axios](https://github.com/mzabriskie/axios)
* [VueJs](http://vuejs.org/)


## Page size optimization:
- Using [Laravel Mix](http://laravel.com/docs/master/mix), all CSS and JS are in minified to one file each.
- LaraLTE2 leverages browser caching, using `.htaccess` file from [html5-boilerplate](https://github.com/h5bp/html5-boilerplate)
- GZip compression is activated by default(APP_DEBUG=false => only onfile for js, and one file for css).  
  - `admin-HASH.css`: 63.9KB with gzip (376.5Kb without)  
  - `admin-HASH.js` : 99KB with gzip (318.9Kb without)

*__Note:__ If you're using Nginx check: [server-configs-nginx](https://github.com/h5bp/server-configs-nginx)*

![alt text](http://storage2.static.itmages.com/i/16/0602/h_1464877446_8945299_e45f066c58.png "Logo Title Text 1")


## REST API
As you may see in included packages, I used [ApiDocs](http://apidocjs.com/) to document all routes in `api/v1` and controllers in `Api` namespace.
You can check the docs at [laralte2.bel4.com/api](http://laralte2.bel4.com/api/)


#### Create new REST API ?
Rest Controllers are in the `App\Http\Controllers\Api` namespace.

* Create new controller that extends `ApiController` class
* Add your route in `api/v1` route group
* Add documentation block ([documentation](http://apidocjs.com/#example-full))
* Install ApiDoc via npm, run: `npm install apidoc -g` (only first time)
* Run this command : `apidoc -i app/Http/Controllers/Api/ -o public/api/ -t resources/apiTemplate/`
* That's all :)

*__Note:__ The API is protected by token, so when you send a request you should include `APP-TOKEN` in the header, this value will be compared to `APP_TOKEN` in `.env` file check [this middleware](https://github.com/kossa/laralte2/blob/master/app/Http/Middleware/ApiToken.php#L21)*


## Create new CRUD
Creating CRUD in your application is the job you do most. Let's create Post CRUD:

* Add new migration and model : `php artisan make:model Post -m`
* Open migration file and add your columns
* Create PostsController : `php  artisan make:controller`. fill your resource (you can use CategoriesController with some changes) or, if you are a lazy developer like me, use a [snippet](https://github.com/kossa/st-snippets/blob/master/kossa_php/Laravel/lcontroller.sublime-snippet) and make only 2 changes
* Duplicate `resource/views/admin/categories` folder to `posts`, make changes in `index.php`, `create.blade.php`, `edit.blade.php`