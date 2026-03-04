<?php
// app/controllers/SeancesController.php

class SeancesController
{
    public function index()
    {
        $pageTitle   = "Séances de sophrologie – Christel Cantois";
        $currentPage = 'seances';

        // On charge la vue (le design HTML)
        require dirname(__DIR__) . '/views/seances/index.php';
    }
}