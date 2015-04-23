<?php
/**
 * Created by PhpStorm.
 * User: leonardo
 * Date: 22/04/15
 * Time: 20:51
 */

namespace Code\ProdutoBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ProdutoRepository extends EntityRepository{

    public function getProdutosIdMaiorQue($num){
//        $dql = "select p from CodeProdutoBundle:Produto p WHERE p.id > :num ";
        return $this
            ->createQueryBuilder("p")
            ->where('p.id > :num')
            ->setParameter(':num', $num)
            ->getQuery()
            ->getResult();
    }
}