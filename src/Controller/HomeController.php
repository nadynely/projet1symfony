<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Produit;


class HomeController extends AbstractController {

    public function hello() : Response {

        /* $p = new Produit;
        $p->setTitre('Nouveau produit');
        $p->setDescription('Lorem ipsum dolor');
        $p->setPrix('10.9');
        $p->setNote('4');

        $em = $this->getDoctrine()->getManager();
        $em->persist($p);

        $em->flush(); */

        $repository = $this->getDoctrine()->getRepository(Produit::class);

        

     /*    $test1 = $repository->findAll();
        $test2 = $repository->find($id);
        $test3 = $repository->findOneBy( ['note'=>4] );

        dump($test1);
        dump($test2);
        dump($test3);
         */

        $produits = $repository->findAll();


        return $this->render('home.html.twig', compact('produits'));
    }
    /**
     * @route("/mon compte", name="compte-user")
     */
    public function apropos() : Response {

        return new Response('A propos du site');
    }
}
