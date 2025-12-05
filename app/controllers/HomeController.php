<?php
class HomeController
{
    public function index()
    {
        $pageTitle   = "Accueil – Christel Cantois, sophrologue à Morges";
        $currentPage = 'home';

        $data = [
            'heroTitle'    => 'Un souffle pour vous apaiser, un espace pour vous retrouver',
            'heroSubtitle' => 'Retrouvez calme, confiance et sérénité grâce à des séances de sophrologie adaptées à vos besoins.',
        ];

        require dirname(__DIR__) . '/views/home/index.php';
    }
}