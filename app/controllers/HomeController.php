<?php
// app/controllers/HomeController.php

class HomeController
{
    public function index()
    {
        $pageTitle = "Sophrologie – Christel Cantois";

        $data = [
            'heroTitle' => 'Retrouvez calme et équilibre grâce à la sophrologie',
            'heroSubtitle' => 'Un accompagnement doux pour gérer le stress, les émotions et améliorer votre qualité de vie.',
        ];

        require dirname(__DIR__) . '/views/home/index.php';
    }
}
