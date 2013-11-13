<?php
namespace controller;

class vareListeController {
    private $request;
    /** @var \Doctrine\ORM\EntityManager */
    private $em;
    private $list;
    private $search;

    public function __construct($request) {
        $this->request = $request;
        $this->em = $GLOBALS["em"];
    }

    public function default_event() {
        $this->list = $this->em->getRepository('models\productModel')->findAll();
    }

    public function search_event() {
        $this->search = $this->request["search"];
        $this->list = $this->em->createQuery("SELECT p FROM models\\productModel p WHERE p.name LIKE :search")
        ->setParameter(":search","%".$this->request["search"]."%")
        ->getResult();

    }

    public function getProducts() {
        return $this->list;
    }

    public function getSearch() {
        return $this->search;
    }
}

