<?php
class AproposController
{
    public function index()
    {
        $pageTitle   = "À propos – Christel Cantois, sophrologue à Morges";
        $currentPage = 'apropos';

        require dirname(__DIR__) . '/views/apropos/index.php';
    }
}