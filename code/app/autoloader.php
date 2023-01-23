<?php
  //load config
  require_once 'config/config.php';
  session_start();

  //AutoLoad Core Libraries
  spl_autoload_register(function($className){
    require_once 'classes/' .$className. '.php';
  });