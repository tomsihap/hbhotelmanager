<?php

namespace App\Controller;

class RoomsController extends AbstractController {

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        $room = $this->container->getRoomManager()->findOneById($id);

        $clients = $this->container->getClientManager()->findAll();
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room,
            'clients' => $clients
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

    /**
     * Éditer une room (ajouter un client)
     * Route: POST /rooms/:id/edit
     */
    public function edit(int $id)
    {
        $this->container->getRoomManager()->update($id, $_POST);

        $this->show($id);
    }

    /**
     * Éditer une room (supprimer un client)
     * Route: POST /rooms/:id/deleteClient
     */
    public function deleteClient(int $id)
    {
        $this->container->getRoomManager()->update($id, ['client_id' => null]);

        $this->show($id);
    }
}