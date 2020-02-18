<?php


namespace App\Controller;


class ClientsController extends AbstractController
{

    public function index() {

        $clients = $this->container->getClientManager()->findAll();
        echo $this->container->getTwig()->render('clients/index.html.twig', [
            'clients' => $clients
        ]);
    }

    public function show(int $id) {
        $client = $this->container->getClientManager()->findOneById($id);

        echo $this->container->getTwig()->render('clients/show.html.twig', [
            'client' => $client
        ]);
    }

    public function new() {

        echo $this->container->getTwig()->render('clients/form.html.twig');
    }

    public function create() {
        $this->container->getClientManager()->create($_POST);
        $this->index();
    }

    public function edit(int $id) {
        $client = $this->container->getClientManager()->findOneById($id);

        echo $this->container->getTwig()->render('clients/form.html.twig', [
            'client' => $client
        ]);
    }

    public function update(int $id) {
        $this->container->getClientManager()->update($id, $_POST);
        $this->show($id);
    }

    public function delete(int $id) {
        $this->container->getClientManager()->delete($id);
        $this->index();
    }
}