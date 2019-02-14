<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController{

    /**
     * @Route("/mon compte", name="compte-user")
     */
    public function profil() : Response {
        return new Response('Bienvenue dans mon espace');
    }

    public function compteUser() : Response {
        return new Response ('espace de connexion');
    }
}