<?php
namespace Code\ProdutoBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Code\ProdutoBundle\Entity\Produto;
use Code\ProdutoBundle\Form\ProdutoType;
use Symfony\Component\HttpFoundation\Request;
/**
 * @Route("/produto", name="")
 */
class ProdutoController extends Controller
{



	/**
	 * @Route("/", name="produto_index")
	 * @Template()
	 */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository('CodeProdutoBundle:Produto');
    	$produtos = $repo->findAll();

    	return compact('produtos');
    }

    /**
     * @Route("/new", name="produto_new")
     * @Template()
     */
    public function newAction()
    {
    	$entity = new Produto();
    	$form = $this->createForm(new ProdutoType(),$entity);
        return [
        	'entity'=>$entity,
        	'form'=>$form->createView()
        ];
    }

    /**
     * @Route("/create", name="produto_create")
     * @Template("CodeProdutoBundle:Produto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Produto;
        $form = $this->createForm(new ProdutoType(),$entity);
        $form->bind($request);

        if($form->isValid()){
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($entity);
        	$em->flush();
        	return $this->redirect($this->generateUrl('produto_index'));
        }
        return [
        	'entity'=>$entity,
        	'form'=>$form->createView()
        ];
    }
}