<?php

function index()
{
    // echo 'SHOW FORM';
    render('contact/form.php');
    // include SITE_ROOT . 'app/view/public/contact/form.php';
}

function send()
{
    var_dump($_POST);

    // traitement du formulaire (stocker en db + envoyer un mail un sms )
    $processingWentFine = false;
    if($processingWentFine){
        render('contact/success.php');
    }
    else{
        $data = [];
        $data['error'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
        $data['post_data'] = $_POST;
        render('contact/form.php', $data);
    }

    die;
}

