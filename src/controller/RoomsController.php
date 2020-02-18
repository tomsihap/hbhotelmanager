<?php

namespace App\Controller;

class RoomsController extends AbstractController {

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        // 1. Récupérer le car par son id
        $room = $this->container->getRoomManager()->findOneById($id);

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room
        ]);
    }

    /**
     * Afficher le formulaire de craétion de room
     * Route: GET /rooms/new
     */
    public function new()
    {
        echo $this->container->getTwig()->render('rooms/form.html.twig');
    }

    /**
     * Traiter le formulaire de création de room
     * Route: POST /rooms
     */
    public function create()
    {
        $this->container->getRoomManager()->create($_POST);

        Header('Location: ' . $this->configuration['env']['base_path']);
    }
}