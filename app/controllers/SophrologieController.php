<?php
// app/controllers/SophrologieController.php

class SophrologieController
{
    public function index()
    {
        // On définit le titre de la page et on indique au menu quelle page est active
        $pageTitle   = "La sophrologie – Christel Cantois";
        $currentPage = 'sophrologie';

        // On charge la vue (le design HTML)
        require dirname(__DIR__) . '/views/sophrologie/index.php';
    }
}