<?php 

// require_once'core/App.php';
// require_once'core/Controller.php';
// require_once'core/Database.php';
// require_once'core/Flasher.php';
// require_once'core/vendor/autoload.php';



require_once'config/config.php';

// teknik autoloading
spl_autoload_register(function ($class) {
	require_once __DIR__ . '/Core/' . $class . '.php';
});