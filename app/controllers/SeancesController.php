<?php
// app/controllers/SeancesController.php

class SeancesController
{
    public function index()
    {
        $pageTitle   = "Séances de sophrologie – Christel Cantois";
        $currentPage = 'seances';

        require dirname(__DIR__) . '/views/seances/index.php';
    }
}