<?php
// app/controllers/SophrologieController.php

class SophrologieController
{
    public function index()
    {
        $pageTitle   = "La sophrologie – Christel Cantois";
        $currentPage = 'sophrologie';

        require dirname(__DIR__) . '/views/sophrologie/index.php';
    }
}