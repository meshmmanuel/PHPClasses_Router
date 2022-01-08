<?php

import 'Router.php';

Router::get('/', function(){
 // perform action for home path
});


Router::post('/post', function(){
 // perform action for home path
});


Router::get('/', 'Controller@action');

