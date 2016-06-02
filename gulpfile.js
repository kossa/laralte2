var elixir = require('laravel-elixir');
elixir.config.assetsPath = 'public/plugins/';
elixir.config.css.folder = '';
elixir.config.js.folder = '';

elixir.config.versioning.buildFolder = '/';


elixir(function(mix) {

	// Join CSS files
    mix.styles([
		'bootstrap/dist/css/bootstrap.min.css',
		'font-awesome/css/font-awesome.min.css',
		'/Ionicons/css/ionicons.min.css',
		'/datetimepicker/build/jquery.datetimepicker.min.css',
		'/sweetalert2/dist/sweetalert2.min.css',
		'/chosen/chosen.css',
		'/datatables/media/css/dataTables.bootstrap.min.css',
		'/AdminLTE/dist/css/AdminLTE.min.css',
		'iCheck/skins/square/blue.css',
		'/AdminLTE/dist/css/skins/skin-blue.min.css',
	], 'public/assets/css/admin.css');

    // Join JS files
	mix.scripts([
		'jquery/dist/jquery.min.js',
		'bootstrap/dist/js/bootstrap.min.js',
		'datetimepicker/build/jquery.datetimepicker.full.min.js',
		'datatables/media/js/jquery.dataTables.min.js',
		'datatables/media/js/dataTables.bootstrap.js',
		'sweetalert2/dist/sweetalert2.min.js',
		'chosen/chosen.jquery.js',
		'iCheck/icheck.min.js',
		'AdminLTE/dist/js/app.min.js',
	], 'public/assets/js/admin.js');

    // Copy Fonts
	mix.copy(
	   'public/plugins/font-awesome/fonts',
	   'public/assets/fonts'
    );
	mix.copy(
	   'public/plugins/bootstrap/dist/fonts',
	   'public/assets/fonts'
    );
	// Copy Images
	mix.copy(
	   'public/plugins/chosen/chosen-sprite.png',
	   'public/assets/css'
    );
	// Copy Images
	mix.copy(
	   'public/plugins/AdminLTE/dist/img/user2-160x160.jpg',
	   'public/img'
    );
    // Copy Icheck icons
	mix.copy(
	   'public/plugins/iCheck/skins/square/blue.png',
	   'public/assets/css'
    );
    // Copy API template
	mix.copy(
	   'public/plugins/apidocs/template',
	   'public/api'
    );


	// Versionning
	mix.version(['public/assets/css/admin.css', 'public/assets/js/admin.js']);
});


