<?php

class Controller {
    public function view($viewName) {
        $view = new View();
        $view->render($viewName); 
    }
}