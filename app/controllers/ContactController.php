<?php
// app/controllers/ContactController.php

class ContactController
{
    public function index()
    {
        $pageTitle   = "Contact & prise de rendez-vous – Christel Cantois";
        $currentPage = 'contact';

        $errors  = [];
        $success = false;
        $old     = [
            'name'    => '',
            'email'   => '',
            'phone'   => '',
            'subject' => '',
            'message' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $old['name']    = trim($_POST['name'] ?? '');
            $old['email']   = trim($_POST['email'] ?? '');
            $old['phone']   = trim($_POST['phone'] ?? '');
            $old['subject'] = trim($_POST['subject'] ?? '');
            $old['message'] = trim($_POST['message'] ?? '');

            if ($old['name'] === '') {
                $errors['name'] = "Veuillez indiquer votre nom.";
            }
            if ($old['email'] === '' || !filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Veuillez indiquer une adresse e-mail valide.";
            }
            if ($old['message'] === '') {
                $errors['message'] = "Merci de préciser votre demande.";
            }

            if (empty($errors)) {
                // ⚠️ À ADAPTER : adresse mail de Christel
                $to      = 'contact@christel-sophrologie.ch';
                $subject = 'Nouveau message depuis le site – ' . ($old['subject'] ?: 'Prise de contact');
                $body    = "Nom : {$old['name']}\n"
                         . "Email : {$old['email']}\n"
                         . "Téléphone : {$old['phone']}\n\n"
                         . "Message :\n{$old['message']}\n";

                $headers = "From: {$old['email']}\r\nReply-To: {$old['email']}";

                // mail($to, $subject, $body, $headers); // à activer en prod si le serveur mail est configuré

                $success = true;
                // On vide le formulaire
                $old = [
                    'name'    => '',
                    'email'   => '',
                    'phone'   => '',
                    'subject' => '',
                    'message' => '',
                ];
            }
        }

        require dirname(__DIR__) . '/views/contact/index.php';
    }
}