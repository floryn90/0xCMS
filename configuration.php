<?php
//IMPORTANT:
//Rename this file to configuration.php after having inserted all the correct db information
global $configuration;
$configuration['soap'] = "http://www.phpobjectgenerator.com/services/pog.wsdl";
$configuration['homepage'] = "http://www.phpobjectgenerator.com";
$configuration['revisionNumber'] = "";
$configuration['versionNumber'] = "3.2";

$configuration['pdoDriver']	= 'mysql';
$configuration['setup_password'] = '';


// to enable automatic data encoding, run setup, go to the manage plugins tab and install the base64 plugin.
// then set db_encoding = 1 below.
// when enabled, db_encoding transparently encodes and decodes data to and from the database without any
// programmatic effort on your part.
$configuration['db_encoding'] = 1;

// edit the information below to match your database settings

$configuration['db']	= '';		//	<- database name
$configuration['host'] 	= '';	//	<- database host
$configuration['user'] 	= '';		//	<- database user
$configuration['pass']	= '';		//	<- database password
$configuration['port']	= '3306';		//	<- database port


//proxy settings - if you are behnd a proxy, change the settings below
$configuration['proxy_host'] = false;
$configuration['proxy_port'] = false;
$configuration['proxy_username'] = false;
$configuration['proxy_password'] = false;


//plugin settings
$configuration['plugins_path'] = '/home/bnegkcit/public_html/0xCMS/plugins';  //absolute path to plugins folder, e.g c:/mycode/test/plugins or /home/phpobj/public_html/plugins

//site Configuration
$configuration['title']="0xCMS";


?>