<?php

namespace Code\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CarController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $models=[
            ['name'=>'Modelo 1'],
            ['name'=>'Modelo 2'],
            ['name'=>'Modelo 3'],
            ['name'=>'Modelo 4']
        ];
        $data=[
            [
                'name'=>'Marca 1',
                'description'=>'Lorem Ipsum...',
                'models'=>$models
            ],
            [
                'name'=>'Marca 2',
                'description'=>'Lorem Ipsum...',
                'models'=>$models
            ],
            [
                'name'=>'Marca 3',
                'description'=>'Lorem Ipsum...',
                'models'=>$models
            ]
        ];
        return compact('data');
    }
}
