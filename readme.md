# LaraLTE2, Laravel PHP Framework with AdminLTE2


When I start a new Laravel project, I do the same thing, install my packages, download js plugins bla bla bla, so I created this repo to optimize a lot of time (for the moment I made 2 days to do this ^^).


### Installation :
All you need is to run those commands :
```bash
composer install # to install all php dependencies
cp .env.example .env # update data base access
php artisan key:generate # Generate new key for Laravel
php artisan migrate:refresh --seed # Run migration and seed users and categories for testing
sudo chmod 777 storage/ -R # Chmod Storage
php artisan serve # Optional, to check installation

```

Open browser http://localhost:8000/admin or online demo : http://laralte2.bel4.com/admin

_Note: use test@example.com/123456 to access_

***

### Included Packages :
#### Laravel (php):

* Latest [Laravel Framework](https://github.com/laravel/laravel/) (5.2.*)
* [Forms & HTML](https://github.com/laravelcollective/html) : for forms
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) : for debugging
* [Intervention Image](https://github.com/intervention/image) : image handling and manipulation
* [Laravel RESTful API format](https://github.com/teepluss/laravel-restable) : To create Rest API
* [Redis](https://github.com/nrk/predis.git) : for chache

#### JS plugins:
LaraLTE2 uses [Bower](http://bower.io/) to manage all web utilities such us : 

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

***

### Wow all those plugins !!! :
Alright, you'll say the page will be very very slow !!

Using [Laravel Elixir](https://github.com/laravel/elixir/), all CSS and JS are in 2 files Also LaraLTE2 includes activation of gzip and Leverage browser caching, using `.htaccess` file from [html5-boilerplate](https://github.com/h5bp/html5-boilerplate) :

* `admin-HASH.css` : 58.1KB (with gzip, 324.7Kb without)
* `admin-HASH.js` : 99.6KB (with gzip, 320.9Kb without)



Result of Page Speed :

![alt text](http://storage2.static.itmages.com/i/16/0602/h_1464877446_8945299_e45f066c58.png "Logo Title Text 1")


*__Note:__ If you're using Nginx check: [server-configs-nginx](https://github.com/h5bp/server-configs-nginx)*



### Rest API
As you can see in included packages, I used [apidocs](http://apidocjs.com/) for documentation all Routes are in `api/v1` and Controllers in `Api` namespace, you can check the doc here: http://laralte2.bel4.com/api/

#### Create new RestApi ?
Very simple, all Rest Controllers are in `app/Http/Controllers/Api` and extend `ApiController` class:

* Create new controller 
* Add your route in `api/v1` route group
* Add documentation block, refer to http://apidocjs.com/#example-full
* Install apidoc via npm, run : `npm install apidoc -g` (only first time)
* Run this command : `apidoc -i app/Http/Controllers/Api/ -o public/api/ -t resources/apiTemplate/`
* That's all :)


### Create new CRUD
Creating CRUD in your application is the most job you do, Let's create Post CRUD:

* Add new migration and model : `php artisan make:model Post -m`
* Open migration file and add your columns
* Create PostsController : `php  artisan make:controller`, fill your resource(you can use CategoriesController with some changes) Or if you are a lazy developer (like me lol) use a [snippet](https://github.com/kossa/st-snippets/blob/master/kossa_php/Laravel/lcontroller.sublime-snippet) and make only 2 changes
* Duplicate `resource/views/admin/categories` folder to `posts`, make changes in `index.php`, `create.blade.php`, `edit.blade.php`

