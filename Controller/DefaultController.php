<?php
class DefaultController{

    public function home()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAll();
        require 'View/home_view.php';
    }
}