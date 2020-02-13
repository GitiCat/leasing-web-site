<?php 

//  include config
include('config/config.php');

//  include core class
include(SITE_PATH . DS . 'core' . DS . 'core.php');

// include all classes from classes dir
include(SITE_PATH . DS . 'core' . DS . 'classes' . DS . 'router.php');
include(SITE_PATH . DS . 'core' . DS . 'classes' . DS . 'registry.php');
include(SITE_PATH . DS . 'core' . DS . 'classes' . DS . 'controllerBase.php');
include(SITE_PATH . DS . 'core' . DS . 'classes' . DS . 'template.php');