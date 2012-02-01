<?php

//Route for base path, i.e. no controller specified
Router::addRoute(new Route('/', array('controller' => 'dealer', 'method' => 'home')))

?>