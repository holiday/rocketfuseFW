<?php

//Route for base path, i.e. no controller specified
Router::addRoute(Route::create()->setPath('/')->setController('index')->setMethod('index'));
?>