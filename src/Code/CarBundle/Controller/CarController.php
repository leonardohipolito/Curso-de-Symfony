<?php

namespace Code\CarBundle\Controller;
use Code\CarBundle\Entity\Carro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CarController extends BaseController
{
    private $repo;
    private $em;

    /**
     * @Route("/",name="car_index")
     * @Template()
     */
    public function indexAction()
    {
        $this->em = $this->getDoctrine()->getManager();

        $carro = new Carro();
        $carro->setModelo('Siena')
            ->setFabricante("Fiat")
            ->setAno(2015)
            ->setCor("Branco");
        $this->em->persist($carro);
        // $this->em->flush();
        $this->repo = $this->em->getRepository("Code\CarBundle\Entity\Carro");
        $data = $this->repo->findAll();
        // print_r($data);
        // die();
        return compact('data');
    }
}
