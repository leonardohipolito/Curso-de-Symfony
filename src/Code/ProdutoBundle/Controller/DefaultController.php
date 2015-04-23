<?php

namespace Code\ProdutoBundle\Controller;

use Code\ProdutoBundle\Entity\Produto;
use Code\ProdutoBundle\Entity\ProdutoDetalhe;
use Code\CategoriaBundle\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/doctrine")
     * @Template()
     */
    public function testeAction(){

        $categoria = new Categoria();
        $categoria->setName('Teste');
        $categoria->setSlug('Teste');

        $produto = new Produto();
        $produto->setName('Notebook A');
        $produto->setDescription('Descrição do notebook');

        $produtoDetalhe = new ProdutoDetalhe();
        $produtoDetalhe->setAltura(10);
        $produtoDetalhe->setLargura(15);
        $produtoDetalhe->setPeso(1);

        $produto->setDetalhe($produtoDetalhe);
        $produto->setCategoria($categoria);
        $em = $this->getDoctrine()->getManager();
        $em->persist($produtoDetalhe);
        $em->persist($categoria);
        $em->persist($produto);
        // $em->flush();

        $repo = $em->getRepository("CodeProdutoBundle:Produto");
        $produtos = $repo->getProdutosIdMaiorQue(1);

        return compact('produtos');
    }
}
