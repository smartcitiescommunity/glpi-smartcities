<?php

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

 class DB extends DBmysql {
                
 var $dbhost = '.DB_HOST.';
                
 var $dbuser 	= '.DB_USER.';
                
 var $dbpassword= '.DB_PASS.';
                
 var $dbdefault	= 'glpi';
                
 } 
?>
