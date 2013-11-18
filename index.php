<?php

//namespace template
use Rain\Tpl;

//importing files

@include ("configuration.php");
@include ("objects/class.database.php");
@include ("plugins/Rain/Tpl.php");

// configure
$config = array("base_url" => null, "tpl_dir" => "templates/", "cache_dir" => "cache/", "debug" => true // set to false to improve the speed
);
Tpl::configure($config);

// Add PathReplace plugin
require_once ('plugins/Rain/Tpl/Plugin/PathReplace.php');
Rain\Tpl::registerPlugin(new Rain\Tpl\Plugin\PathReplace());


//set variables
$vars = array(
		"title" 		=> $configuration['title'],
		"copyleft"		=> $configuration['copy']
	);
	
	//draw template
	$tpl=new Tpl;
	$tpl->assign($vars);
	$tpl->draw("default/index");
	

?>